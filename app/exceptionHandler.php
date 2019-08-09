<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

function errorHandler($errNo, $errStr, $errFile, $errLine)
{
	echo "Error: [$errNo] $errStr<br>";
	echo "On line $errLine in $errFile<br>";
}

function exceptionHandler($exception)
{
	echo "Exception: " . $exception->getMessage() . "<br>";
	echo "On line " . $exception->getLine() . " in " . $exception->getFile() . "<br>";
}

set_error_handler("errorHandler");
set_exception_handler("exceptionHandler");

function abort($errorCode)
{
	header($_SERVER["SERVER_PROTOCOL"] . " " . $errorCode);
	die;
}