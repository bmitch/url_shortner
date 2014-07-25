<?php namespace bmitch\Repositories;


interface LinkRepositoryInterface {

	public function byHash($hash);

	public function byUrl($url);

	public function create(array $data);
}