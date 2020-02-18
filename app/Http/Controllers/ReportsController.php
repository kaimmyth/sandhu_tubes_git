<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\inv_item;
use App\history_inv_item;
use App\shipment;
use App\manufacturing_details;

class ReportsController extends Controller
{
    public function show_report()
    {
        // return "test";
        $categorytData = DB::table('category')->get();
        $data['content'] = 'reports.report';
        return view('layouts.content', compact('data'));
    }
    public function get_cat_details($id="")
    {
        $categorytData = DB::table('category')->where('process',$id)->where('is_active',1)->select('id','category_name')->get();
        return $categorytData;
    }
    public function genrate_report(Request $request){
        $process_id = $request->procreportsreportsess;
        $category = $request->category;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $inv_item = inv_item::where('item_category_id',$category)->whereBetween('created_date', [date('Y-m-d',strtotime($start_date)), date('Y-m-d',strtotime($end_date))])->orderBy('id')->get();
       
        $openingStock = 0;
        $ClosingStock = 0;
        foreach ($inv_item as $key => $value) {
            $history_inv_item = history_inv_item::where('inv_item_id',$value->id)->get();
            foreach ($history_inv_item as $kee => $value1) {
                $openingStock = $value1->opening_quantity;
                $ClosingStock = $value1->closing_quantity;
            }
            $value->openingStock =$openingStock;
            $value->ClosingStock =$ClosingStock;
        }
        // echo "<pre>";
        // print_r($inv_item);
        // exit;
        $item_ids_array = array();
        $item_type_ids_array = array();
        foreach ($inv_item as $key => $value) {
           array_push($item_ids_array, $value->id);
           array_push($item_type_ids_array, $value->item_category_id);
        }
        
        $shipmentIndata = shipment::where('status',1)
                                ->where('shipment_type',1)
                                ->whereBetween('shipping_date', [$start_date, $end_date])->get();
        $shipmentOutdata = shipment::where('status',1)
                                ->where('shipment_type',0)
                                ->whereBetween('shipping_date', [$start_date, $end_date])->get();
        $totalItem = 0;
        $totalOutItem = 0;
        $manufaCount = 0;
        $itemsdatajson = [];
        $manufacture_items = [];
        $manufacture_items_final = [];
        $itemsdetails = [];
        $itemsdataOutjson = [];
        $itemsdetailsOut = [];
        if ($inv_item) {
            foreach ($inv_item as $key => $value) {
                $manufacture_items = manufacturing_details::where('input_items_id',$value->id)->get();
                foreach ($manufacture_items as $key_menu => $value_menu) {
                    // $manufaCount++;
                    $item_name_new_id = inv_item::where('id',$value_menu->input_items_id)->value('item_name');
                    $value_menu->input_items_id =  DB::table('item')->where('id',$item_name_new_id)->value('items_name');
                    $value_menu->input_items_uom = DB::table('uom')->where('id',$value_menu->input_items_uom)->value('uom_name');
        
                    $item_name_finished_id = inv_item::where('id',$value_menu->finished_goods_name)->value('item_name');
                    $value_menu->finished_goods_name =  DB::table('item')->where('id',$item_name_finished_id)->value('items_name');
                    $value_menu->finished_goods_uom = DB::table('uom')->where('id',$value_menu->finished_goods_uom)->value('uom_name');
                    
                    $item_name_scrap_id = inv_item::where('id',$value_menu->metal_scrap_name)->value('item_name');
                    $value_menu->metal_scrap_name =  DB::table('item')->where('id',$item_name_scrap_id)->value('items_name');
                    $value_menu->metal_scrap_uom = DB::table('uom')->where('id',$value_menu->metal_scrap_uom)->value('uom_name');
                    
                    $item_name_loss_id = inv_item::where('id',$value_menu->invisible_loss_name)->value('item_name');
                    $value_menu->invisible_loss_name =  DB::table('item')->where('id',$item_name_loss_id)->value('items_name');
                    $value_menu->invisible_loss_uom = DB::table('uom')->where('id',$value_menu->invisible_loss_uom)->value('uom_name');
                    $value_menu->items_type =  DB::table('category')->where('id',$value->item_category_id)->value('category_name');
                    $value_menu->total_quantity =  $value->quantity;
                    if ($key_menu == 0) {
                        $value_menu->rest_quantity =  $value->quantity - $value_menu->input_items_quantity;
                        $manufaCount = $value_menu->rest_quantity;
                    } else {
                        $value_menu->rest_quantity =  $manufaCount - $value_menu->input_items_quantity;
                        $manufaCount = $manufaCount - $value_menu->input_items_quantity;
                    }
                    $value_menu->main_uom = DB::table('uom')->where('id',$value->uom_id)->value('uom_name');
                }
                array_push($manufacture_items_final,$manufacture_items);
            }
        }
        foreach ($shipmentIndata as $key => $value) {
            $itemsdatajson = json_decode($value->shiped_item);
            if($itemsdatajson != "")
            {
                foreach ($itemsdatajson as $kee => $value_item) {
                    if(in_array($value_item->item_id, $item_ids_array) && in_array($value_item->item_type_id, $item_type_ids_array))
                    {
                        $totalItem ++;
                        $main_item_id = $value_item->item_id;
                        $main_item_type_id = $value_item->item_type_id;
                        $item_name_id = inv_item::where('id',$value_item->item_id)->value('item_name');
                        $value_item->item_id = DB::table('item')->where('id',$item_name_id)->value('items_name');
                        $value_item->item_type_id = DB::table('category')->where('id',$value_item->item_type_id)->value('category_name');
                        $value_item->item_uom_id = DB::table('uom')->where('id',$value_item->item_uom_id)->value('uom_name');
                        $value_item->item_location_id = DB::table('inventory_location')->where('id',$value_item->item_location_id)->value('location_name');
                        // $manufacture_items = manufacturing_details::where('input_items_id',$main_item_id)->get();
                        // foreach ($manufacture_items as $key_menu => $value_menu) {
                        //     $item_name_new_id = inv_item::where('id',$value_menu->input_items_id)->value('item_name');
                        //     $value_menu->input_items_id =  DB::table('item')->where('id',$item_name_new_id)->value('items_name');
                        //     $value_menu->input_items_uom = DB::table('uom')->where('id',$value_menu->input_items_uom)->value('uom_name');

                        //     $item_name_finished_id = inv_item::where('id',$value_menu->finished_goods_name)->value('item_name');
                        //     $value_menu->finished_goods_name =  DB::table('item')->where('id',$item_name_finished_id)->value('items_name');
                        //     $value_menu->finished_goods_uom = DB::table('uom')->where('id',$value_menu->finished_goods_uom)->value('uom_name');

                        //     $item_name_scrap_id = inv_item::where('id',$value_menu->metal_scrap_name)->value('item_name');
                        //     $value_menu->metal_scrap_name =  DB::table('item')->where('id',$item_name_scrap_id)->value('items_name');
                        //     $value_menu->metal_scrap_uom = DB::table('uom')->where('id',$value_menu->metal_scrap_uom)->value('uom_name');
                            
                        //     $item_name_loss_id = inv_item::where('id',$value_menu->invisible_loss_name)->value('item_name');
                        //     $value_menu->invisible_loss_name =  DB::table('item')->where('id',$item_name_loss_id)->value('items_name');
                        //     $value_menu->invisible_loss_uom = DB::table('uom')->where('id',$value_menu->invisible_loss_uom)->value('uom_name');
                        //     $value_menu->items_type =  DB::table('category')->where('id',$main_item_type_id)->value('category_name');
                        // }
                        // array_push($manufacture_items_final,$manufacture_items);
                    }
                    else
                    {
                        unset($itemsdatajson[$kee]);
                    }
                }
                array_push($itemsdetails,$itemsdatajson);
            }
        }
        foreach ($shipmentOutdata as $key => $value) {
            $itemsdataOutjson = json_decode($value->shiped_item);
            if($itemsdataOutjson != "")
            {
                foreach ($itemsdataOutjson as $kee => $value_item) {
                    if(in_array($value_item->item_id, $item_ids_array) && in_array($value_item->item_type_id, $item_type_ids_array))
                    {
                        $totalOutItem ++;
                        $item_name_id = inv_item::where('id',$value_item->item_id)->value('item_name');
                        $value_item->item_id = DB::table('item')->where('id',$item_name_id)->value('items_name');
                        $value_item->item_type_id = DB::table('category')->where('id',$value_item->item_type_id)->value('category_name');
                        $value_item->item_uom_id = DB::table('uom')->where('id',$value_item->item_uom_id)->value('uom_name');
                        $value_item->item_location_id = DB::table('inventory_location')->where('id',$value_item->item_location_id)->value('location_name');
                        
                    }
                    else
                    {
                        unset($itemsdataOutjson[$kee]);
                    }
                }
                array_push($itemsdetailsOut,$itemsdataOutjson);
            }
        }
        $item_type_data = DB::table('category')->where('is_active',1)->where('process',$process_id)->select('id','category_name')->get();
        // echo "<pre>"; 
        // print_r($item_type_data);
        // exit;
        $data['content'] = 'reports.report';
        return view('layouts.content', compact('data'))->with(['inv_item'=>$inv_item,'itemsdetails'=>$itemsdetails,'totalItem'=>$totalItem,
        'itemsdetailsOut'=>$itemsdetailsOut,'totalOutItem'=>$totalOutItem,'manufacture_items_final'=>$manufacture_items_final
        ,'start_date'=>$start_date,'end_date'=>$end_date,'process_id'=>$process_id,'category'=>$category,'item_type_data'=>$item_type_data]);
        
    }
}
