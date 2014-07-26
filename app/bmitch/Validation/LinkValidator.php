<?php namespace bmitch\Validation;

class LinkValidator extends Validator {

	protected static $rules = [
		'url' => 'required|url|unique:links,url',
		'hash' => 'required|unique:links,hash'
	];


}