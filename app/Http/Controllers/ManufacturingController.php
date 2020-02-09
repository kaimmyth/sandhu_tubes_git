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
use App\inv_item;
use App\InventoryLocation;
use App\manufacturing_details;


class ManufacturingController extends Controller
{
    public function list(Request $request)
  {
    try {

      $toReturn=array();
      $toReturn['details']=manufacturing_details::where('status',1)->get();
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
      return view('layouts.content', compact('data'))->with(['toReturn'=>$toReturn,'results' => $results ?? '','module_permission'=>$module_permission ??'','user_id'=>$user_id]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function add(Request $request)
  {

    $InventoryLocation=InventoryLocation::where('status',1)->get();
    $inv_item=inv_item::all();
    $uom=Uom::where('status',1)->get();
    $zone = AllLocationzone::all();
    $phase = AllLocationphase::all();
    $block = AllLocationblock::all();
    $landdata = Land::all();
    $data['content'] = 'Manufacturing.add';
    return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block,'uom'=>$uom,'inv_item'=>$inv_item,'InventoryLocation'=>$InventoryLocation]);
  }
  public function create(Request $request)
  {
    if($request->manufacturing_details_id!="")
    {
      $manufacturing_details=manufacturing_details::find($request->manufacturing_details_id);
      $manufacturing_details->input_items_id=$request->input_items_id;
      $manufacturing_details->input_items_quantity=$request->input_items_quantity;
      $manufacturing_details->input_items_uom=$request->input_items_uom;
      $manufacturing_details->input_items_location=$request->input_items_location;
      $manufacturing_details->finished_goods_name=$request->finished_goods_name;
      $manufacturing_details->finished_goods_quantity=$request->finished_goods_quantity;
      $manufacturing_details->finished_goods_uom=$request->finished_goods_uom;
      $manufacturing_details->finished_goods_location=$request->finished_goods_location;
      $manufacturing_details->metal_scrap_name=$request->metal_scrap_name;
      $manufacturing_details->metal_scrap_quantity=$request->metal_scrap_quantity;
      $manufacturing_details->metal_scrap_uom=$request->metal_scrap_uom;
      $manufacturing_details->metal_scrap_location=$request->metal_scrap_location;
      $manufacturing_details->invisible_loss_name=$request->invisible_loss_name;
      $manufacturing_details->invisible_loss_quantity=$request->invisible_loss_quantity;
      $manufacturing_details->invisible_loss_uom=$request->invisible_loss_uom;
      $manufacturing_details->invisible_loss_auto=$request->invisible_loss_auto;
      $manufacturing_details->status=1;
      $manufacturing_details->updated_at=date('Y-m-d');
      $manufacturing_details->created_by=Auth::user()->id;
      $manufacturing_details->update_by=Auth::user()->id;
      $manufacturing_details->save();
      Session::flash('success', 'Manufacturing Details Update Succesfully');

    }
    else
    {
    $manufacturing_details=new  manufacturing_details();
    $manufacturing_details->input_items_id=$request->input_items_id;
    $manufacturing_details->input_items_quantity=$request->input_items_quantity;
    $manufacturing_details->input_items_uom=$request->input_items_uom;
    $manufacturing_details->input_items_location=$request->input_items_location;
    $manufacturing_details->finished_goods_name=$request->finished_goods_name;
    $manufacturing_details->finished_goods_quantity=$request->finished_goods_quantity;
    $manufacturing_details->finished_goods_uom=$request->finished_goods_uom;
    $manufacturing_details->finished_goods_location=$request->finished_goods_location;
    $manufacturing_details->metal_scrap_name=$request->metal_scrap_name;
    $manufacturing_details->metal_scrap_quantity=$request->metal_scrap_quantity;
    $manufacturing_details->metal_scrap_uom=$request->metal_scrap_uom;
    $manufacturing_details->metal_scrap_location=$request->metal_scrap_location;
    $manufacturing_details->invisible_loss_name=$request->invisible_loss_name;
    $manufacturing_details->invisible_loss_quantity=$request->invisible_loss_quantity;
    $manufacturing_details->invisible_loss_uom=$request->invisible_loss_uom;
    $manufacturing_details->invisible_loss_auto=$request->invisible_loss_auto;
    $manufacturing_details->status=1;
    $manufacturing_details->updated_at=date('Y-m-d');
    $manufacturing_details->created_by=Auth::user()->id;
    $manufacturing_details->update_by=Auth::user()->id;
    $manufacturing_details->save();
    Session::flash('success', 'Manufacturing Details Save Succesfully');

    }
  
return redirect('Manufacturing/list');
    return $manufacturing_details;
  }
  public function edit($id="")
  {
    $manufacturing_details=manufacturing_details::where('id',$id)->first();

    $InventoryLocation=InventoryLocation::where('status',1)->get();
    $inv_item=inv_item::all();
    $uom=Uom::where('status',1)->get();
    $zone = AllLocationzone::all();
    $phase = AllLocationphase::all();
    $block = AllLocationblock::all();
    $landdata = Land::all();
    $data['content'] = 'Manufacturing.add';
    return view('layouts.content', compact('data'))->with(['manufacturing_details'=>$manufacturing_details,'zone' => $zone, 'phase' => $phase, 'block' => $block,'uom'=>$uom,'inv_item'=>$inv_item,'InventoryLocation'=>$InventoryLocation]);
 

  }
}
