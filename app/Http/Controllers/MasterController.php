<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\InventoryLocation;
use DB;
use Response;
use App\Convertion;
use App\Org_Relation;
use App\Org_Contact;





class MasterController extends Controller
{
///...................................................Start Master For Convertions............................................  

        public function Convertion_index()
        {
            $result_convertion=Convertion::orderBy('convertions_id','DESC')->get()->toArray();
            
            $data['content'] = 'master.convertion';
            return view('layouts.content', compact('data'))->with('result_convertion',$result_convertion);
        }
        
        public function Convertion_Add(Request $request)
        {
            // return $request;
            $data = array(
                'from_si_unit' => $request->from_si_unit ,
                'to_si_unit' =>  $request->to_si_unit,
                'multiplication_value' => $request->multiplication_value,
                'status' => $request->status,
            );

            if($request->ids != ''){
                Session::flash('success', 'Updated Successfully..!');
                $updatedata = DB::table('convertions')->where('convertions_id', $request->ids)->update($data);
                return back();
            }else{
                Session::flash('success', 'Inserted Successfully..!');
                $insertdata= DB::table('convertions')->insert($data);
                return back();
            }
        }

        public function Convertion_Edit(Request $request,$id)
        {
            $data =  DB::table('convertions')->where('convertions_id', $id)->first();
            if($data) {
                return Response::json($data);
            }
        }


        public function Convertion_destroy(Request $request,$id)
        {
            Session::flash('error', 'Deleted Successfully..!');
            $delete = DB::table('convertions')->where('convertions_id', '=', $id)->delete();
            return back();
        }

///........................................................End Master For Convertions...............................................  




///.....................................................Start Master For Org Relationships..............................  

        public function Org_Relation_index()
        {
            $result_relation=Org_Relation::orderBy('org_relation_id','DESC')->get()->toArray();
            
            $data['content'] = 'master.org_relation';
            return view('layouts.content', compact('data'))->with('result_relation',$result_relation);
        }

        public function Org_Relation_add(Request $request)
        {
            // return $request;
            $data = array(
                'relation_name' => $request->relation_name ,
                'status' => $request->status,
            );

            if($request->ids != ''){
                Session::flash('success', 'Updated Successfully..!');
                $updatedata = DB::table('org_relation')->where('org_relation_id', $request->ids)->update($data);
                return back();
            }else{
                Session::flash('success', 'Inserted Successfully..!');
                $insertdata= DB::table('org_relation')->insert($data);
                return back();
            }
        }

        public function Org_Relation_edit(Request $request,$id)
        {
            // return $id;
            $data =  DB::table('org_relation')->where('org_relation_id', $id)->first();
            if($data) {
                return Response::json($data);
            }
        }


        public function Org_Relation_destroy(Request $request,$id)
        {
            Session::flash('error', 'Deleted Successfully..!');
            $delete = DB::table('org_relation')->where('org_relation_id', '=', $id)->delete();
            return back();
        }

///..............................................................End Master For Org Relationships..............................  




///.....................................................Start Master For Org Contact............................................  

        public function Contact_type_index()
        {
            $result_contact_type=Org_Contact::orderBy('org_contact_type_id','DESC')->get()->toArray();
            
            $data['content'] = 'master.org_contact';
            return view('layouts.content', compact('data'))->with('result_contact_type',$result_contact_type);
        }

        public function Contact_type_add(Request $request)
        {
            // return $request;
            $data = array(
                'org_contact_type_name' => $request->org_contact_type_name,
                'status' => $request->status,
            );

            if($request->ids != ''){
                Session::flash('success', 'Updated Successfully..!');
                $updatedata = DB::table('org_contact_type')->where('org_contact_type_id', $request->ids)->update($data);
                return back();
            }else{
                Session::flash('success', 'Inserted Successfully..!');
                $insertdata= DB::table('org_contact_type')->insert($data);
                return back();
            }
        }

        public function Contact_type_edit(Request $request,$id)
        {
            // return $id;
            $data =  DB::table('org_contact_type')->where('org_contact_type_id', $id)->first();
            if($data) {
                return Response::json($data);
            }
        }


        public function Contact_type_destroy(Request $request,$id)
        {
            Session::flash('error', 'Deleted Successfully..!');
            $delete = DB::table('org_contact_type')->where('org_contact_type_id', '=', $id)->delete();
            return back();
        }

    ///..............................................................End Master For Org Contact.......................................  





























































}
