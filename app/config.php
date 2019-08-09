<?php

define('APP_TITLE', 'PMC-Theme');

define('CONTACT_FORM_TO', 'praveen.openit@gmail.com');

define('DB', array(
	"host" => "localhost",
	"user" => "root",
	"password" => "letmein1!",
	"database" => "test",
));

# Use color names from: https://materializecss.com/color.html#palette
define('APP_THEME', cookie::has('theme') ? cookie::get('theme') : 'blue');

if(session::has('alert')){
	define('ALERT', session::get('alert'));
	session::forget('alert');
}

if(session::has('validation')){
	define('VALIDATION', session::get('validation'));
	session::forget('validation');
}

if(session::has('formData')){
	define('FORM_DATA', session::get('formData'));
	session::forget('formData');
}