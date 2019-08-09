<?php

/**
 * Request
 */

class request
{

	public function __construct()
	{
		//
	}

	public static function has($var)
	{
		return isset($_REQUEST[$var]);
	}

	public static function get($var)
	{
		return $_REQUEST[$var];
	}

	public static function all()
	{
		return $_REQUEST;
	}

}