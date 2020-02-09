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
use App\inv_item;
use App\manufacturing_details;
use App\organization;
use App\shipment;


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

  //.......................................................Rohit item,manufatureing,orgnization,Inventory,
  public function Dashboard(Request $request)
  {
    if (Auth::check() && Auth::user()->users_role == 1) {
      $total_items = inv_item::where('created_by', Auth::user()->id)->count();
      $total_manufacturing_details = manufacturing_details::where('created_by', Auth::user()->id)->where('status', 1)->count();
      $total_organization = organization::where('created_by', Auth::user()->id)->where('status', 1)->count();
      $total_shipment = shipment::where('created_by',Auth::user()->id)->where('status', 1)->count();
    }
    else{

      $total_items = inv_item::count();
      $total_manufacturing_details = manufacturing_details::where('status', 1)->count();
      $total_organization = organization::where('status', 1)->count();
      $total_shipment = shipment::where('status', 1)->count();
    }

    $data['content'] = 'admin.home';
    return view('layouts.content', compact('data'))->with(['total_items' => $total_items ?? '0', 'total_manufacturing_details' => $total_manufacturing_details ?? '0', 'total_organization' => $total_organization ?? '0', 'total_shipment' => $total_shipment ?? '0']);
  }

  public function index()
  {
    return Redirect::action('HomeController@Dashboard');
  }
}
