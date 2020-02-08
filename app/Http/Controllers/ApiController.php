<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Session;
use Response;
use App\Company;
use App\SstUser;
use App\FstUser;
use App\LocationUser;
use DB;
use Hash;
use Auth;

class ApiController extends Controller
{

	function siginIn(Request $request)
	{
		
		$validations=[
			'mobileNumber'=>'required',
			'password'=>'required'			
		];
		$validator=Validator::make($request->all(),$validations);
		if($validator->fails()){
			$response['message']=$validator->errors($validator)->first();
			return response()->json($response,400);
		}
		$accessToken=md5(uniqid(rand()));
		$chkdata=DB::table('locationusers')->where(['phone'=>$request->mobileNumber])->first();
		if($chkdata)
		{
			if(Hash::check($request->password,$chkdata->password)){
				$data = LocationUser::find($chkdata->id);
				$data->longitude = $request->longitude;
				$data->latitude = $request->latitude;
				$data->save();
				$userData = LocationUser::find($data->id);
				$ssType = SstUser::where('user_id',$chkdata->id)->first();
				$fstype = FstUser::where('user_id',$chkdata->id)->first();
				if ($ssType) {
					$usertype = 'SST';
					$usertypecolor = 'RED';
				}elseif($fstype){
					$usertype = 'FST';
					$usertypecolor = 'BLUE';
				}
				$response['message']='LogIn Successfully';
				$response['data']= ['id'=>$userData->id,
				'name'=>$userData->name,
				'email'=>$userData->email,
				'phone'=>$userData->phone,
				'address'=>$userData->address,
				'user_image'=>$userData->user_image,
				'longitude'=>$userData->longitude,
				'latitude'=>$userData->latitude,
				'UserType'=>$usertype ?? '',
				'UserTypeColor'=>$usertypecolor ?? '' 			
			]; 
			return response()->json($response,200);
		}else{
			$response['message']='Password Incorrect';
			return response()->json($response,400);
		}
	}else{
		$response['message']='Mobile Number Doest Exists';
		return response()->json($response,400);
	}
}

}