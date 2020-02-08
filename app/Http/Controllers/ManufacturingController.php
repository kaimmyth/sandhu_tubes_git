<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Response;
use DB;
use Hash;
use Auth;
use PDF;
use App\PccRegistration;
use App\Land;
use App\AllLocationzone;
use App\AllLocationphase;
use App\AllLocationblock;
use App\Customer;
use App\Leasedata;
use App\ShareCustomer;
use App\CustCompany;
use App\lease_invoice;
use App\Industries;
use App\InputDetails;
use App\WasteMaterials;
use App\SubIndustry;
use App\Material;
use App\Uom;

class ManufacturingController extends Controller
{
    public function list(Request $request)
  {
    try {
      $results = DB::table('leasedata')->leftJoin('lands', 'lands.id', '=', 'leasedata.land_id')
      ->leftjoin('customer_company','customer_company.id','leasedata.cust_id')
      ->leftJoin('customers', 'customers.id', 'leasedata.cust_id')
        ->where(['leasedata.status' => 1])
        ->orderBy('customer_company.id','DESC')
        ->select('leasedata.*', 'customers.f_name', 'customers.l_name', 'customers.company','customer_company.company as company_name','customer_company.company_type as company_type' , 'lands.land_name','leasedata.land_id')->get();
// return $results;
      if(Auth::check() && Auth::user()->users_role == 2)
        {
        $land_permission=Session::get('all_module_permission');
        foreach($land_permission as $key=>$value_land)
        {
          if($value_land['permission_value']==3)
          {
            $module_permission=$value_land;
          }
        }
      }
      $user_id=Session::get('gorgID');

      $data['content'] = 'Manufacturing.list';
      return view('layouts.content', compact('data'))->with(['results' => $results ?? '','module_permission'=>$module_permission ??'','user_id'=>$user_id]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function add(Request $request)
  {
    $uom=Uom::where('status',1)->get();
    $zone = AllLocationzone::all();
    $phase = AllLocationphase::all();
    $block = AllLocationblock::all();
    $landdata = Land::all();
    $data['content'] = 'Manufacturing.add';
    return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block,'uom'=>$uom]);
  }
}
