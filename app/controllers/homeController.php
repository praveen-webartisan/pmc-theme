<?php

include_once __DIR__ . '/baseController.php';
include_once __DIR__ . '/../models/baseModel.php';

/**
 * Home controller
 */

class homeController extends baseController
{

	public function __construct()
	{
		$this->baseModel = new baseModel();
	}

	public function home()
	{
		return view("home");
	}

	public function setThemeAction()
	{
		$alert = [];

		if(request::has('theme')){
			$theme = request::get('theme');
			cookie::put('theme', $theme);
			$alert = ["type" => "success", "message" => "Theme has been changed!"];
		}else{
			$alert = ["type" => "failed", "message" => "Unable to change theme!"];
		}

		session::put('alert', $alert);
		return redirect();
	}

	public function contactFormSubmitAction()
	{
		$data = request::all();
		$validationRules = [
			"name" => "required",
			"email" => "required|email",
			"mobile" => "required|mobile_no",
			"message" => "required"
		];
		$alert = [
			"type" => "success",
			"message" => "Your message has been sent!"
		];

		$validationResult = $this->validateForm($data, $validationRules);

		if(isset($validationResult["inValid"])){
			$alert["type"] = "failed";
			$alert["message"] = "There are some invalid form data found! Please correct them all.";
			session::put('validation', $validationResult["inValid"]);
			session::put('formData', $data);
		}else{
			$subject = "[" . APP_TITLE . "] Contact form submitted";
			$messageBody = "Name: " . $data["name"] . "\r\n".
							"Email: " . $data["email"] . "\r\n".
							"Mobile No: " . $data["mobile"] . "\r\n".
							"Message: " . addslashes(str_replace("\n", "\n\n", $data["message"]));
			$mailResult = $this->sendMail(CONTACT_FORM_TO, $subject, $messageBody);

			// MAIL IS NOT SENDING

			if(!$mailResult["isSent"]){
				$alert["type"] = "failed";

				if(isset($mailResult["error"])){
					$alert["message"] = "Unable to send your message! Error occured: " . $mailResult["error"];
				}else{
					$alert["message"] = "Unable to send your message! Please contact support";
				}

				session::put('formData', $data);
			}
		}

		session::put('alert', $alert);

		return redirect();
	}

}