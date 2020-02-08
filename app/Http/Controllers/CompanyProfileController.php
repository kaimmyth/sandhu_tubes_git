<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustCompany;
use App\company_services;
use App\company_product;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
class CompanyProfileController extends Controller
{
    public function viewsite($id="")
    {
        // return $id;
        $customer_details = CustCompany::where('id',$id)->first();
        // return $customer_details;
        if(empty($customer_details))
        {
            return redirect('/');
        }
        $product=company_product::where('comp_id',$id)->get();
        $services=company_services::where('comp_id',$id)->get();
        return view('static-pages.company-profile')->with('customer_details',$customer_details)->with('services',$services)->with('product',$product);
    }
    public function viewportal($company_name="")
    {
    //    echo current_url();
        // echo url()->current();
        $enter_url=url()->current();
        $customer_details = CustCompany::where('company_portal_url',$enter_url)->first();
        // return $customer_details;
        // $customer_details = CustCompany::where('company',$company_name)->first();
        // return $customer_details;
        if(empty($customer_details))
        {
            return redirect('/');
        }
        $product=company_product::where('comp_id',$customer_details->id)->get();
        $services=company_services::where('comp_id',$customer_details->id)->get();
        return view('static-pages.company-profile')->with('customer_details',$customer_details)->with('services',$services)->with('product',$product);
    }
    public function web_create_form($id)
    {
        // return $id;
        $customer_details = CustCompany::where('id',$id)->first();
        $company_services=company_services::where('comp_id',$id)->get();
        $company_product=company_product::where('comp_id',$id)->get();
        $data['content'] = 'customer.create_company_website';
        return view('layouts.content', compact('data'))->with('customer_details',$customer_details)->with('company_product',$company_product)->with('company_services',$company_services);
    }
    public function add_comapany_details_website(Request $request)
    {
      $company_services_details=company_services::where('comp_id',$request->comp_id)->get();
      $company_product__details=company_product::where('comp_id',$request->comp_id)->get();
      $tmp_array_product = [];
      $delete_check_array_product = [];
      $tmp_array_service = [];
      $delete_check_array_service = [];
      foreach ($company_product__details as $tmp_prodcut) {
        array_push($tmp_array_product, $tmp_prodcut->id);
      }      
      foreach ($company_services_details as $tmp_service) {
        array_push($tmp_array_service, $tmp_service->id);
      }      
      // Update Company Description
      if($request->company_description)
      {
      $customer_company=CustCompany::where('id',$request->comp_id)->update(array('company_description'=>$request->company_description,'company_portal_url'=>$request->company_portal_url));
      }
   
        // Update company Section
        if($request->service_id!=null)
        {
            // echo "in";
            // exit;
            foreach ($request->service_id as $key_service => $value_service) {
                if($request->service_id[$key_service]!="")
                {
                    $delete_check_array_service[]=$value_service;
                $add_company_services=company_services::find($request->service_id[$key_service]);
                $add_company_services->services_name= $request->service_name[$key_service];
                $add_company_services->services_heading= $request->services_heading[$key_service];
                $add_company_services->services_description= $request->services_description[$key_service];
                $add_company_services->comp_id= $request->comp_id;
                $add_company_services->status=1;
                $add_company_services->created_by=Session::get('gorgID');
                $add_company_services->save();
                }
                else
                {
                    $add_company_services=new company_services();
                    $add_company_services->services_name= $request->service_name[$key_service];
                    $add_company_services->services_heading= $request->services_heading[$key_service];
                    $add_company_services->services_description= $request->services_description[$key_service];
                    $add_company_services->comp_id= $request->comp_id;
                    $add_company_services->status=1;
                    $add_company_services->created_by=Session::get('gorgID');
                    $add_company_services->save();
                }
                }
        }
        else{
            //Insert new company Service 
            if($request->service_name!="")
            {
            foreach ($request->service_name as $key_service => $value_service) {
                    $add_company_services=new company_services();
                $add_company_services->services_name= $request->service_name[$key_service];
                $add_company_services->services_heading= $request->services_heading[$key_service];
                $add_company_services->services_description= $request->services_description[$key_service];
                $add_company_services->comp_id= $request->comp_id;
                $add_company_services->status=1;
                $add_company_services->created_by=Session::get('gorgID');
                $add_company_services->save();
                }
            }
        }
        // echo "wait";
        // exit;
        //Update Company product
        if($request->product_id)
        {
            foreach ($request->product_id as $key_product => $value_prodcut) {
                if($request->product_id[$key_product]!="")
                {
                    $delete_check_array_product[]=$value_prodcut;
                    if(@$request->product_image[$key_product]!="")
                    {
                        $product_image_name=$request->product_image[$key_product]->getClientOriginalName();
                        request()->product_image[$key_product]->move(public_path('company_doc'), $product_image_name);
                        // $product_image_name=$request->product_image_pre[$key_product];
                                            // echo $product_image_name;
                        // exit;
                    }
                    else
                    {
                    // echo $product_image_name;
                    // exit;
                    $product_image_name=$request->product_image_pre[$key_product];

                    }
                    $add_company_product=company_product::find($request->product_id[$key_product]);
                    $add_company_product->product_name= $request->product_name[$key_product];
                    $add_company_product->product_image= $product_image_name;
                    $add_company_product->product_heading= $request->product_heading[$key_product];
                    $add_company_product->product_description=$request->product_description[$key_product];
                    $add_company_product->comp_id= $request->comp_id;
                    $add_company_product->status=1;
                    $add_company_product->created_by=Session::get('gorgID');
                    $add_company_product->update();
                }
                else
                {
                    $product_image_name=$request->product_image[$key_product]->getClientOriginalName();
                    request()->product_image[$key_product]->move(public_path('company_doc'), $product_image_name);
                    $add_company_product=new company_product();
                    $add_company_product->product_name= $request->product_name[$key_product];
                    $add_company_product->product_image= $product_image_name;
                    $add_company_product->product_heading= $request->product_heading[$key_product];
                    $add_company_product->product_description=$request->product_description[$key_product];
                    $add_company_product->comp_id= $request->comp_id;
                    $add_company_product->status=1;
                    $add_company_product->created_by=Session::get('gorgID');
                    $add_company_product->save();
                }

            }
        }
        else
        { 
            // Insert New Company product
            if($request->product_name!="")
            {
            foreach ($request->product_name as $key_product => $value_prodcut) {
                $product_image_name=$request->product_image[$key_product]->getClientOriginalName();
                request()->product_image[$key_product]->move(public_path('company_doc'), $product_image_name);
                $add_company_product=new company_product();
                $add_company_product->product_name= $request->product_name[$key_product];
                $add_company_product->product_image= $product_image_name;
                $add_company_product->product_heading= $request->product_heading[$key_product];
                $add_company_product->product_description=$request->product_description[$key_product];
                $add_company_product->comp_id= $request->comp_id;
                $add_company_product->status=1;
                $add_company_product->created_by=Session::get('gorgID');
                $add_company_product->save();
                }
            }
        }
        $diff_result_prodcut = array_diff($tmp_array_product, $delete_check_array_product);
      $diff_result_service = array_diff($tmp_array_service, $delete_check_array_service);

      foreach ($diff_result_prodcut as $key => $value_product_delete) {
        $company_product_delete = company_product::where('id', $value_product_delete)->delete();
      }
      foreach ($diff_result_service as $key => $value_service_delete) {
        $company_service_delete = company_services::where('id', $value_service_delete)->delete();
      }
        return redirect('land/customer');
        // $add_company_prodcut=new company_product();
        // $add_company_prodcut->product_name=$request->product_name;
        // $add_company_prodcut->product_heading=$request->product_heading;
        // $add_company_prodcut->product_description=$request->product_description;
        // $add_company_prodcut->=$request->
        // $add_company_prodcut->=$request->
        // $add_company_prodcut->=$request->

    }
}
