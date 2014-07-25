<?php

class LinksController extends \BaseController {

	public function create()
	{
		return View::make('links.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /links
	 *
	 * @return Response
	 */
	public function store()
	{
		try
		{
			// Little::make($url)
			$hash = Little::make(Input::get('url'));

		}

		catch (ValidationException $e)
		{
			return Redirect::home()->withErrors($e->getErrors())->withInput();
		}

		return Redirect::home()->with([
			'flash_message' => 'Here you go!' . Link_to($hash),
			'hashed' => $hash
			]);
	}


	public function translateHash($hash)
	{
		try
		{
			$url = Little::getUrlByHash($hash);

			return Redirect::to($url);
		}

		catch (NonExistentHashException $e)
		{
			return Redirect::home()->withFlashMessage('Sorry - could not find a URL associated with that hash.');
		}
	}

}