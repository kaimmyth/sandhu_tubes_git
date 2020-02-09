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
use App\Org_Designation;





class MasterController extends Controller
{
/* Category */
	public function Category_Listing()
	{
		$userData = DB::table('users')->get();
		$categorytData = DB::table('category')
		->join('users', 'users.id', '=', 'category.pos_id')
		->select('users.name', 'category.*')
		->get();
		$data['content'] = 'master.category';
		return view('layouts.content', compact('data'))->with(['categorytData' => $categorytData, 'userData' => $userData]);
	}

	public function Add_Category(Request $request)
	{        
		$data = array(
			'category_name' => $request->category_name,
			'description' => $request->description,
			'pos_id' => $request->pos_id,
			'is_active' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatedepartment = DB::table('category')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Adddepartment = DB::table('category')->insert($data);
			return back();
		}
	}

	public function Category_Edit(Request $request,$id)
	{
		$data =  DB::table('category')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Category (Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('category')->where('id', '=', $id)->delete();
		return back();
	}
	/* uom master*/
	public function Uom_Listing(Request $request)
	{
		$uomData = DB::table('uom')->get();
	    $data['content'] = 'master.indexuom';
		return view('layouts.content', compact('data'))->with(['uomData' => $uomData]);
	}

	public function Add_Uom(Request $request)
	{        
		$data = array(
			'uom_name' => $request->uom_name,
			'uom_description' => $request->uom_description,
			'uom_type' => $request->uom_type,
			'status' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => 1,
			'updated_by' => 1,

		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatepmaterials = DB::table('uom')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addmaterials= DB::table('uom')->insert($data);
			return back();
		}
	}

	public function Uom_Edit(Request $request,$id)
	{
		$data =  DB::table('uom')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}


	public function Delete_Uom(Request $request,$id)
	{		
			Session::flash('error', 'Deleted Successfully..!');
			$delete = DB::table('uom')->where('id', '=', $id)->delete();
			return back();
				
	}


	/* Department*/
	public function Department_Listing(Request $request)
	{
		$userData = DB::table('users')->get();
		$departmentData = DB::table('departments')
		->join('users', 'users.id', '=', 'departments.pos_id')
		->select('users.name', 'departments.*')
		->get();
		$data['content'] = 'master.department';
		return view('layouts.content', compact('data'))->with(['departmentData' => $departmentData, 'userData' => $userData]);
		
	}

	public function Add_Department(Request $request)
	{        
		$data = array(
			'department_name' => $request->department_name,
			'description' => $request->description,
			'pos_id' => $request->pos_id,
			'is_active' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatedepartment = DB::table('departments')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Adddepartment = DB::table('departments')->insert($data);
			return back();
		}
	}

	public function Department_Edit(Request $request,$id)
	{
		$data =  DB::table('departments')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Department(Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('departments')->where('id', '=', $id)->delete();
		return back();
	}
    ///...................................................Start Master For Convertions............................................  
    public function Convertion_index()
    {
        $result_convertion = Convertion::orderBy('convertions_id', 'DESC')->get()->toArray();

        $data['content'] = 'master.convertion';
        return view('layouts.content', compact('data'))->with('result_convertion', $result_convertion);
    }

    public function Convertion_Add(Request $request)
    {
        // return $request;
        $data = array(
            'from_si_unit' => $request->from_si_unit,
            'to_si_unit' =>  $request->to_si_unit,
            'multiplication_value' => $request->multiplication_value,
            'status' => $request->status,
        );

        if ($request->ids != '') {
            Session::flash('success', 'Updated Successfully..!');
            $updatedata = DB::table('convertions')->where('convertions_id', $request->ids)->update($data);
            return back();
        } else {
            Session::flash('success', 'Inserted Successfully..!');
            $insertdata = DB::table('convertions')->insert($data);
            return back();
        }
    }

    public function Convertion_Edit(Request $request, $id)
    {
        $data =  DB::table('convertions')->where('convertions_id', $id)->first();
        if ($data) {
            return Response::json($data);
        }
    }


    public function Convertion_destroy(Request $request, $id)
    {
        Session::flash('error', 'Deleted Successfully..!');
        $delete = DB::table('convertions')->where('convertions_id', '=', $id)->delete();
        return back();
    }
    ///........................................................End Master For Convertions...............................................  




    ///.....................................................Start Master For Org-Relationships..............................  
    public function Org_Relation_index()
    {
        $result_relation = Org_Relation::orderBy('org_relation_id', 'DESC')->get()->toArray();

        $data['content'] = 'master.org_relation';
        return view('layouts.content', compact('data'))->with('result_relation', $result_relation);
    }

    public function Org_Relation_add(Request $request)
    {
        // return $request;
        $data = array(
            'relation_name' => $request->relation_name,
            'status' => $request->status,
        );

        if ($request->ids != '') {
            Session::flash('success', 'Updated Successfully..!');
            $updatedata = DB::table('org_relation')->where('org_relation_id', $request->ids)->update($data);
            return back();
        } else {
            Session::flash('success', 'Inserted Successfully..!');
            $insertdata = DB::table('org_relation')->insert($data);
            return back();
        }
    }

    public function Org_Relation_edit(Request $request, $id)
    {
        // return $id;
        $data =  DB::table('org_relation')->where('org_relation_id', $id)->first();
        if ($data) {
            return Response::json($data);
        }
    }


    public function Org_Relation_destroy(Request $request, $id)
    {
        Session::flash('error', 'Deleted Successfully..!');
        $delete = DB::table('org_relation')->where('org_relation_id', '=', $id)->delete();
        return back();
    }
    ///..............................................................End Master For Org-Relationships..............................  




    ///.....................................................Start Master For Org-Contact............................................  
    public function Contact_type_index()
    {
        $result_contact_type = Org_Contact::orderBy('org_contact_type_id', 'DESC')->get()->toArray();

        $data['content'] = 'master.org_contact';
        return view('layouts.content', compact('data'))->with('result_contact_type', $result_contact_type);
    }

    public function Contact_type_add(Request $request)
    {
        // return $request;
        $data = array(
            'org_contact_type_name' => $request->org_contact_type_name,
            'status' => $request->status,
        );

        if ($request->ids != '') {
            Session::flash('success', 'Updated Successfully..!');
            $updatedata = DB::table('org_contact_type')->where('org_contact_type_id', $request->ids)->update($data);
            return back();
        } else {
            Session::flash('success', 'Inserted Successfully..!');
            $insertdata = DB::table('org_contact_type')->insert($data);
            return back();
        }
    }

    public function Contact_type_edit(Request $request, $id)
    {
        // return $id;
        $data =  DB::table('org_contact_type')->where('org_contact_type_id', $id)->first();
        if ($data) {
            return Response::json($data);
        }
    }


    public function Contact_type_destroy(Request $request, $id)
    {
        Session::flash('error', 'Deleted Successfully..!');
        $delete = DB::table('org_contact_type')->where('org_contact_type_id', '=', $id)->delete();
        return back();
    }
    ///..............................................................End Master For Org-Contact.......................................


///.....................................................Start Master For Org-Designation............................................  
    public function Designation_index()
    {
        $result_contact_type = Org_Designation::orderBy('org_designation_id', 'DESC')->get()->toArray();

        $data['content'] = 'master.org_designation';
        return view('layouts.content', compact('data'))->with('result_contact_type', $result_contact_type);
    }

    public function Designation_add(Request $request)
    {
        // return $request;
        $data = array(
            'org_designation_name' => $request->org_designation_name,
            'status' => $request->status,
        );

        if ($request->ids != '') {
            Session::flash('success', 'Updated Successfully..!');
            $updatedata = DB::table('org_designation')->where('org_designation_id', $request->ids)->update($data);
            return back();
        } else {
            Session::flash('success', 'Inserted Successfully..!');
            $insertdata = DB::table('org_designation')->insert($data);
            return back();
        }
    }

    public function Designation_edit(Request $request, $id)
    {
        // return $id;
        $data =  DB::table('org_designation')->where('org_designation_id', $id)->first();
        if ($data) {
            return Response::json($data);
        }
    }


    public function Designation_destroy(Request $request, $id)
    {
        Session::flash('error', 'Deleted Successfully..!');
        $delete = DB::table('org_designation')->where('org_designation_id', '=', $id)->delete();
        return back();
    }

///..............................................................End Master For Org-Designation.......................................  


}
