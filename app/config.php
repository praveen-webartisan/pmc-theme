<?php

define('APP_TITLE', 'PMC-Theme');

define('CONTACT_FORM_TO', 'praveen.openit@gmail.com');

define('DB', array(
	"host" => "localhost",
	"user" => "root",
	"password" => "letmein1!",
	"database" => "test",
));

define('THEMES', array(
	"blue" => array("bg" => "blue", "text" => "blue-text"),
	"indigo" => array("bg" => "indigo darken-4", "text" => "text-darken-4 indigo-text"),
	"pink" => array("bg" => "pink darken-1", "text" => "text-darken-1 pink-text"),
	"red" => array("bg" => "red", "text" => "red-text"),
	"green" => array("bg" => "green", "text" => "green-text"),
	"purple" => array("bg" => "purple", "text" => "purple-text"),
	"cyan" => array("bg" => "cyan", "text" => "cyan-text"),
	"teal" => array("bg" => "teal", "text" => "teal-text"),
	"brown" => array("bg" => "brown", "text" => "brown-text"),
	"grey" => array("bg" => "grey darken-2", "text" => "text-darken-2 grey-text"),
));

# Use color names from: https://materializecss.com/color.html#palette
define('APP_THEME', cookie::has('theme') ? THEMES[cookie::get('theme')]["bg"] : 'blue');
define('APP_TEXT_COLOR', cookie::has('theme') ? THEMES[cookie::get('theme')]["text"] : 'blue');

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