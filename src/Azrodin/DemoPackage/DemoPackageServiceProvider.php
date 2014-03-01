<?php namespace Azrodin\DemoPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class DemoPackageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('azrodin/demo-package');
                AliasLoader::getInstance()->alias('DemoClass', 'Azrodin\DemoPackage\DemoClass');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
                
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
