<?php namespace Protechmaster\Gtmetrix;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class GtmetrixServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['GtmetrixScore'] = $this->app->share(function($app)
		{
			return new GtmetrixScore();
		});


		//register our facade
		$this->app->booting(function()
		{
			AliasLoader::getInstance()->alias('GtmetrixScore','Protechmaster\Gtmetrix\Facades\GtmetrixFacade');
		});

	}

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('protechmaster/gtmetrix');
	}



	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
