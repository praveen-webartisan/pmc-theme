<?php

/**
 * Route
 */

class Route
{

	protected $routes = array();

	public function __construct()
	{
		//
	}

	protected function currentUri()
	{
		$uri 			=	$_SERVER["REQUEST_URI"];
		$uri 			=	substr($uri, strpos($uri, "/", strpos($uri, "/") + 1));

		if(strpos($uri, "?")){
			$uri 		=	strrev(substr(strrev($uri), strpos(strrev($uri), "?") +1));
		}

		$uri 			=	trim($uri);

		if($uri != "/"){
			$uri 		=	rtrim($uri, "/");
		}

		return $uri;
	}

	protected function isValidRoute($uri)
	{
		$validRoute = false;
		$requestType = $_SERVER["REQUEST_METHOD"];

		foreach($this->routes as $route){
			if($route["uri"] == $uri && $route["requestType"] == $requestType){
				$validRoute = true;
				break;
			}
		}

		return $validRoute;
	}

	protected function getRouteMethod($uri)
	{
		$method = null;

		foreach($this->routes as $route){
			if($route["uri"] == $uri){
				$method = $route["method"];
				break;
			}
		}

		return $method;
	}

	public function get($uri, $method)
	{
		$this->routes[] = 	[
								"uri" => $uri,
								"requestType" => "GET",
								"method" => $method
							];
	}

	public function post($uri, $method)
	{
		$this->routes[] = 	[
								"uri" => $uri,
								"requestType" => "POST",
								"method" => $method
							];
	}

	public function proceed()
	{
		$uri = $this->currentUri();

		if($this->isValidRoute($uri)){
			$method = $this->getRouteMethod($uri);

			if(!empty($method)){
				if(is_string($method)){
					if(strpos($method, "@")){
						$controller = strrev(substr(strrev($method), strpos(strrev($method), "@") + 1));
						$method = substr($method, strpos($method, "@") + 1);

						if($controller && $method){
							include __DIR__ . '/controllers/' . $controller . ".php";
							$obj = new $controller();
							echo $obj->$method();
						}else{
							abort(500);
						}
					}else{
						abort(500);
					}
				}else{
					call_user_func($method);
				}
			}
		}else{
			abort(404);
		}
	}

}