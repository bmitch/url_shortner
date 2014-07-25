<?php namespace bmitch\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'bmitch\Repositories\LinkRepositoryInterface',
			'bmitch\Repositories\DbLinkRepository'
		);
	}

	

}