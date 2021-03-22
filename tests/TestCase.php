<?php

namespace DesignByCode\Guardian\Tests;

use DesignByCode\Guardian\GuardianServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * Class TestCase
 * @package DesignByCode\Guardian\Tests
 */
abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'DesignByCode\\Guardian\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return [
            GuardianServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
        include_once __DIR__.'/../database/migrations/create_guardian_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
