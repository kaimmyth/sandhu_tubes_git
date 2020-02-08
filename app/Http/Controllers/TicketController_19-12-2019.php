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
        $userData = DB::table('users')->get();
        // echo"<pre>";
        // print_r($userData);die;
        $departmentData = DB::table('departments')->where('is_active', '1')->get();
        $categoryData = DB::table('category')->where('is_active', '1')->get();
        $subcategoryData = DB::table('subcategory')->where('is_active', '1')->get();
        $priorityData = DB::table('priority_levels')->where('is_active', '1')->get();
        $statusData = DB::table('ticket')->get();
        $subDeptData = DB::table('subdepartment')->where('is_active', '1')->get();

        
        if($request->search_id!='')
        {
          if($request->priority_id!='')
          {
          $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where('ticket.priority', $request->priority_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby','priority_levels.priority_name', 'ticket.*')->get();
            // print_r($ticketData);
            // die;
          
        }
        elseif ($request->category_id!='') 
        {
          $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where('ticket.category', $request->category_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby','priority_levels.priority_name', 'ticket.*')
          ->get();
        }
        elseif ($request->status_id!='') 
        {
          $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where('ticket.status', $request->status_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby','priority_levels.priority_name', 'ticket.*')
          ->get();
        }
      }
      else
      {
        if (Auth::check() && Auth::user()->users_role == 1) 
        {
          $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->select('users.name as createdby','ticket.*','priority_levels.priority_name')
          ->get();

        }
        else
        {
          $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where('ticket.assigne_to', Session::get('gorgID'))
          ->select('users.name as createdby','priority_levels.priority_name', 'ticket.*')
          ->get();        
        }
     }

// return $ticketData;
    $data['content'] = 'ticket.listing';
    return view('layouts.content',compact('data'))->with(['userData' => $userData, 'ticketData' => $ticketData, 'departmentData' => $departmentData, 'categoryData' => $categoryData, 'subcategoryData' => $subcategoryData, 'priorityData' => $priorityData, 'statusData' => $statusData, 'subDeptData'=> $subDeptData]);
}

public function ticket_history($id)
{
  $data = DB::table('ticket_history')
    ->join('ticket', 'ticket.id', '=', 'ticket_history.ticket_id')
    ->join('users as assineby', 'assineby.id', '=', 'ticket_history.assigned_by')
    ->join('users as assineto', 'assineto.id', '=', 'ticket_history.assigned_to')
    ->where('ticket_history.ticket_id', $id)
    ->select('ticket.ticket_id as ticketID', 'ticket_history.*', 'assineby.name as assignedBy', 'assineto.name as assignedTo')
    ->get();

  if ($data) {
    return Response::json($data);
  }
}

public function Ticket_Form(Request $request)
{
  if ($request->requester_name!='') {
    $validatedData = Validator::make($request->all(), [
      'requester_name' => 'required',
      'email' => 'required|unique:ticket',
      'phone' => 'required|numeric|digits:10',
      'description' => 'required',
    ])->validate();

    $formData['requester_name']= $request->requester_name;
    $formData['phone']= $request->phone;
    $formData['email']= $request->email;
    $formData['description']= $request->description;
    $formData['resolution']= $request->resolution;
    $formData['ip_address']= $request->ip();
    $formData['created_at']=date('Y-m-d H:i:s');
    Session::flash('message','Ticket Registered');
    $departmentData = DB::table('ticket')->insert($formData);
  }
  return view('contactfrom.contact.form');
}



public function add_ticket(Request $request)
{
  if($request->hasFile('attachment'))
  {
    $filename = time().'.'.request()->attachment->getClientOriginalExtension();
    request()->attachment->move(public_path('ticket_attachment'), $filename);
  }

  if($request->assigne_to!=''){
    $assigneTo = $request->assigne_to;
  }else{
    $assigneTo = Session::get('gorgID');
  }

  $data = array(
    'created_by' => Session::get('gorgID'),
    'technician_id' => $request->technician_id,
    'requester_name' => $request->requester_name,
    'email' => $request->email,
    'poc_id' => $request->poc_id,
    'ticket_id' => $request->ticket_id,
    'file_no' => $request->file_no,
    'assigne_to' => $assigneTo,
    'phone' => $request->phone,
    'request_type' => $request->request_type,
    'status' => $request->status,
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
    'ip_address' =>$request->ip()
  );

  if ($request->ids != ''){
    Session::flash('success', 'Updated Success.!');
    $data['updated_at']=date('Y-m-d H:i:s');
    $ticketData = DB::table('ticket')->where('id', $request->ids)->update($data);

    $historyData = array(
      'assigned_by' => Session::get('gorgID'),
      'assigned_to' => $assigneTo,
      'ticket_id' =>  $request->ids,
      'assigned_date' =>  date('Y-m-d H:i:s'),
    );
    $ticketData = DB::table('ticket_history')->insert($historyData);
    return back();

  }elseif ($request->form_id != '') {
   Session::flash('success', 'Ticket Genrate Successfully..!');
   $data['created_at']=date('Y-m-d H:i:s');
   $ticketData = DB::table('ticket')->insert($data);
   return Redirect ('ThankYou');
 }else{
  Session::flash('success', 'Ticket Genrate Successfully..!');
  $data['created_at']=date('Y-m-d H:i:s');
  $ticketData = DB::table('ticket')->insertGetId($data);

  $historyData = array(
    'assigned_by' => Session::get('gorgID'),
    'assigned_to' => $assigneTo,
    'ticket_id' =>  $ticketData,
    'assigned_date' =>  date('Y-m-d H:i:s'),
  );

  $ticketData = DB::table('ticket_history')->insert($historyData);

  return back();
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
public function getpoclist(Request $request ,$departmentID="" )
{
  
  $toReturn['pocList'] = DB::table("departments")
  ->leftjoin('users','users.id','=','departments.pos_id')
  ->where('departments.id', $departmentID)
  ->select('users.id as userId', 'users.name as userName')
  ->get();
  
  $toReturn['subdepartment'] = DB::table("subdepartment")
  ->where('department_id', $departmentID)
  ->select('subdepartment_name as subDeptName','id as subDeptId')
  ->get();
// print_r($toReturn);
  return response()->json($toReturn);
}


public function get_poclist_subDepartment(Request $request ,$subdepartmentID="" )
{
  echo"hvfduihi";
//   $toReturn['pocList'] = DB::table("departments")
//   ->leftjoin('users','users.id','=','departments.pos_id')
//   ->where('departments.id', $departmentID)
//   ->select('users.id as userId', 'users.name as userName')
//   ->get();
  
//   $toReturn['subdepartment'] = DB::table("subdepartment")
//   ->where('department_id', $departmentID)
//   ->select('subdepartment_name as subDeptName','id as subDeptId')
//   ->get();
// // print_r($toReturn);
//   return response()->json($toReturn);
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
  $data = DB::table('ticket')
  ->leftjoin('departments', 'departments.id', '=', 'ticket.department_id')
  ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
  ->leftjoin('subdepartment', 'subdepartment.id', '=', 'ticket.subdepartment_id')
   // ->join('users as assignedto', 'assignedto.id', '=', 'ticket.assigne_to')
   ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
  // ->join('category', 'category.id', '=', 'ticket.category')
  // ->join('subcategory', 'subcategory.id', '=', 'ticket.subcategory_id')
   ->where('ticket.id', $id)
  // ->select('ticket.*', 'departments.department_name', 'users.name', 'priority_levels.priority_name', 'category.category_name', 'subcategory.subcategory_name', 'assignedto.name as assigned_name')
   ->select('ticket.*', 'departments.department_name', 'users.name as name','subdepartment.subdepartment_name','priority_levels.priority_name as priority_name')
  ->first();

  // echo "<pre>";
  // print_r ($data); 
  // exit;
 

  // //rohit
  // $data = DB::table('ticket')
  // ->join('departments', 'departments.id', '=', 'ticket.department_id')
  // ->join('subdepartment', 'subdepartment.id', '=', 'ticket.department_id')

  // ->join('users', 'users.id', '=', 'ticket.poc_id')
  // // // ->join('users as assignedto', 'assignedto.id', '=', 'ticket.assigne_to')
  // // // ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
  // // // ->join('category', 'category.id', '=', 'ticket.category')
  // // // ->join('subcategory', 'subcategory.id', '=', 'ticket.subcategory_id')
  // // // ->where('ticket.id', $id)
  // ->select('ticket.*','departments.*')
  //  ->get();

  if ($data) {
    return Response::json($data);
  }
}
}
