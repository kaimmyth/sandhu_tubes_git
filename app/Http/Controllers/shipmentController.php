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
    public function addView()
    {
        $data['content'] = 'shipment.add_shipment';
        return view('layouts.content', compact('data'));
    }
    public function addStore(Request $request)
    {
        // return $request;
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
        $shipmentData->items_received_ids = json_encode($request->item_ids);
        $shipmentData->status = $request->status;
        $shipmentData->created_by = Auth::user()->id;
        $shipmentData->created_date = date('Y-m-d');
        $shipmentData->save();
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
        
        // $inv_itemdata->item_category_id = DB::table('category')->where('id',$inv_itemdata->item_category_id)->value('category_name');
        // $inv_itemdata->uom_id = DB::table('uom')->where('id',$inv_itemdata->uom_id)->value('uom_name');
        $data['content'] = 'shipment.view_shipment';
        return view('layouts.content', compact('data'))->with(['shipmentdata' => $shipmentdata]);
    }
    public function editView($id)
    {
        $shipmentdata = shipment::where('id',$id)->first();
        $ids = [];
        $ids = json_decode($shipmentdata->items_received_ids);
        $inv_itemdata = inv_item::whereIn('id',$ids)->select('id','item_name')->get();
        $inv_item = inv_item::select('id','item_name')->orderBy('id')->get();
        // return $inv_itemdata;
        $data['content'] = 'shipment.edit_shipment';
        return view('layouts.content', compact('data'))->with(['inv_itemdata' => $inv_itemdata,'shipmentdata' => $shipmentdata,'inv_item' => $inv_item]);
    }
    public function editStore(Request $request)
    {
        // return $request;
        $edit_shipmentData = shipment::find($request->shipment_id);
        $edit_shipmentData->supplier_name = $request->supplier_name;
        $edit_shipmentData->shipment_type = $request->shipment_type;
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
        $edit_shipmentData->items_received_ids = json_encode($request->item_ids);
        $edit_shipmentData->status = $request->status;
        $edit_shipmentData->modified_by = Auth::user()->id;
        $edit_shipmentData->modified_date = date('Y-m-d');
        $edit_shipmentData->save();
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
        $inv_item = inv_item::select('id','item_name')->orderBy('id')->get();
        return $inv_item;
    }
}
