<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Session;
use Response;
use App\Comapny;
use App\User;
use DB;
use Hash;
use Auth;

class TicketController extends Controller
{
  public function ticket_listing(Request $request)
  {
    if (Auth::check() && Auth::user()->users_role == 2) {
      $land_permission = Session::get('all_module_permission');
      foreach ($land_permission as $key => $value_land) {
        if ($value_land['permission_value'] == 8) {
          $module_permission = $value_land;
        }
      }
    }
    $user_id = Session::get('gorgID');
    $userData = DB::table('users')->get();
    $departmentData = DB::table('departments')->where('is_active', '1')->get();
    $categoryData = DB::table('category')->where('is_active', '1')->get();
    $subcategoryData = DB::table('subcategory')->where('is_active', '1')->get();
    $priorityData = DB::table('priority_levels')->where('is_active', '1')->get();
    $statusData = DB::table('ticket')->get();
    $subDeptData = DB::table('subdepartment')->where('is_active', '1')->get();
    $statusCheckDATA = DB::table('status')->where('is_active', '1')->get();
    // return $statusCheckDATA;
    // die;

    if ($request->search_id != '') {
      if ($request->priority_id != '') {
        $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where('ticket.priority', $request->priority_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby', 'priority_levels.priority_name', 'ticket.*')->get();
        // print_r($ticketData);
        // die;

      } elseif ($request->category_id != '') {
        $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where('ticket.category', $request->category_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby', 'priority_levels.priority_name', 'ticket.*')
          ->get();
      } elseif ($request->status_id != '') {
        $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where('ticket.status_id', $request->status_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby', 'priority_levels.priority_name', 'ticket.*')
          ->get();
      }
    } else {
      //$ticketData=DB::table('ticket')->where('')
      if (Auth::check() && Auth::user()->users_role == 1) {
        $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->leftjoin('users as assignto', 'assignto.id', '=', 'ticket.assigne_to')
          ->leftjoin('users as assigned_by', 'assigned_by.id', '=', 'ticket.assigned_by')
          // ->leftjoin('status', 'status.id', '=', 'ticket.status_id')
          ->select(
            'users.name as createdby',
            'ticket.*',
            'priority_levels.priority_name',
            'assignto.name as assigne_name',
            'assigned_by.name as assigned_by_name'
          )
          ->get();
      } else if (Auth::check() && Auth::user()->users_role == 2) {
        $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->leftjoin('users as assignto', 'assignto.id', '=', 'ticket.assigne_to')
          ->leftjoin('users as assigned_by', 'assigned_by.id', '=', 'ticket.assigned_by')
          // ->leftjoin('status', 'status.id', '=', 'ticket.status_id')
          ->where('ticket.assigne_to', Session::get('gorgID'))
          ->orWhere('ticket.created_by', Session::get('gorgID'))
          // ->orwhere('ticket.')
          ->select('users.name as createdby', 'priority_levels.priority_name', 'ticket.*', 'assignto.name as assigne_name', 'assigned_by.name as assigned_by_name')->get();
      } else {
        $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->leftjoin('users as assignto', 'assignto.id', '=', 'ticket.assigne_to')
          ->leftjoin('users as assigned_by', 'assigned_by.id', '=', 'ticket.assigned_by')
          ->where('ticket.assigne_to', Session::get('gorgID'))
          ->select('users.name as createdby', 'priority_levels.priority_name', 'ticket.*', 'assignto.name as assigne_name', 'assigned_by.name as assigned_by_name')
          ->get();
      }
    }

    // echo "<pre>";
    // print_r($ticketData);exit;
    // return $ticketData;
    $data['content'] = 'ticket.listing';
    return view('layouts.content', compact('data'))->with(['user_id' => @$user_id, 'module_permission' => @$module_permission, 'userData' => $userData, 'ticketData' => $ticketData, 'departmentData' => $departmentData, 'categoryData' => $categoryData, 'subcategoryData' => $subcategoryData, 'priorityData' => $priorityData, 'statusData' => $statusData, 'subDeptData' => $subDeptData, 'statusCheckDATA' => $statusCheckDATA]);
  }

  public function ticket_history($id)
  {
    $data = DB::table('ticket_history')
      ->join('ticket', 'ticket.id', '=', 'ticket_history.ticket_id')
      ->join('users as assineby', 'assineby.id', '=', 'ticket_history.assigned_by')
      ->join('users as assineto', 'assineto.id', '=', 'ticket_history.assigned_to')
      ->where('ticket_history.ticket_id', $id)
      ->select('ticket.ticket_id as ticketID', 'ticket_history.*', 'assineby.name as assignedBy', 'assineto.name as assignedTo', 'ticket.status_id as status_id')
      ->get();

    // print_r($data);
    foreach ($data as $key => $value) {
      $value->status_id =  DB::table('status')->where('id', $value->status_id)->value('status_name');
    }
    if ($data) {
      return Response::json($data);
    }
  }

  public function Ticket_Form(Request $request)
  {
    if ($request->requester_name != '') {
      $validatedData = Validator::make($request->all(), [
        'requester_name' => 'required',
        'email' => 'required|unique:ticket',
        'phone' => 'required|numeric|digits:10',
        'description' => 'required',
      ])->validate();

      $formData['requester_name'] = $request->requester_name;
      $formData['phone'] = $request->phone;
      $formData['email'] = $request->email;
      $formData['description'] = $request->description;
      $formData['resolution'] = $request->resolution;
      $formData['ip_address'] = $request->ip();
      $formData['created_at'] = date('Y-m-d H:i:s');
      Session::flash('message', 'Ticket Registered');
      $departmentData = DB::table('ticket')->insert($formData);
    }
    return view('contactfrom.contact.form');
  }



  public function add_ticket(Request $request)
  {
    // return $request;

    if ($request->hasFile('attachment')) {
      $filename = time() . '.' . request()->attachment->getClientOriginalExtension();
      request()->attachment->move(public_path('ticket_attachment'), $filename);
    }

    if ($request->assigne_to != '') {
      $assigneTo = $request->assigne_to;
    } else {
      $assigneTo = Session::get('gorgID');
    }

    if ($request->ids != '') {
      $CreatedBy = $request->created_by;
    } else {
      $CreatedBy = Session::get('gorgID');
    }
    if ($request->ids != '') {
      $StatusId = $request->status_id_chek_edit;
    } else {
      $StatusId = $request->status_id_chek;
    }


    $data = array(
      'created_by' => $CreatedBy,
      'technician_id' => $request->technician_id,
      'requester_name' => $request->requester_name,
      'email' => $request->email,
      'poc_id' => $request->poc_id,
      'ticket_id' => $request->ticket_id,
      'file_no' => $request->file_no,
      'assigne_to' => $assigneTo,
      'assigned_by' => Session::get('gorgID'),
      'phone' => $request->phone,
      'request_type' => $request->request_type,
      'status_id' => $StatusId,
      'ticket_mode' => $request->ticket_mode,
      'level' => $request->level,
      'category' => $request->category,
      'subcategory_id' => $request->subcategory_id,
      'item' => $request->item,
      'impact' => $request->impact,
      'priority' => $request->priority,
      'department_id' => $request->department_id,
      'subdepartment_id' => $request->subDept,
      //  'subdepartment_id' => $request->subdepartment_id,
      'subject' => $request->subject,
      'description' => $request->description,
      'resolution' => $request->resolution,
      'due_date' => $request->due_date !== null ? date('Y-m-d', strtotime($request->due_date)) : null,
      'resolved_date' => $request->resolved_date !== null ? date('Y-m-d', strtotime($request->resolved_date)) : null,
      'attachment' => @$filename,
      'ip_address' => $request->ip(),

    );

    if ($request->ids != '') {
      Session::flash('success', 'Updated Success.!');
      $data['updated_at'] = date('Y-m-d H:i:s');
      // if($ticket_status == 1){$data['assigne_to'] = null;}
      $updatedStatusdata = DB::table('ticket')->where('id', $request->ids)->value('status_id');
      $updatedAssigneddata = DB::table('ticket')->where('id', $request->ids)->value('assigne_to');
      $updateddescriptionddata = DB::table('ticket')->where('id', $request->ids)->value('description');

      $ticketData = DB::table('ticket')->where('id', $request->ids)->update($data);

      if ($updatedAssigneddata != $assigneTo || $updatedStatusdata != $StatusId || $updateddescriptionddata != $request->description) {
        $historyData = array(
          'assigned_by' => Session::get('gorgID'),
          'assigned_to' => $assigneTo,
          'ticket_id' =>  $request->ids,
          'ticket_description' => $request->description,
          'assigned_date' =>  date('Y-m-d H:i:s'),
        );
        $ticketData = DB::table('ticket_history')->insert($historyData);
      }
      return back();
    } elseif ($request->form_id != '') {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insert($data);
      return "wait";
      return back();
    } else {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insertGetId($data);
      // return "wait2";
      $historyData = array(
        'assigned_by' => Session::get('gorgID'),
        'assigned_to' => $assigneTo,
        'ticket_id' =>  $ticketData,
        'ticket_description' => $request->description,
        'assigned_date' =>  date('Y-m-d H:i:s'),
      );

      $ticketData = DB::table('ticket_history')->insert($historyData);

      return redirect()->back();
    }
  }




  public function getsublist(Request $request)
  {
    $subcatlist = DB::table("subcategory")
      ->where("category_id", $request->category)
      ->select('subcategory.subcategory_name', 'subcategory.id')
      ->get();

    return response()->json($subcatlist);
  }



  //fetching the department data acc to poc //rohit
  public function getpoclist(Request $request, $departmentID = "")
  {

    $toReturn['pocList'] = DB::table("departments")
      ->leftjoin('users', 'users.id', '=', 'departments.pos_id')
      ->where('departments.id', $departmentID)
      ->select('users.id as userId', 'users.name as userName')
      ->get();

    $toReturn['subdepartment'] = DB::table("subdepartment")
      ->where('department_id', $departmentID)
      ->select('subdepartment_name as subDeptName', 'id as subDeptId')
      ->get();
    // print_r($toReturn);
    return response()->json($toReturn);
  }


  //fetching the assign by data acc to status //rohit
  public function get_Statuslist(Request $request, $StatusID = "")
  {
    $StatusFetched = DB::table("status")
      // ->leftjoin('users','users.id','=','status.pos_id')
      ->where('status.id', $StatusID)
      ->select('users.id as userid', 'users.name as uName')
      ->get();

    return response()->json($StatusFetched);
  }


  public function delete_ticket($id)
  {
    Session::flash('error', 'Deleted Successfully..!');
    $delete = DB::table('ticket')->where('id', '=', $id)->delete();
    return back();
  }

  public function edit_ticket($id)
  {
    // echo $id;//rohit changes
    $toReturn['ticket'] = DB::table('ticket')
      ->leftjoin('departments', 'departments.id', '=', 'ticket.department_id')
      ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
      ->leftjoin('subdepartment', 'subdepartment.id', '=', 'ticket.subdepartment_id')
      // ->leftjoin('status', 'status.id', '=', 'ticket.status_id')
      ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
      ->where('ticket.id', $id)
      // ->select('ticket.*', 'departments.department_name', 'users.name', 'priority_levels.priority_name', 'category.category_name', 'subcategory.subcategory_name', 'assignedto.name as assigned_name')
      ->select('ticket.*', 'departments.department_name', 'users.name as name', 'subdepartment.subdepartment_name', 'priority_levels.priority_name as priority_name')
      ->first();

    $toReturn['ticket_history'] = DB::table('ticket_history')->where('ticket_id', $id)
      ->leftjoin('users', 'users.id', '=', 'ticket_history.assigned_by')
      ->get()->toArray();
    // echo "<pre>";
    // print_r ($toReturn['ticket_history']); 
    // exit;

    if ($toReturn) {
      return Response::json($toReturn);
    }
  }
  public function view_oss_touser()
  {
    return view('static-pages.ticket');
  }
  public function add_ticket_by_user(Request $request)
  {
    // return $request;
    if ($request->hasFile('attachment')) {
      $filename = time() . '.' . request()->attachment->getClientOriginalExtension();
      request()->attachment->move(public_path('ticket_attachment'), $filename);
    }

    if ($request->assigne_to != '') {
      $assigneTo = $request->assigne_to;
    } else {
      $assigneTo = Session::get('gorgID');
    }

    if ($request->ids != '') {
      $CreatedBy = $request->created_by;
    } else {
      $CreatedBy = Session::get('gorgID');
    }
    if ($request->ids != '') {
      $StatusId = $request->status_id_chek_edit;
    } else {
      $StatusId = $request->status_id_chek;
    }


    $data = array(
      'created_by' => $CreatedBy,
      'technician_id' => $request->technician_id,
      'requester_name' => $request->requester_name,
      'email' => $request->email,
      'poc_id' => $request->poc_id,
      'ticket_id' => $request->ticket_id,
      'file_no' => $request->file_no,
      'assigne_to' => $assigneTo,
      'assigned_by' => Session::get('gorgID'),
      'phone' => $request->phone,
      'request_type' => $request->request_type,
      'status_id' => $StatusId,
      'ticket_mode' => $request->ticket_mode,
      'level' => $request->level,
      'category' => $request->category,
      'subcategory_id' => $request->subcategory_id,
      'item' => $request->item,
      'impact' => $request->impact,
      'priority' => $request->priority,
      'department_id' => $request->department_id,
      'subdepartment_id' => $request->subDept,
      //  'subdepartment_id' => $request->subdepartment_id,
      'subject' => $request->subject,
      'description' => $request->description,
      'resolution' => $request->resolution,
      'due_date' => $request->due_date !== null ? date('Y-m-d', strtotime($request->due_date)) : null,
      'resolved_date' => $request->resolved_date !== null ? date('Y-m-d', strtotime($request->resolved_date)) : null,
      'attachment' => @$filename,
      'ip_address' => $request->ip(),

    );

    if ($request->ids != '') {
      Session::flash('success', 'Updated Success.!');
      $data['updated_at'] = date('Y-m-d H:i:s');
      // if($ticket_status == 1){$data['assigne_to'] = null;}
      $updatedStatusdata = DB::table('ticket')->where('id', $request->ids)->value('status_id');
      $updatedAssigneddata = DB::table('ticket')->where('id', $request->ids)->value('assigne_to');
      $updateddescriptionddata = DB::table('ticket')->where('id', $request->ids)->value('description');

      $ticketData = DB::table('ticket')->where('id', $request->ids)->update($data);

      if ($updatedAssigneddata != $assigneTo || $updatedStatusdata != $StatusId || $updateddescriptionddata != $request->description) {
        $historyData = array(
          'assigned_by' => Session::get('gorgID'),
          'assigned_to' => $assigneTo,
          'ticket_id' =>  $request->ids,
          'ticket_description' => $request->description,
          'assigned_date' =>  date('Y-m-d H:i:s'),
        );
        $ticketData = DB::table('ticket_history')->insert($historyData);
      }
      return back();
    } elseif ($request->form_id != '') {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insert($data);
      return "wait";
      return back();
    } else {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insertGetId($data);
      // return "wait2";
      $historyData = array(
        'assigned_by' => Session::get('gorgID'),
        'assigned_to' => $assigneTo,
        'ticket_id' =>  $ticketData,
        'ticket_description' => $request->description,
        'assigned_date' =>  date('Y-m-d H:i:s'),
      );

      $ticketData_history = DB::table('ticket_history')->insert($historyData);
      // return $ticketData;
      Session::put('user_data_message',$ticketData);
      // return Redirect::route('ticket_page, $ticketData');
      // return view('static-pages.ticket')->with('message', $ticketData);
      return redirect('ticket_page');
    }
  }
}
