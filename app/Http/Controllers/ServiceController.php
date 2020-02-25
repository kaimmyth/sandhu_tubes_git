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
use App\FinishedGoodsType;
use App\lease_invoice;
use App\Industries;
use App\InputDetails;
use App\WasteMaterials;
use App\SubIndustry;
use App\Material;
use App\Uom;
use App\inv_item;
use App\service;
use App\InventoryLocation;
use App\manufacturing_details;
use App\MetalScrap;
use App\InvisibleLossPercentage;

class ServiceController extends Controller
{
  public function list(Request $request)
  {
    try {

      $toReturn = array();
      $toReturn['details'] = service::where('status', 1)->get();
      if (Auth::check() && Auth::user()->users_role != 1) {
        $land_permission = Session::get('all_module_permission');
        foreach ($land_permission as $key => $value_land) {
            if ($value_land['permission_value'] == 7) {
            $module_permission = $value_land;
            }
        }
      }

      $user_id = Session::get('gorgID');

      $data['content'] = 'service.list';
      return view('layouts.content', compact('data'))->with(['toReturn' => $toReturn, 'user_id' => $user_id,'module_permission' => @$module_permission]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
   
  }

  public function add(Request $request)
  {

    // $InventoryLocation = InventoryLocation::where('status', 1)->get();
    $inv_item = inv_item::get();
    $items = DB::table('item')->where('status',1)->get();
    $finished_goods = FinishedGoodsType::where('status',1)->get();
    $metal_scrap = MetalScrap::where('status',1)->get();
    $invisible_loss_percentage = InvisibleLossPercentage::where('status',1)->get();
    $categorys = DB::table('category')->where('is_active',1)->get();
    $service_type = DB::table('service_type')->where('status',1)->get();
    $uom = Uom::where('status', 1)->get();
   

    $data['content'] = 'service.add';
    return view('layouts.content', compact('data'))->with(['uom' => $uom,'invisible_loss_percentage'=>$invisible_loss_percentage,'metal_scrap'=>$metal_scrap,'finished_goods'=>$finished_goods,'inv_item' => $inv_item, 'items' => $items, 'categorys' => $categorys, 'service_type' => $service_type]);
  }
  public function create(Request $request)
  {
    // return $request;
    if ($request->service_details_id != "") {
      $service_details = service::find($request->service_details_id);
      $service_details->service_type_id = $request->service_type_id;
      $service_details->item_type_id = $request->item_type_id;
      $service_details->inv_item_id = $request->item_name_id;
      $service_details->input_quantity = $request->input_items_quantity;
      $service_details->input_uom_id = $request->input_items_uom;
      $service_details->finished_good_id = $request->finished_goods_name;
      $service_details->finished_good_quantity = $request->finished_goods_quantity;
      $service_details->finished_good_uom = $request->finished_goods_uom;
      $service_details->scrap = $request->metal_scrap_name;
      $service_details->scrap_quantity = $request->metal_scrap_quantity;
      $service_details->scrap_uom = $request->metal_scrap_uom;
      $service_details->invisible_loss = $request->invisible_loss_name;
      $service_details->invisible_quantity = $request->invisible_loss_quantity;
      $service_details->invisible_uom = $request->invisible_loss_uom;
      $service_details->finished_good_name = $request->finished_goods_dimension;
      $service_details->metal_scrap_name = $request->metal_scrap_dimension ;
      $service_details->invisible_loss_name = $request->invisible_loss_dimension ;

      // $service_details->invisible_loss_auto = $request->invisible_loss_auto;
      $service_details->status = 1;
      // $service_details->qa = $request->qa_check;
      $service_details->update_at = date('Y-m-d');
      $service_details->update_by = Auth::user()->id;
     
    
     
      $service_details->save();
      Session::flash('success', 'Service Details Update Succesfully');
    } else {
      $service_details = new  service();
      $service_details->service_type_id = $request->service_type_id;
      $service_details->item_type_id = $request->item_type_id;
      $service_details->inv_item_id = $request->item_name_id;
      $service_details->input_quantity = $request->input_items_quantity;
      $service_details->input_uom_id = $request->input_items_uom;
      $service_details->finished_good_id = $request->finished_goods_name;
      $service_details->finished_good_quantity = $request->finished_goods_quantity;
      $service_details->finished_good_uom = $request->finished_goods_uom;
      $service_details->scrap = $request->metal_scrap_name;
      $service_details->scrap_quantity = $request->metal_scrap_quantity;
      $service_details->scrap_uom = $request->metal_scrap_uom;
      $service_details->invisible_loss = $request->invisible_loss_name;
      $service_details->invisible_quantity = $request->invisible_loss_quantity;
      $service_details->invisible_uom = $request->invisible_loss_uom;
      // $service_details->invisible_loss_auto = $request->invisible_loss_auto;
      $service_details->finished_good_name = $request->finished_goods_dimension;
      $service_details->metal_scrap_name = $request->metal_scrap_dimension ;
      $service_details->invisible_loss_name = $request->invisible_loss_dimension ;
      $service_details->status = 1;
      // $service_details->qa = $request->qa_check;
      $service_details->created_at = date('Y-m-d');
      $service_details->created_by = Auth::user()->id;

      $service_details->save();
      Session::flash('success', 'Service Details Save Succesfully');
    }

    return redirect('serviceManu/list');
    // return $manufacturing_details;
  }
  public function edit($id = "")
  {
    $service_details = service::where('id', $id)->first();

    // $InventoryLocation = InventoryLocation::where('status', 1)->get();
    $inv_item = inv_item::all();
    $uom = Uom::where('status', 1)->get();
    $items = DB::table('item')->where('status',1)->get();
    $finished_goods = FinishedGoodsType::where('status',1)->get();
    $metal_scrap = MetalScrap::where('status',1)->get();
    $invisible_loss_percentage = InvisibleLossPercentage::where('status',1)->get();
    $categorys = DB::table('category')->where('is_active',1)->get();
    $service_type = DB::table('service_type')->where('status',1)->get();
    $data['content'] = 'service.add';
    return view('layouts.content', compact('data'))->with(['service_details' => $service_details,'finished_goods'=>$finished_goods,'metal_scrap'=>$metal_scrap,'invisible_loss_percentage'=>$invisible_loss_percentage,'inv_item' => $inv_item,'uom'=>$uom, 'items' => $items, 'categorys' => $categorys, 'service_type' => $service_type]);
  }
  public function delete($id = "")
  {
    if ($id != "") {
      Session::flash('success', 'Service Details Delete Succesfully');
      $service = service::where('id', $id)->delete();
      return back();
    } else {
      Session::flash('danger', 'Manufacturing Details Delete Failled');

      return back();
    }

    return $id;
  }
  public function view_details($id="")
  {
    $service_details = service::where('id', $id)->first();
   
    $data['content'] = 'service.view_details';
    return view('layouts.content', compact('data'))->with(['service_details' => $service_details]);
 
  }
  public function get_item_details($id="")
  {
    $inv_item = inv_item::where('id',$id)->first();
    return $inv_item;
  }

  public function get_item_name(Request $request)
  {
    $datas = inv_item::where('item_category_id', $request->item_name_id)->select('item_name')->get();
  
    return $datas;
  }
}
