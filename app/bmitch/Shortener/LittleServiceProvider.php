<?php namespace bmitch\Shortener;

use Illuminate\Support\ServiceProvider;

class LittleServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('Little', 'bmitch\Shortener\LittleService');
	}

	

}