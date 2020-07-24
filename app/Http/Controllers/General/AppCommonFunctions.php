<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppCommonFunctions extends Controller
{

	// Function to Send Verification code to User when User register on the App.

    public function sendVerificationCode($requestParameterArray) {

    	  $mobileNo = $requestParameterArray['mobileNo'];
    	  $smsOTP = $requestParameterArray['smsOTP'];
    	  	
    	  $curl = curl_init();
		  curl_setopt_array($curl, array(
  		  CURLOPT_URL => "https://api.msg91.com/api/v5/otp?authkey=333426At2NBfna7D5ef207c1P1&mobile=$mobileNo&otp=$smsOTP",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/json"
		  ),
		));
		$response = curl_exec($curl);
		$decodeJsonData = json_decode($response);
		$status = $decodeJsonData->type;
		if($status == "success") {
			return 1;
		} else {
			return 0;
		}
    }


	// Function to generate OTP 
	public function generateNumericOTP($n) { 
		$generator = 1357902468; 
		$result = ""; 
		for ($i = 1; $i <= $n; $i++) { 
			$result .= substr($generator, (rand()%(strlen($generator))), 1); 
		} 
		return $result; 
	} 
}
