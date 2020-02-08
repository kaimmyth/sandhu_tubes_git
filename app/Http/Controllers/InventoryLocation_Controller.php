<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\InventoryLocation;
use DB;
use Response;









class InventoryLocation_Controller extends Controller
{
   //view to page
    public function index()
    {
        # code...
        $inventory_location=InventoryLocation::orderBy('id','DESC')->get()->toArray();

        $data['content'] = 'Inventory.inventory-location';
        return view('layouts.content', compact('data'))->with('inventory_location',$inventory_location);
    }



    public function inventory_Add(Request $request)
    {

        // return $request;
        $data = array(
            'location_id' => $request->location_id ,
            'location_name' =>  $request->location_name,
            'location_description' => $request->location_description,
            'status' => $request->status,
        );

        if($request->ids != ''){
            Session::flash('success', 'Updated Successfully..!');
            $updatedata = DB::table('inventory_location')->where('id', $request->ids)->update($data);
            return back();
        }else{
            Session::flash('success', 'Inserted Successfully..!');
            $insertdata= DB::table('inventory_location')->insert($data);
            return back();
        }
    }

    public function inventory_Edit(Request $request,$id)
    {
        // return $id;
        $data =  DB::table('inventory_location')->where('id', $id)->first();
        if($data) {
            return Response::json($data);
        }
    }


    public function inventory_destroy(Request $request,$id)
    {
        Session::flash('error', 'Deleted Successfully..!');
        $delete = DB::table('inventory_location')->where('id', '=', $id)->delete();
        return back();
    }











}
