<?php

/**
 * Base controller
 */

class baseController
{

	public function __construct()
	{
		//
	}

	protected function isConditionSatisfied($condition, $data)
	{
		$isValid = false;
		$message = "";

		switch ($condition) {
			case 'required':
				$isValid = !empty($data);
				$message = "Required";
				break;
			case 'number':
				$isValid = preg_match('/^[0-9]+$/', $data);
				$message = "Invalid number";
				break;
			case 'mobile_no':
				$isValid = preg_match('/^[0-9]{10}$/', $data);
				$message = "Invalid mobile no";
				break;
			case 'email':
				$isValid = preg_match('/^[a-z0-9\.]*\@[a-z0-9]*\.[a-z]{3,4}$/', $data);
				$message = "Invalid email address";
				break;
		}

		return ["valid" => $isValid, "message" => $message];
	}

	public function validateForm($data, $rule)
	{
		$validationResult = [];

		foreach ($data as $colName => $value){
			$rules = explode("|", $rule[$colName]);

			foreach ($rules as $condition){
				$check = $this->isConditionSatisfied($condition, $value);
				if(!$check["valid"]){
					$validationResult["inValid"][$colName] = $check["message"];
					break;
				}
			}
		}

		return $validationResult;
	}

	public function sendMail($to, $subject, $message)
	{
		$header = "From: " . APP_TITLE . ".\r\n".
					"X-Mailer: PHP/" . phpversion();
		$result = [];

		try{
			$isSent = mail($to, $subject, $message, $header);
			$result["isSent"] = $isSent;
		}catch(Exception $e){
			$result["isSent"] = false;
			$result["error"] = $e->getMessage();
		}

		return $result;
	}

}