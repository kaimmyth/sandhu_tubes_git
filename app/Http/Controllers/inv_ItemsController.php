<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inv_item;
use Auth;
use Session;
use DB;
class inv_ItemsController extends Controller
{
    public function index()
    {
        $inv_itemdata = inv_item::get();
        foreach ($inv_itemdata as $key => $value) {
            $value->item_category_id = DB::table('category')->where('id',$value->item_category_id)->value('category_name');
            $value->uom_id = DB::table('uom')->where('id',$value->uom_id)->value('uom_name');
        }
        $data['content'] = 'inventory.inv_item';
        return view('layouts.content', compact('data'))->with(['inv_itemdata' => $inv_itemdata]);
    }
    public function addView()
    {
        $categorytData = DB::table('category')->where('is_active',1)->select('id','category_name')->get();
        $uomData = DB::table('uom')->where('status',1)->select('id','uom_name')->get();
        $data['content'] = 'inventory.add_inv_item';
        return view('layouts.content', compact('data'))->with(['categorytData' => $categorytData,'uomData' => $uomData]);
    }
    public function addStore(Request $request)
    {
        // return $request;
        $inv_itemData = new inv_item();
        $inv_itemData->item_category_id = $request->item_category;
        $inv_itemData->uom_id = $request->uom;
        $inv_itemData->inv_location_id = 1;
        $inv_itemData->item_name = $request->item_name;
        $inv_itemData->item_code = $request->item_code;
        $inv_itemData->quantity = $request->quantity;
        $inv_itemData->seralized = $request->seralized;
        if($request->serial_no)
        $inv_itemData->serial_no = $request->serial_no;
        $inv_itemData->leasable = $request->leasable;
        $inv_itemData->created_by = Auth::user()->id;
        $inv_itemData->created_date = date('Y-m-d');
        $inv_itemData->save();
        Session::flash('success', 'Create Success');
        return redirect('inv_item/listing');
    }
    public function showView($id)
    {
        $inv_itemdata = inv_item::where('id',$id)->first();
        $inv_itemdata->item_category_id = DB::table('category')->where('id',$inv_itemdata->item_category_id)->value('category_name');
        $inv_itemdata->uom_id = DB::table('uom')->where('id',$inv_itemdata->uom_id)->value('uom_name');
        $data['content'] = 'inventory.view_inv_item';
        return view('layouts.content', compact('data'))->with(['inv_itemdata' => $inv_itemdata]);
    }
    public function editView($id)
    {
        $inv_itemdata = inv_item::where('id',$id)->first();
        $categorytData = DB::table('category')->where('is_active',1)->select('id','category_name')->get();
        $uomData = DB::table('uom')->where('status',1)->select('id','uom_name')->get();
        $data['content'] = 'inventory.edit_inv_item';
        return view('layouts.content', compact('data'))->with(['inv_itemdata' => $inv_itemdata,'categorytData' => $categorytData,'uomData' => $uomData]);
    }
    public function editStore(Request $request)
    {
        // return $request;
        $Edit_inv_itemData = inv_item::find($request->item_id);
        $Edit_inv_itemData->item_category_id = $request->item_category;
        $Edit_inv_itemData->uom_id = $request->uom;
        // $Edit_inv_itemData->inv_location_id = 1;
        $Edit_inv_itemData->item_name = $request->item_name;
        $Edit_inv_itemData->item_code = $request->item_code;
        $Edit_inv_itemData->quantity = $request->quantity;
        $Edit_inv_itemData->seralized = $request->seralized;
        
        if($request->seralized == 0)
        $Edit_inv_itemData->serial_no = null;
        else
        $Edit_inv_itemData->serial_no = $request->serial_no;

        $Edit_inv_itemData->leasable = $request->leasable;
        $Edit_inv_itemData->modified_by = Auth::user()->id;
        $Edit_inv_itemData->modified_date = date('Y-m-d');
        $Edit_inv_itemData->save();
        Session::flash('success', 'Update Success');
        return redirect('inv_item/listing');
    }
    public function deletedata($id)
    {
        if ($id) {
            $inv_item = inv_item::where('id',$id)->delete();
        }
        Session::flash('danger', 'Itam Delete Success');
        return redirect('inv_item/listing');
    }
}
