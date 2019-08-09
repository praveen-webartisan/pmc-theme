<?php

/**
 * Session
 */

session_start();

class session
{

	public function __construct()
	{
		//
	}

	public static function has($var)
	{
		return isset($_SESSION[$var]);
	}

	public static function get($var)
	{
		return $_SESSION[$var];
	}

	public static function all()
	{
		return $_SESSION;
	}

	public static function put($var, $value)
	{
		$_SESSION[$var] = $value;
	}

	public static function forget($var)
	{
		unset($_SESSION[$var]);
	}

}


/**
 * Cookie
 */

class cookie
{

	public function __construct()
	{
		//
	}

	public static function has($var)
	{
		return isset($_COOKIE[$var]);
	}

	public static function get($var)
	{
		return $_COOKIE[$var];
	}

	public static function all()
	{
		return $_COOKIE;
	}

	public static function put($var, $value)
	{
		setcookie($var, $value, time() + (86400 * 365), "/");
	}

	public static function forget($var)
	{
		setcookie($var, null, time() - 3600);
	}

}