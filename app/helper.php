<?php

function render($path, $args = null)
{
	ob_start();

	if(is_array($args)){
		extract($args);
		unset($args);
	}

	include $path;
	$content = ob_get_contents();
	ob_end_clean();
	$content = str_replace("\n", "", $content);
	return $content;
}

function includeView($view, $args = null)
{
	$view = __DIR__ . "/view/" . str_replace(".", "/", $view) . ".view.php";
	return render($view, $args);
}

function view($view, $args = null)
{
	$view = __DIR__ . "/view/" . str_replace(".", "/", $view) . ".view.php";
	return render($view, $args);
}

function baseUrl()
{
	$protocol 	=	isset($_SERVER["https"]) && $_SERVER["HTTPS"] != "off" ? "https" : "http";
	$server 	=	$_SERVER["SERVER_NAME"];
	$baseUrl 	=	$protocol . "://" . $server . $GLOBALS["appDir"];
	return $baseUrl;
}

function appUrl($path = null)
{
	$path = ltrim($path, "/");
	return baseUrl() . "/" . $path;
}

function assetsUrl($path)
{
	$baseUrl = baseUrl();
	return $baseUrl . (strpos($baseUrl, "/") ? "/" : "") . "assets/" . $path;
}

function redirect($route = null)
{
	$url = baseUrl() . $route;
	header('Location: ' . $url);
	exit;
}