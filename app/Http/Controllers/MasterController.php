<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\InventoryLocation;
use DB;
use Response;
use App\conversion;
use App\Org_Relation;
use App\Org_Contact;
use App\Org_Designation;
use App\module;
use App\user_permission;
use App\User;





class MasterController extends Controller
{

/* Category */
	public function Category_Listing()
	{
		$userData = DB::table('users')->get();
		$categorytData = DB::table('category')
		->get();
		$data['content'] = 'master.category';
		return view('layouts.content', compact('data'))->with(['categorytData' => $categorytData, 'userData' => $userData]);
	}

	public function Add_Category(Request $request)
	{        
		$data = array(
			'category_name' => $request->category_name,
			'description' => $request->description,
			// 'pos_id' => $request->pos_id,
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
			// 'uom_type' => $request->uom_type,
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
		->get();
		$data['content'] = 'master.department';
		return view('layouts.content', compact('data'))->with(['departmentData' => $departmentData, 'userData' => $userData]);
	}

	public function Add_Department(Request $request)
	{        
		$data = array(
			'department_name' => $request->department_name,
			'description' => $request->description,
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
    ///...................................................Start Master For conversions............................................  
    public function Convertion_index()
    {
        $result_convertion = conversion::orderBy('id', 'DESC')->get()->toArray();

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
            $updatedata = DB::table('conversion')->where('id', $request->ids)->update($data);
            return back();
        } else {
            Session::flash('success', 'Inserted Successfully..!');
            $insertdata = DB::table('conversion')->insert($data);
            return back();
        }
    }

    public function Convertion_Edit(Request $request, $id)
    {
        $data =  DB::table('conversion')->where('id', $id)->first();
        if ($data) {
            return Response::json($data);
        }
    }


    public function Convertion_destroy(Request $request, $id)
    {
        Session::flash('error', 'Deleted Successfully..!');
        $delete = DB::table('conversion')->where('id', '=', $id)->delete();
        return back();
    }
    ///........................................................End Master For conversions...............................................  




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
    public function userindex(Request $request)
    {
        $userData = DB::table('users')->get();

        $data['content'] = 'master.user';
        return view('layouts.content', compact('data'))->with(['userData' => $userData]);
    }

    public function add_users(Request $request)
	{      
		$data = array(
			'users_role' => '2',
			'name' => $request->name,
			'email' => $request->email,
			'username' => $request->user_name,
			'phone' => $request->phone,
			'password' => bcrypt($request->password),
			'status' => $request->status,
			'created_at' => date('Y-m-d H:i:s'),
		);

		$add_user=new User();
		$add_user->users_role=2;
		$add_user->name=$request->name;
		$add_user->email=$request->email;
		$add_user->username=$request->user_name;
		$add_user->designation=$request->designation;
		$add_user->phone=$request->phone;
		$add_user->password=bcrypt($request->password);
		$add_user->status=1;
		$add_user->created_at=date('Y-m-d H:i:s');
		$add_user->save();
		// return $add_user;
		$module = $request->module;
			if($add_user!="")
			{
			if($module!="")
			{
				foreach ($module as $key => $value) {
					$permission = new user_permission();
					$permission->user_id = $add_user->id;
					$permission->employer_id = Session::get('gorgID');
					$permission->company_id = Session::get('gorgID');
					$permission->permission_value = $value;
					$permission->is_read = (!empty($request->input('read' . $value))) ? "yes" : "no";
					$permission->is_add = (!empty($request->input('add' . $value))) ? "yes" : "no";
					$permission->is_edit = (!empty($request->input('edit' . $value))) ? "yes" : "no";
					$permission->is_delete = (!empty($request->input('delete' . $value))) ? "yes" : "no";
					$permission->save();
				}
				// return $Adduser;
				
			}
			else
			{
				Session::flash('danger', 'Please Select Module');
				return redirect('users');
			}
		}
		else
		{
			Session::flash('danger', 'User No Created!');
			return redirect('users');
		}
		Session::flash('success', 'Inserted Successfully..!');
		return redirect('users');
    }

    public function add_users_form()
	{
		$module=module::get();
		// return $module;
		$data['content'] = 'master.add_user';
		return view('layouts.content', compact('data'))->with('module',$module);

    }

    public function users_edit(Request $request,$id)
	{
		$toReturn['module']=module::get()->toArray();
		$toReturn['data']=  DB::table('users')->where('id', $id)->first();
		$toReturn['permission_record']=user_permission::where('user_id',$id)->get()->toArray();
		// $decrypt= Crypt::decrypt($toReturn['data']->password);  
		// print_r($decrypt);
		// exit;
		$data['content'] = 'master.edit_user';
		return view('layouts.content', compact('data'))->with('toReturn',$toReturn);
    }
    
    public function update_user(Request $request)
	{
		// return $request->module_permission_id[1];
		// return $permission;
		$add_user= User::find($request->user_id);
		$add_user->users_role=2;
		$add_user->name=$request->name;
		$add_user->email=$request->email;
		$add_user->username=$request->user_name;
		$add_user->designation=$request->designation;
		$add_user->phone=$request->phone;
		$add_user->password=bcrypt($request->password);
		$add_user->status=$request->status;
		$add_user->created_at=date('Y-m-d H:i:s');
		$add_user->save();
		// return $add_user;
		$module = $request->module;
			// if($add_user!="")
			// {
			if($module!="")
			{
				foreach ($module as $key => $value) {
					$permission_update = user_permission::find($request->module_permission_id[$key]);
					$permission_update->user_id = $add_user->id;
					$permission_update->employer_id = Session::get('gorgID');
					$permission_update->company_id = Session::get('gorgID');
					$permission_update->permission_value = $value;
					$permission_update->is_read = (!empty($request->input('read'.$value))) ? "yes" : "no"; 
					$permission_update->is_add = (!empty($request->input('add'.$value))) ? "yes" : "no"; 
					$permission_update->is_edit = (!empty($request->input('edit'.$value))) ? "yes" : "no";
					$permission_update->is_delete = (!empty($request->input('delete'.$value))) ? "yes" : "no";
					$permission_update->save();
					// echo $permission_update;
				}
				// return $permission_update;
				
			}
			else
			{
				Session::flash('danger', 'Please Select Module');
				return redirect('users');
			}
		// }
		Session::flash('success', 'Update Successfully..!');
		return redirect('users');
    }
    
    public function delete_users (Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('users')->where('id', '=', $id)->delete();
		return back();
	}
}
