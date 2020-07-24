<?php

namespace App\Http\Controllers\api\user;

use App\Http\Controllers\Controller;
use App\Model\api\user\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\General\AppCommonFunctions;

class UserController extends Controller
{
    public function sendVerificationCode(Request $request) {

    if ($this->isTheseParametersAvailable(array('mobileNo')))  {

    	$getRequestParameter = $request->all();
    	$appCommonFunctionsObj = new AppCommonFunctions();

		$generateNumericOTP = $appCommonFunctionsObj->generateNumericOTP(4);
    	$requestParameterArray  = array('mobileNo' => $getRequestParameter['mobileNo'],
    									'smsOTP'=>$generateNumericOTP);
    	$result = $appCommonFunctionsObj->sendVerificationCode($requestParameterArray);

    	if($result == 1) {
    		$responseArray['action'] = 1;
    		$responseArray['message'] = $generateNumericOTP;
    	} else {
    		$responseArray['action'] = 0;
    		$responseArray['message'] = "Mobile Verification Failed. Please check your entered Mobile Number or try again Later.";
    	}
    	return response()->json($responseArray,200);
     }
     else {
     	$responseArray['action']=0;
		$responseArray['message']="Something is missing Please Check Request Parameter";
		return response()->json($responseArray,200);
     }
   }

   public function isTheseParametersAvailable($params) {
		foreach ($params as $param)  {
	 		if(!isset($_POST[$param])) {
			 	return false; 
			}
		}
		return true;
   }

}




