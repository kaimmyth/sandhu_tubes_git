<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Org_Relation;
use App\organization;
use App\Org_Contact;
use Auth;
use Session;
use DB;
class organizationController extends Controller
{
    public function index()
    {
        $statusdata = organization::where('status',1)->get();
        if (Auth::check() && Auth::user()->users_role != 1) {
            $land_permission = Session::get('all_module_permission');
            foreach ($land_permission as $key => $value_land) {
                if ($value_land['permission_value'] == 4) {
                $module_permission = $value_land;
                }
            }
        }
        $data['content'] = 'organization.organization_list';
        return view('layouts.content', compact('data'))->with(['statusdata' => $statusdata,'module_permission' => @$module_permission]);
    }
    public function addView()
    {
        $org_relation = Org_Relation::where('status',1)->select('org_relation_id','relation_name')->get();
        $org_contact = Org_Contact::where('status',1)->select('org_contact_type_id','org_contact_type_name')->get();
        $departments = DB::table('departments')->where('is_active',1)->select('id','department_name')->get();
        $data['content'] = 'organization.add_organization';
        return view('layouts.content', compact('data'))->with(['org_relation' => $org_relation,'org_contact' => $org_contact,'departments' => $departments]);
    }
    public function addStore(Request $request)
    {
        // return $request;
        $organizationData = new organization();
        $organizationData->organization_name = $request->organization_name;
        $organizationData->city = $request->city;
        $organizationData->state = $request->state;
        $organizationData->country = 'India';
        $organizationData->cin = $request->cin;
        $organizationData->revenue = $request->revenue;
        $organizationData->relationships = $request->relationships;
        $organizationData->contact_name = $request->name;
        $organizationData->contact_phone = $request->phone;
        $organizationData->contact_email = $request->email;
        $organizationData->contact_role = $request->role;
        $organizationData->contact_department = $request->department;
        $organizationData->contact_type = $request->contact_type;
        // $organizationData->suppliers = $request->suppliers;
        $organizationData->status = 1;
        $organizationData->created_by = Auth::user()->id;
        $organizationData->ceated_at = date('Y-m-d');
        $organizationData->save();
        Session::flash('success', 'Create Success');
        return redirect('organization/listing');
    }
    public function showView($id)
    {
        $organizationdata = organization::where('id',$id)->first();
        $data['content'] = 'organization.view_organization';
        return view('layouts.content', compact('data'))->with(['organizationdata' => $organizationdata]);
    }
    public function editView($id)
    {
        $organizationtdata = organization::where('id',$id)->first();
        $org_relation = Org_Relation::where('status',1)->select('org_relation_id','relation_name')->get();
        $org_contact = Org_Contact::where('status',1)->select('org_contact_type_id','org_contact_type_name')->get();
        $departments = DB::table('departments')->where('is_active',1)->select('id','department_name')->get();
        $data['content'] = 'organization.edit_organization';
        return view('layouts.content', compact('data'))->with(['organizationtdata' => $organizationtdata,'org_relation' => $org_relation,'org_contact' => $org_contact,'departments' => $departments]);
    }
    public function editStore(Request $request)
    {
        // return $request;
        $Edit_organizationData = organization::find($request->org_id);
        $Edit_organizationData->organization_name = $request->organization_name;
        $Edit_organizationData->city = $request->city;
        $Edit_organizationData->state = $request->state;
        // $Edit_organizationData->country = 'India';
        $Edit_organizationData->cin = $request->cin;
        $Edit_organizationData->revenue = $request->revenue;
        $Edit_organizationData->relationships = $request->relationships;
        $Edit_organizationData->contact_name = $request->name;
        $Edit_organizationData->contact_phone = $request->phone;
        $Edit_organizationData->contact_email = $request->email;
        $Edit_organizationData->contact_role = $request->role;
        $Edit_organizationData->contact_department = $request->department;
        $Edit_organizationData->contact_type = $request->contact_type;
        // $Edit_organizationData->suppliers = $request->suppliers;
        // $Edit_organizationData->status = 1;
        $Edit_organizationData->updated_by = Auth::user()->id;
        $Edit_organizationData->update_at = date('Y-m-d');
        $Edit_organizationData->save();
        Session::flash('success', 'Update Success');
        return redirect('organization/listing');
    }
    public function deletedata($id)
    {
        if ($id) {
            $inv_item = organization::where('id',$id)->delete();
        }
        Session::flash('success', 'Itam Delete Success');
        return redirect('organization/listing');
    }
    // public function fetchItems()
    // {
    //     $inv_item = inv_item::select('id','item_name')->orderBy('id')->get();
    //     return $inv_item;
    // }
}
