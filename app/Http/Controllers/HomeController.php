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
use App\Leads;
use App\LeadCall;
use App\LeadTask;
use App\LeadEvent;
use Response;
use App\Company;
use App\User;
use DB;
use Hash;
use Auth;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('role');
  }

  public function UserProfile(Request $request)
  {
    $profileData = Auth()->user();
    $data['content'] = 'admin.user.user-profile';
    return view('layouts.content', compact('data'));
  }

  public function UpdateProfile(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'password' => 'require|min:8',
      'new_password' => 'required|same:password',
      'email' => 'required|email',
    ]);
    if ($validator->fails()) {
      return redirect()->back()
      ->withErrors($validator)
      ->withInput();
    }
    if ($request->c_ids != '') {
      $cdata['org_name'] = $request->name;
      $cdata['email'] = $request->email;
      Company::where('id', $request->c_ids)->update($cdata);
    }
    if ($request->u_ids != '') {
      $udata['username'] = $request->username;
      $udata['email'] = $request->email;
      $udata['password'] = Hash::make($request->password);
      User::where('id', $request->u_ids)->update($udata);
    }

    return back();
  }

  public function Dashboard(Request $request)
  {
    // return Session::get('gorgID');
    $totalLeads = DB::table('lands')->where('status', '1')->count();
    $totalcustomers = DB::table('customer_company')->where('status', '1')->count();
    $totaltickets = DB::table('ticket')->count();
    
    $data['content'] = 'admin.home';
    return view('layouts.content', compact('data'))->with(['totalLeads'=>$totalLeads ?? '0', 'totalcustomers'=>$totalcustomers ?? '0', 'totaltickets'=>$totaltickets ?? '0']);
  }

  public function index()
  {
    return Redirect::action('HomeController@Dashboard');
  }
  
}
