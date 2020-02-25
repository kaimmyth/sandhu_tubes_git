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
use App\FinishedGoodsType;
use App\MetalScrap;
use App\InvisibleLossPercentage;


class ManufacturingController extends Controller
{
  public function list(Request $request)
  {
    try {

      $toReturn = array();
      $toReturn['details'] = manufacturing_details::where('status', 1)->get();
      // foreach ($toReturn['details'] as $key => $value) {
      //   // $value->input_items_id = inv_item::where('id',$value->input_items_id)->value('item_name');
      //   // $value->input_items_id =  DB::table('item')->where('id',$item_name_id)->value('items_name');
      // }
      // echo"<pre>";
      // print_r($toReturn['details'][0]);exit;
      if (Auth::check() && Auth::user()->users_role != 1) {
        $land_permission = Session::get('all_module_permission');
        foreach ($land_permission as $key => $value_land) {
            if ($value_land['permission_value'] == 3) {
            $module_permission = $value_land;
            }
        }
      }

      $user_id = Session::get('gorgID');

      $data['content'] = 'Manufacturing.list';
      return view('layouts.content', compact('data'))->with(['toReturn' => $toReturn, 'user_id' => $user_id,'module_permission' => @$module_permission]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function add(Request $request)
  {

    $InventoryLocation = InventoryLocation::where('status', 1)->get();
    $inv_item = inv_item::all();
    foreach ($inv_item as $key => $value) {
      $value->item_name =  DB::table('item')->where('id',$value->item_name)->value('items_name');
    }
    $uom = Uom::where('status', 1)->get();
    $inputitem_type = DB::table('category')->where('is_active',1)->where('process',1)->select('id','category_name')->orderBy('id')->get();
    $outputtitem_type = DB::table('category')->where('is_active',1)->where('process',0)->select('id','category_name')->orderBy('id')->get();
    $finished_goods_type = FinishedGoodsType::where('status',1)->get();
    $metal_scrap_type = MetalScrap::where('status',1)->get();
    $invisible_loss_percentage = InvisibleLossPercentage::where('status',1)->get();


    $data['content'] = 'Manufacturing.add';
    return view('layouts.content', compact('data'))->with(['finished_goods_type'=>$finished_goods_type,'metal_scrap_type'=>$metal_scrap_type,'invisible_loss_percentage'=>$invisible_loss_percentage,'uom' => $uom, 'inv_item' => $inv_item, 'InventoryLocation' => $InventoryLocation, 'outputtitem_type' => $outputtitem_type, 'inputitem_type' => $inputitem_type]);
  }
  public function create(Request $request)
  {
   
    if ($request->manufacturing_details_id != "") {
      $manufacturing_details = manufacturing_details::find($request->manufacturing_details_id);
      $manufacturing_details->input_items_id = $request->input_items_id;
      $manufacturing_details->input_items_quantity = $request->input_items_quantity;
      $manufacturing_details->input_items_uom = $request->input_items_uom;
      $manufacturing_details->input_items_location = $request->input_items_location;
      $manufacturing_details->finished_goods_name = $request->finished_goods_name;
      $manufacturing_details->finished_goods_quantity = $request->finished_goods_quantity;
      $manufacturing_details->finished_goods_uom = $request->finished_goods_uom;
      // $manufacturing_details->finished_goods_location = $request->finished_goods_location;
      $manufacturing_details->metal_scrap_name = $request->metal_scrap_name;
      $manufacturing_details->metal_scrap_quantity = $request->metal_scrap_quantity;
      $manufacturing_details->metal_scrap_uom = $request->metal_scrap_uom;
      // $manufacturing_details->metal_scrap_location = $request->metal_scrap_location;
      $manufacturing_details->invisible_loss_name = $request->invisible_loss_name;
      $manufacturing_details->invisible_loss_quantity = $request->invisible_loss_quantity;
      $manufacturing_details->invisible_loss_uom = $request->invisible_loss_uom;
      $manufacturing_details->invisible_loss_auto = $request->invisible_loss_auto;
      $manufacturing_details->status = 1;
      // $manufacturing_details->qa_check = $request->qa_check;
      $manufacturing_details->input_item_type = $request->input_itemstype_ids;
      $manufacturing_details->finished_item_type = $request->finished_itemstype_ids;
      $manufacturing_details->scrap_item_type = $request->scrab_itemstype_ids;
      $manufacturing_details->loss_item_type = $request->loss_itemstype_ids;
      $manufacturing_details->finished_goods_dimension = $request->finished_goods_type;
      $manufacturing_details->metal_scrap_dimension = $request->scrab_itemstype_ids;
      $manufacturing_details->invisible_loss_dimension = $request->loss_itemstype_ids;
      // $manufacturing_details->updated_at = date('Y-m-d');
      $manufacturing_details->created_by = Auth::user()->id;
      // $manufacturing_details->update_by = Auth::user()->id;
      $manufacturing_details->save();
      Session::flash('success', 'Manufacturing Details Update Succesfully');
    } else {
      $manufacturing_details = new  manufacturing_details();
      $manufacturing_details->input_items_id = $request->input_items_id;
      $manufacturing_details->input_items_quantity = $request->input_items_quantity;
      $manufacturing_details->input_items_uom = $request->input_items_uom;
      $manufacturing_details->input_items_location = $request->input_items_location;
      $manufacturing_details->finished_goods_name = $request->finished_goods_name;
      $manufacturing_details->finished_goods_quantity = $request->finished_goods_quantity;
      $manufacturing_details->finished_goods_uom = $request->finished_goods_uom;
      // $manufacturing_details->finished_goods_location = $request->finished_goods_location;
      $manufacturing_details->metal_scrap_name = $request->metal_scrap_name;
      $manufacturing_details->metal_scrap_quantity = $request->metal_scrap_quantity;
      $manufacturing_details->metal_scrap_uom = $request->metal_scrap_uom;
      // $manufacturing_details->metal_scrap_location = $request->metal_scrap_location;
      $manufacturing_details->invisible_loss_name = $request->invisible_loss_name;
      $manufacturing_details->invisible_loss_quantity = $request->invisible_loss_quantity;
      $manufacturing_details->invisible_loss_uom = $request->invisible_loss_uom;
      $manufacturing_details->invisible_loss_auto = $request->invisible_loss_auto;
      $manufacturing_details->status = 1;
      // $manufacturing_details->qa_check = $request->qa_check;
      $manufacturing_details->input_item_type = $request->input_itemstype_ids;
      $manufacturing_details->finished_item_type = $request->finished_itemstype_ids;
      $manufacturing_details->scrap_item_type = $request->scrab_itemstype_ids;
      $manufacturing_details->loss_item_type = $request->loss_itemstype_ids;
      $manufacturing_details->finished_goods_dimension = $request->finished_goods_type;
      $manufacturing_details->metal_scrap_dimension = $request->scrab_itemstype_ids;
      $manufacturing_details->invisible_loss_dimension = $request->loss_itemstype_ids;
      $manufacturing_details->updated_at = date('Y-m-d');
      $manufacturing_details->created_by = Auth::user()->id;
      $manufacturing_details->update_by = Auth::user()->id;
      $manufacturing_details->save();
      Session::flash('success', 'Manufacturing Details Save Succesfully');
    }
    

    return redirect('Manufacturing/list');
    return $manufacturing_details;
  }
  public function edit($id = "")
  {
    $manufacturing_details = manufacturing_details::where('id', $id)->first();

    $InventoryLocation = InventoryLocation::where('status', 1)->get();
    $inv_item = inv_item::all();
    foreach ($inv_item as $key => $value) {
      $value->item_name =  DB::table('item')->where('id',$value->item_name)->value('items_name');
    }
    $uom = Uom::where('status', 1)->get();
    $inputitem_type = DB::table('category')->where('is_active',1)->where('process',1)->select('id','category_name')->orderBy('id')->get();
    $outputtitem_type = DB::table('category')->where('is_active',1)->where('process',0)->select('id','category_name')->orderBy('id')->get();
    $finished_goods_type = FinishedGoodsType::where('status',1)->get();
    $metal_scrap_type = MetalScrap::where('status',1)->get();
    $invisible_loss_percentage = InvisibleLossPercentage::where('status',1)->get();
    $data['content'] = 'Manufacturing.add';
    return view('layouts.content', compact('data'))->with(['finished_goods_type'=>$finished_goods_type,'metal_scrap_type'=>$metal_scrap_type,'invisible_loss_percentage'=>$invisible_loss_percentage,'manufacturing_details' => $manufacturing_details, 'inv_item' => $inv_item, 'InventoryLocation' => $InventoryLocation,'uom'=>$uom, 'outputtitem_type' => $outputtitem_type, 'inputitem_type' => $inputitem_type]);
  }
  public function delete($id = "")
  {
    if ($id != "") {
      Session::flash('success', 'Manufacturing Details Delete Succesfully');
      $manufacturing_details = manufacturing_details::where('id', $id)->delete();
      return back();
    } else {
      Session::flash('danger', 'Manufacturing Details Delete Failled');

      return back();
    }

    return $id;
  }
  public function view_details($id="")
  {
    $manufacturing_details = manufacturing_details::where('id', $id)->first();
    $data['content'] = 'Manufacturing.view_details';
    return view('layouts.content', compact('data'))->with(['manufacturing_details' => $manufacturing_details]);
 
  }
  public function get_item_details($id="")
  {
    $inv_item = inv_item::where('id',$id)->first();
    return $inv_item;
  }

  public function fetchItemname($type)
  {
    $toReturn['inv_Type_item'] = inv_item::where('item_category_id',$type)->select('id','item_name','item_category_id')->orderBy('id')->get();
    foreach ($toReturn['inv_Type_item'] as $key => $value) {
        $value->item_name = DB::table('item')->where('id',$value->item_name)->value('items_name');
    }
    return $toReturn;
  }

  public function get_item_name(Request $request)
  {
    $datas = inv_item::where('item_category_id', $request->input_items_id)->select('item_name')->get();
  
    return $datas;
  }
}
