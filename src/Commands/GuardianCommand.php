<?php

namespace DesignByCode\Guardian\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GuardianCommand extends Command
{
    public $signature = 'guardian:install';

    public $description = 'Install guardian actions, styles and migrations';

    public function handle()
    {
        $this->comment('Ready...');
        $this->line('Guardian will now start fortifying your application');

        $this->comment(PHP_EOL."
  ______ _     _ _______  ______ ______  _____ _______ __   _
 |  ____ |     | |_____| |_____/ |     \   |   |_____| | \  |
 |_____| |_____| |     | |    \_ |_____/ __|__ |     | |  \_|
                                                            ".PHP_EOL.PHP_EOL);

        $this->withProgressBar(8, function ($bar) {
            $bar->start();

            $this->callSilent('vendor:publish', [
                '--provider' => 'DesignByCode\Guardian\GuardianServiceProvider',
                '--force' => true,
            ]);

            $this->callSilent('vendor:publish', [
                '--provider' => 'Laravel\Fortify\FortifyServiceProvider',
                '--force' => true,
            ]);


            $this->callSilent('vendor:publish', [
                '--provider' => 'Spatie\MediaLibrary\MediaLibraryServiceProvider',
            ]);

            $this->callSilent('storage:link');

            $bar->advance();
            sleep(1);

            $this->callSilent('migrate');

            $bar->advance();
            sleep(1);

            copy(__DIR__.'/../../stubs/app/Models/User.php', app_path('Models/User.php'));

            if (file_exists($filepath = config_path('fortify.php'))) {
                $this->replaceInFile('// Features::emailVerification(),', 'Features::emailVerification(),', $filepath);
            }

            if (file_exists($welcomePath = resource_path('views/welcome.blade.php'))) {
                $this->replaceInFile('/home', '/dashboard', $welcomePath);
                $this->replaceInFile('Home', 'Dashboard', $welcomePath);
            }

            $bar->advance();
            sleep(1);

            $this->replaceInFile('/home', '/dashboard', app_path('Providers/RouteServiceProvider.php'));

            $bar->advance();
            sleep(1);
            // Fortify Provider...
            $this->installServiceProviderAfter('RouteServiceProvider', 'FortifyServiceProvider');

            $bar->advance();
            sleep(1);

            file_put_contents(
                base_path('routes/web.php'),
                file_get_contents(__DIR__.'/../../stubs/routes/routes.stub'),
                FILE_APPEND
            );

            $bar->advance();
            sleep(1);

            File::deleteDirectory(resource_path('lang'));
            File::copyDirectory(__DIR__ . '/../../resources/lang', resource_path('lang'));

            $bar->finish();
        });







        $this->line("");
        $this->comment('All done');
    }

    /**
     * @param string $search
     * @param string $replace
     * @param string $path
     */
    protected function replaceInFile(string $search, string $replace, string $path)
    {
        file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
    }

    /**
     * @param $after
     * @param $name
     */
    protected function installServiceProviderAfter($after, $name)
    {
        if (! Str::contains($appConfig = file_get_contents(config_path('app.php')), 'App\\Providers\\'.$name.'::class')) {
            file_put_contents(config_path('app.php'), str_replace(
                'App\\Providers\\'.$after.'::class,',
                'App\\Providers\\'.$after.'::class,'.PHP_EOL.'        App\\Providers\\'.$name.'::class,',
                $appConfig
            ));
        }
    }

    /**
     * Install the middleware to a group in the application Http Kernel.
     *
     * @param  string  $after
     * @param  string  $name
     * @param  string  $group
     * @return void
     */
    protected function installMiddlewareAfter(string $after, string $name, $group = 'web')
    {
        $httpKernel = file_get_contents(app_path('Http/Kernel.php'));

        $middlewareGroups = Str::before(Str::after($httpKernel, '$middlewareGroups = ['), '];');
        $middlewareGroup = Str::before(Str::after($middlewareGroups, "'$group' => ["), '],');

        if (! Str::contains($middlewareGroup, $name)) {
            $modifiedMiddlewareGroup = str_replace(
                $after.',',
                $after.','.PHP_EOL.'            '.$name.',',
                $middlewareGroup,
            );

            file_put_contents(app_path('Http/Kernel.php'), str_replace(
                $middlewareGroups,
                str_replace($middlewareGroup, $modifiedMiddlewareGroup, $middlewareGroups),
                $httpKernel
            ));
        }
    }
}
