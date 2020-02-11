<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inv_item;
use App\shipment;
use Auth;
use Session;
use DB;
class shipmentController extends Controller
{
    public function index()
    {
        $statusdata = shipment::where('status',1)->get();
        $data['content'] = 'shipment.shipment_list';
        return view('layouts.content', compact('data'))->with(['statusdata' => $statusdata]);
    }
    public function addView($id)
    {
        $cities = DB::table('cities')->where('status',1)->select('id','city')->orderBy('city','ASC')->get();
        $state = DB::table('state')->where('status',1)->select('id','state')->orderBy('state','ASC')->get();
        if($id == 1)
        $data['content'] = 'shipment.add_shipment';
        else
        $data['content'] = 'shipment.add_shipment_out';
        return view('layouts.content', compact('data'))->with(['cities' => $cities,'state' => $state]);
    }
    public function addStore(Request $request)
    {
        $items_received_ids = [];
        if ($request->item_ids) {
            foreach ($request->item_ids as $key => $value) {
                $items_received_ids[] = array('item_id' => $value, 'item_location_id' => $request->item_location[$key], 'item_quantity' => $request->quantity[$key], 'item_serial_no' =>  $request->serial_no[$key]);
            }
        }
        $items_received_ids_JSONencoded = json_encode($items_received_ids);
        // echo "<pre>";
        // print_r($items_received_ids_JSONencoded);exit;
        // return $items_received_ids_JSONencoded;
        $shipmentData = new shipment();
        $shipmentData->supplier_name = $request->supplier_name;
        $shipmentData->shipment_type = $request->shipment_type;
        $shipmentData->address = $request->address;
        $shipmentData->city = $request->city;
        $shipmentData->state = $request->state;
        $shipmentData->pincode = $request->pin;
        $shipmentData->vehicle_type = $request->vehicle_type;
        $shipmentData->vehicle_make = $request->vehicle_make;
        $shipmentData->model = $request->model;
        $shipmentData->license_no = $request->license_no;
        $shipmentData->driver_name = $request->driver_name;
        $shipmentData->phone1 = $request->phone1;
        $shipmentData->phone2 = $request->phone2;
        $shipmentData->driver_address = $request->driver_address;
        $shipmentData->shiped_item = $items_received_ids_JSONencoded;
        // $shipmentData->items_location_ids = json_encode($request->item_location);
        $shipmentData->status = $request->status;
        $shipmentData->created_by = Auth::user()->id;
        $shipmentData->created_date = date('Y-m-d');
        $shipmentData->save();

        if($request->shipment_type == 1) 
        {
            if ($request->item_ids) {
                foreach ($request->item_ids as $key => $value) {
                    $Edit_inv_itemData = inv_item::find($value);
                    $Edit_inv_itemData->quantity = $Edit_inv_itemData->quantity + $request->quantity[$key];
                    $Edit_inv_itemData->save();
                }
            }

        }
        else
        {
            if ($request->item_ids) {
                foreach ($request->item_ids as $key => $value) {
                    $Edit_inv_itemData = inv_item::find($value);
                    $Edit_inv_itemData->quantity = $Edit_inv_itemData->quantity - $request->quantity[$key];
                    $Edit_inv_itemData->save();
                }
            }
        }
        Session::flash('success', 'Create Success');
        return redirect('shipment/listing');
    }
    public function showView($id)
    {
        $shipmentdata = shipment::where('id',$id)->first();
        if ($shipmentdata->shipment_type == 1) {
            $shipmentdata->shipment_type = "IN";
        } else {
            $shipmentdata->shipment_type = "OUT";
        }
        if ($shipmentdata->status == 1) {
            $shipmentdata->status = "Active";
        } else {
            $shipmentdata->status = "InActive";
        }
        $ids = [];
        $loc_ids = [];
        if($shipmentdata->items_received_ids)
        $ids = json_decode($shipmentdata->items_received_ids);
        if($shipmentdata->items_location_ids)
        $loc_ids = json_decode($shipmentdata->items_location_ids);
        $inv_itemdata = inv_item::whereIn('id',$ids)->get();
        $locationiddata = DB::table('inventory_location')->whereIn('id',$loc_ids)->get();
        $data['content'] = 'shipment.view_shipment';
        return view('layouts.content', compact('data'))->with(['shipmentdata' => $shipmentdata,'inv_itemdata' => $inv_itemdata,'locationiddata' => $locationiddata]);
    }
    public function editView($id)
    {
        $shipmentdata = shipment::where('id',$id)->first();
        $shiped_item_data = [];
        if($shipmentdata->shiped_item)
        $shiped_item_data = json_decode($shipmentdata->shiped_item);
        // foreach ($shiped_item_data as $key => $value) {
        //     $value->item_id = inv_item::where('id',$value->item_id)->value('item_name');
        //     $value->item_location_id = DB::table('inventory_location')->where('id',$value->item_location_id)->value('location_name');
        //     // $value->item_quantity;
        //     // $value->item_serial_no;
        // }
        // echo "<pre>";
        // print_r($shiped_item_data);exit;
        // $ids = [];
        // $loc_ids = [];
        // if($shipmentdata->items_received_ids)
        // $ids = json_decode($shipmentdata->items_received_ids);
        // if($shipmentdata->items_location_ids)
        // $loc_ids = json_decode($shipmentdata->items_location_ids);
        // $inv_itemdata = inv_item::whereIn('id',$ids)->select('id','item_name','serial_no')->get();
        // $locationiddata = DB::table('inventory_location')->whereIn('id',$loc_ids)->select('id','location_name')->get();
        $inv_item = inv_item::select('id','item_name')->orderBy('id')->get();
        $inventory_location = DB::table('inventory_location')->where('status',1)->get();
        $cities = DB::table('cities')->where('status',1)->select('id','city')->orderBy('city','ASC')->get();
        $state = DB::table('state')->where('status',1)->select('id','state')->orderBy('state','ASC')->get();
        if($shipmentdata->shipment_type == 1)
        $data['content'] = 'shipment.edit_shipment';
        else
        $data['content'] = 'shipment.edit_shipment_out';
        return view('layouts.content', compact('data'))->with(['shipmentdata' => $shipmentdata,'inv_item' => $inv_item,'inventory_location' => $inventory_location,'cities' => $cities,'state' => $state,'shiped_item_data' => $shiped_item_data]);
    }
    public function editStore(Request $request)
    {
        $items_received_ids = [];
        if ($request->item_ids) {
            foreach ($request->item_ids as $key => $value) {
                $items_received_ids[] = array('item_id' => $value, 'item_location_id' => $request->item_location[$key], 'item_quantity' => $request->quantity[$key], 'item_serial_no' =>  $request->serial_no[$key]);
            }
        }
        $items_received_ids_JSONencoded = json_encode($items_received_ids);
        // return $request;
        $edit_shipmentData = shipment::find($request->shipment_id);
        $edit_shipmentData->supplier_name = $request->supplier_name;
        // $edit_shipmentData->shipment_type = $request->shipment_type;
        $edit_shipmentData->address = $request->address;
        $edit_shipmentData->city = $request->city;
        $edit_shipmentData->state = $request->state;
        $edit_shipmentData->pincode = $request->pin;
        $edit_shipmentData->vehicle_type = $request->vehicle_type;
        $edit_shipmentData->vehicle_make = $request->vehicle_make;
        $edit_shipmentData->model = $request->model;
        $edit_shipmentData->license_no = $request->license_no;
        $edit_shipmentData->driver_name = $request->driver_name;
        $edit_shipmentData->phone1 = $request->phone1;
        $edit_shipmentData->phone2 = $request->phone2;
        $edit_shipmentData->driver_address = $request->driver_address;
        $edit_shipmentData->shiped_item = $items_received_ids_JSONencoded;
        // $edit_shipmentData->items_location_ids = json_encode($request->item_location);
        $edit_shipmentData->status = $request->status;
        $edit_shipmentData->modified_by = Auth::user()->id;
        $edit_shipmentData->modified_date = date('Y-m-d');
        $edit_shipmentData->save();

        if($edit_shipmentData->shipment_type == 1) 
        {
            if ($request->item_ids) {
                foreach ($request->item_ids as $key => $value) {
                    $Edit_inv_itemData = inv_item::find($value);
                    $Edit_inv_itemData->quantity = $Edit_inv_itemData->quantity + $request->quantity[$key];
                    $Edit_inv_itemData->save();
                }
            }

        }
        else
        {
            if ($request->item_ids) {
                foreach ($request->item_ids as $key => $value) {
                    $Edit_inv_itemData = inv_item::find($value);
                    $Edit_inv_itemData->quantity = $Edit_inv_itemData->quantity - $request->quantity[$key];
                    $Edit_inv_itemData->save();
                }
            }
        }
        Session::flash('success', 'Update Success');
        return redirect('shipment/listing');
    }
    public function deletedata($id)
    {
        if ($id) {
            $inv_item = shipment::where('id',$id)->delete();
        }
        Session::flash('success', 'Itam Delete Success');
        return redirect('shipment/listing');
    }
    public function fetchItems()
    {
        $toReturn['inventory_location'] = DB::table('inventory_location')->where('status',1)->get();
        $toReturn['inv_item'] = inv_item::select('id','item_name')->orderBy('id')->get();
        return $toReturn;
    }

    public function fetchItemsserialno($id)
    {
        $toReturn['inv_item_sl'] = inv_item::select('id','item_name','serial_no','quantity')->where('id',$id)->first();
        return $toReturn;
    }
}
