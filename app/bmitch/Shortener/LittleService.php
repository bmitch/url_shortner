<?php namespace bmitch\Shortener;

use bmitch\Exceptions\NoneExistentHashException;
use bmitch\Repositories\LinkRepositoryInterface as LinkRepoInterface;
use bmitch\Utilities\UrlHasher;

class LittleService {

	protected $linkRepo;

	protected $urlHasher;

	function __construct(LinkRepoInterface $linkRepo, UrlHasher $urlHasher)
	{
		$this->LinkRepo = $linkRepo;
		$this->urlHasher = $urlHasher;
	}

	public function make($url)
	{
		$link = $this->LinkRepo->byUrl($url);

		return $link ? $link->hash : $this->makeHash($url);

	}

	public function getUrlByHash($hash)
	{
		$link = $this->LinkRepo->byHash($hash);

		if ( ! $link)
		{
			throw new NonExistentHashException;
		}

		return $link->url;
	}

	public function makeHash($url)
	{

		$hash = $this->urlHasher->make($url);

		$data = compact('url', 'hash');

		\Event::fire('link.creating', [$data]);

		$this->LinkRepo->create($data);

		return $hash;
	}
}