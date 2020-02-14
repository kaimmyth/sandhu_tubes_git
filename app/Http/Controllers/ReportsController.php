<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\inv_item;

class ReportsController extends Controller
{
    public function show_report()
    {
        // return "test";
        $categorytData = DB::table('category')
		->get();
        $data['content'] = 'reports.report';
        return view('layouts.content', compact('data'));
     
    }
    public function get_cat_details($id="")
    {
        $categorytData = DB::table('category')->where('process',$id)
		->get();
        return $categorytData;
    }
    public function genrate_report(Request $request){
        $process_id=$request->process;
        $category=$request->category;
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        $inv_item = inv_item::where('item_category_id',$category)->get();
        $data['content'] = 'reports.report';
        return view('layouts.content', compact('data'))->with('inv_item',$inv_item);
    // return $inv_item;

    }
}
