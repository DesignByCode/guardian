<?php

namespace DesignByCode\Guardian;

use DesignByCode\Guardian\Commands\GuardianCommand;
use DesignByCode\Guardian\Http\Controllers\DashboardController;
use DesignByCode\Guardian\Http\Controllers\DeleteAccountController;
use DesignByCode\Guardian\Http\Controllers\ProfileController;
use DesignByCode\Guardian\Http\View\Components\Layout;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Laravel\Fortify\Fortify;

class GuardianServiceProvider extends ServiceProvider
{
    const NAME = 'guardian';

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/guardian.php', self::NAME);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->registerViewComponent();
        $this->registerComponents();

        $this->loadViews();
        $this->registerAllFortifyViews();
        $this->publishCommands();
        $this->registerCommand();
        $this->createAdminRoutes();
    }

    /**
     * Load guardian views
     */
    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', self::NAME);
    }

    /**
     * Register and assign view to fortify route
     */
    protected function registerAllFortifyViews()
    {
        Fortify::registerView(fn () => view('guardian::auth.register'));

        Fortify::loginView(fn () => view('guardian::auth.login'));

        Fortify::confirmPasswordView(fn () => view('guardian::auth.password-confirm'));

        Fortify::verifyEmailView(fn () => view('guardian::auth.verify-email'));

        Fortify::requestPasswordResetLinkView(fn () => view('guardian::auth.password-request'));

        Fortify::resetPasswordView(fn () => view('guardian::auth.password-reset'));

        Fortify::twoFactorChallengeView(fn () => view('guardian::auth.two-factor-challenge'));
    }

    /**
     * Vendor publish commands
     */
    protected function publishCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->root('resources/views') => resource_path('views/vendor/guardian'),
            ], self::NAME . '-views');

            $this->publishes([
                $this->root('database/migrations') => base_path('database/migrations'),
            ], self::NAME . '-migrations');

            $this->publishes([
                $this->root('config/guardian.php') => config_path('guardian.php'),
            ], self::NAME . '-config');

            $this->publishes([
                $this->root('public') => public_path('/'),
            ], self::NAME . '-styles');
        }
    }

    /**
     * @param string $string
     * @return string
     */
    protected function root(string $string): string
    {
        return __DIR__ . '/../' . $string;
    }

    protected function registerViewComponent()
    {
        $this->loadViewComponentsAs(self::NAME, [
            Layout::class,
        ]);
    }

    protected function registerComponents()
    {
        $components = [
            'alert',
            'avatar',
            'form-delete-account',
            'fixed-flash',
            'form-register',
            'form-login',
            'form-two-factor',
            'form-two-factor-challenge',
            'form-update-user',
            'form-update-password',
            'form-password-reset',
            'form-password-request',
            'form-update-password-confirm',
            'form-verify-email',
            'sidebar-nav',
            'sidebar-nav-button',
            'top-nav',
        ];

        $this->callAfterResolving(BladeCompiler::class, function () use ($components) {
            foreach ($components as $component) {
                $this->registerComponent($component);
            }
        });
    }

    protected function registerComponent($component)
    {
        Blade::component('guardian::components.' .  $component, self::NAME . '-' . $component);
    }

    private function registerCommand()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GuardianCommand::class,
            ]);
        }
    }

    private function createAdminRoutes()
    {
        Route::macro(self::NAME, function (string $prefix = 'dashboard') {
            Route::group([
                'prefix' => $prefix,
                'as' => 'guardian.',
                'middleware' => array_filter(array_merge(['web', 'auth'], config('guardian.middleware'))),
            ], function () {
                Route::get('/', DashboardController::class)
                    ->name('dashboard');

                Route::get('/profile', ProfileController::class)
                    ->name('profile');

                Route::delete('delete-account', DeleteAccountController::class)
                    ->name('delete-account');
            });
        });
    }
}