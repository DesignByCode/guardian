<?php

namespace DesignByCode\Guardian\Tests;

use App\Models\User;
use DesignByCode\Guardian\GuardianServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        User::create([
           'name' => 'Claude',
           'email' => 'claude@degisnbycode.co.za',
           'password' => bcrypt('password'),
        ]);
    }

    protected function tearDown(): void
    {
        Schema::drop('users');
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
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        $app['config']->set('guardian.avatar.type', 'gravatar');
    }
}
