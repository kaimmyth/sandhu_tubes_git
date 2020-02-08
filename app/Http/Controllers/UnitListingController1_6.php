<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustCompany;
use App\Industries;
use App\CompanyType;
use App\LocationZone;
use App\Material;


class UnitListingController extends Controller
{
    public function get_industries_name()
    {
        $industries = Industries::all();
        $company_types = CompanyType::all();
        $materials = Material::all();
        $customer_details = CustCompany::paginate(10);
        return view('static-pages.unit',compact('industries','company_types','materials','customer_details'));
    }

    public function filter_industry(Request $request)
    {

        if($request->company_type_ids!="")
        {
        $get_company_type_id = CompanyType::where('id',$request->company_type_ids)->first();
        }
        if($request->material_ids!="")
        {
        $waste_materials_string=implode(",",$request->material_ids);
        }
         if($request->company_type_ids!="")
        {
        $company_type_ids_string=strtolower($get_company_type_id->company_type);
        }
        // return $company_type_ids_string;
        // print_r($request->company_size[0]);
        $comp_size=explode('-',$request->company_size[0]);
        // print_r($comp_size);
        @$comp_first=$comp_size[0];
        @$comp_second=$comp_size[1];
        @$comp_turn_over=explode('-',$request->turn_over[0]);
        @$comp_turn_over_first=$comp_turn_over[0];
        @$comp_turn_over_first=$comp_turn_over_first+1;
        @$comp_turn_over_second=$comp_turn_over[1];
    //  print_r($comp_turn_over_first);
    //  print_r($comp_turn_over_second);
    //  print_r($request->turn_over);
    //  exit;
                                // $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->where('turn_over','<=',$comp_turn_over_second)->get();
                                // $toReturn['get_company_details']['details'] = CustCompany::where('number_of_employees','>=',@$comp_first)->orWhere('number_of_employees','<=',@$comp_second)->get();
    // $toReturn['get_company_details']['details'] = CustCompany::where('address', 'LIKE',"%{$request->location_zone[0]}")->get();
    // if(@$company_type_ids_string)
    //                     {
    //                         $toReturn['get_company_details']['details'] = CustCompany::where('company_type',@$company_type_ids_string)->get();
    //                     }  
    // return $toReturn['get_company_details']['details'];

          if($request->industry_ids!="")
        {
        $industry_id_string=implode(',',$request->industry_ids);
        }
        $toReturn=array();
        $toReturn['get_company_details']=array();
        $toReturn['get_company_details']['details'] = [];
         if(@$waste_materials_string || @$company_type_ids_string || @$industry_id_string ||@$comp_first || @$request->location_zone || @$comp_turn_over_first  )
            {
                $toReturn=array();
                $toReturn['get_company_details']=array();
                $toReturn['get_company_details']['details'] = [];
                $toReturn['company_details'] = CustCompany::get();
                // $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->orWhere('turn_over','<=',$comp_turn_over_second)->orWhere('address', 'LIKE',"%{$request->location_zone[0]}")->orWhere('number_of_employees','>=',@$comp_first)->orWhere('number_of_employees','<=',@$comp_second)->orWhere('company_type',@$company_type_ids_string)->orWhere('industry_id',@$industry_id_string)->get();
                        if(@$industry_id_string)
                        {
                          $toReturn['get_company_details']['details'] = CustCompany::where('industry_id',@$industry_id_string)->get();
                        }
                        if(@$waste_materials_string)
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('waste_materials_id',@$waste_materials_string)->get();
                        }
                        if(@$company_type_ids_string)
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('company_type',@$company_type_ids_string)->get();
                        }  
                        if(@$request->company_size[0])
                        {
                                $toReturn['get_company_details']['details'] = CustCompany::where('number_of_employees','>=',@$comp_first)->where('number_of_employees','<=',@$comp_second)->get();
                        }
                        if(@$request->location_zone[0])
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('address', 'LIKE',"%{$request->location_zone[0]}")->get();
                        }
                        if(@$request->turn_over[0])
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->where('turn_over','<=',$comp_turn_over_second)->get();
                        }

            }
            // $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->where('turn_over','<=',$comp_turn_over_second)->orWhere('address', 'LIKE',"%{$request->location_zone[0]}")->orWhere('number_of_employees','>=',@$comp_first)->orWhere('number_of_employees','<=',@$comp_second)->orWhere('company_type',@$company_type_ids_string)->orWhere('industry_id',@$industry_id_string)->get();

                return $toReturn['get_company_details']['details'];
            // if($get_industry_id || $get_waste_material_id || $get_company_type_id)
            // {
                // $toReturn=array();
                // $toReturn['get_company_details']=array();
                // $toReturn['company_details'] = CustCompany::get();
                //         if(count($get_industry_id)!=0)
                //         {
                //             foreach($get_industry_id as $key_industry=>$value_industry)
                //             {
                //                 // array_push($toReturn['get_company_details'], $toReturn['company_details']->where('industry_id',@$value_industry->id));
                //             $toReturn['get_company_details']['details']=$toReturn['company_details']->where('industry_id',@$value_industry->id);
                //             }
                //         }
                //         if(count($get_waste_material_id)!=0)
                //         {
                //             foreach($get_waste_material_id as $key_material=>$value_material)
                //             {
                //                 // echo $value_material->id;
                //             // array_push($toReturn['get_company_details'],$toReturn['company_details']->where('waste_materials_id',$value_material->id));
                //             $toReturn['get_company_details']['details']= $toReturn['company_details']->where('waste_materials_id',@$value_material->id);

                //             // echo $toReturn['get_company_details'];
                //             }
                //         }
                //         if(count($get_company_type_id)!=0)
                //         {
                //             foreach($get_company_type_id as $key_company=>$value_company)
                //             {
                //                 // array_push($toReturn['get_company_details'],$toReturn['company_details']->where('company_type',@$value_company->id));
                //             $toReturn['get_company_details']['details']= $toReturn['company_details']->where('company_type',@$value_company->id);
                //             }
                //         }  
                    // }
                    // else {
                    //     $toReturn['get_company_details'] =array();
                    // }
                    // echo "<pre>";
                    // print_r($toReturn['get_company_details']['details']);
                    // exit;
                    // return $toReturn;

         
            // return ['get_industry_id' => $get_industry_id,'get_company_details'=>@$get_company_details,'get_company_type_id'=>$get_company_type_id,'get_waste_material_id'=>$get_waste_material_id];
    }
}