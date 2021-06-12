<?php

namespace Wilzokch\LaravelQueue;

/**
 * laravel service provider
 */

use Illuminate\Support\ServiceProvider;
use Illuminate\Queue\QueueManager;

class QueueServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->app->extend(
            'queue',
            function ($command, $app) {
                $manager = new QueueManager($app);

                $this->registerConnectors($manager, $app);

                return $manager;
            }
        );
	}

    protected function registerConnectors($manager, $app) {
        $manager->addConnector('database', function () use ($app) {
            return new DatabaseConnector($app['db']);
        });
    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
    }
}
