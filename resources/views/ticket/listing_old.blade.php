<style>
   hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
      border: 1px solid gainsboro;
      border-radius: 5px;
      width: 100%;
   }
   hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
      border: 1px solid gainsboro;
      border-radius: 5px;
      width: 100%;
   }
   .table td, .table th {
      padding: 0rem !important;
      vertical-align: inherit !important;
      border-top: 1px solid #dee2e6;
      font-size: 13px;
      color: black;
      text-align: center;
   }
   .modal .modal-dialog .modal-content {
      -moz-box-shadow: none;
      -webkit-box-shadow: none;
      border-color: #DDDDDD;
      border-radius: 2px;
      box-shadow: none;
      padding: 15px !important;
   }
   .upl img{
      width: 50px;
      margin-left: 22px;
      height: 50px;
   }
   .inp input{
      border: 1px solid #6d6d6d;
      border-radius: 3px;
      height: 23px;
      margin-left: 22px;
      margin-top: 7px;
      width: 60px;
   }
</style>
<!-- Start content -->
<div class="content-page">
   <div class="content">
      <div class="container-fluid">
         <div class="row" id="dashboard-row">
            <div class="col-sm-12">
               <h4 class="pull-left page-title"  style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Tickets</h4>
               <ol class="breadcrumb pull-right">
                  <li><a href="{{ URL::to('home') }}">Home</a></li>
                  <li><a href="{{URL::to('home')}}">Tickets</a></li>
                  <li class="active">Online Support: Tickets</li>
               </ol>
            </div>
         </div>
         <hr class="new2">
         <div class="row">
            <div class="col-md-12">
               <div class="card" style="background:#0333f445;height: 60px;">
                  <div class="card-body">
                     <form  action="{{ url('ticket') }}" method="POST" id="FormValidation" enctype="multipart/form-data" style="margin-top: -11px;">
                        @csrf
                        <input type="hidden" name="search_id" id="search_id" value="1">
                        <div class="btn-group">
                           <div class="btn-group">
                              <input class="form-control" id="myInput" type="text" placeholder="Tickets, ID, Subject, POC....">
                           </div>
                        </div>
                        <div class="btn-group">
                           <div class="btn-group">
                              <select class="form-control" id="status_id" name="status_id">
                                 <option value=""> Select Status</option>
                                 <option value="Open">Open</option>
                                 <option value="Closed">Closed</option>
                                 <option value="OnGoing">OnGoing</option>
                                 <option value="Pending">Pending</option>
                              </select>
                           </div>
                        </div>
                        <div class="btn-group">
                           <div class="btn-group">
                              <select class="form-control" id="priority_id" name="priority_id">
                                 <option value=""> Select Priority </option>
                                 @foreach($priorityData as $data)
                                 <option value="{{ $data->id }}">{{ $data->priority_name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="btn-group">
                           <select class="form-control" id="category_id" name="category_id" >
                              <option value="">Select Category</option>
                              @foreach($categoryData as $data)
                              <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="btn-group">
                           <button type="submit" class="btn waves-effect waves-light btn-info" style="height: 36px;">Search</button>
                           <input type="button"  value="Refresh" onClick="location.href=location.href">
                        </div>
                        <div class="btn-group" style="float: right;">
                           <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-top: 4px;"> Create a New Ticket &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
               <hr class="new2">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead style="background: #b6e9ff;">
                                 <tr style="height: 28px;">
                                    <th>Ticket No.</th>
                                    <th data-priority="1">Description</th> 
                                    <th data-priority="1">POC</th>
                                    <th>Assign To</th>
                                    <th>Assigned By</th>
                                    <th data-priority="1">Ticket Name</th>
                                    <th data-priority="6">Priority</th>
                                    <th data-priority="6">Status</th>
                                    <th data-priority="6">DueDate</th>
                                    <th data-priority="6">Created Date</th>
                                    <th data-priority="6">Action</th>
                                 </tr>
                              </thead>
                              <tbody id="myTable">                        
                                 @foreach($ticketData as $key => $data)
                                 <tr  style="height: 28px;">                                    
                                    <td>{{$data->ticket_id}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{ $data->createdby }} </td>
                                    <td>{{$data->assigne_name}}</td>
                                    <td>{{$data->assigned_by_name}}</td>
                                    <td>{{ $data->requester_name}} </td>
                                    <td>{{ $data->priority_name}} </td>
                                    <!-- ========== Ticket STatus Section ========== -->
                                    <td> @if($data->status_id == 1) Open @endif
                                    @if($data->status_id == 2) On Going @endif
                                    @if($data->status_id == 3) Closed  @endif
                                    @if($data->status_id == 4) Hold  @endif
                                    @if($data->status_id == 5) Reopen @endif</td>
                                    <td>{{ $data->due_date}} </td>
                                    <td>{{ $data->created_at}} </td>                                                               
                                    <td>
                                       @if(Auth::user()->users_role == 1)
                                       <a onclick="viewTickethistory({{ @$data->id }})" href="javascript::void(0)"><i class="fa fa-history"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                       <a onclick="viewRecords({{ @$data->id }})" href="javascript::void(0)"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                       <a onclick="editRecords({{@$data->id}})" href="javascript::void(0)"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                       <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ URL::to('delete/ticket',@$data->id)}}"><i class="fa fa-trash"></i></a>
                                       @else
                                       <a onclick="viewTickethistory({{ @$data->id }})" href="javascript::void(0)"><i class="fa fa-history"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;  
                                       <a onclick="viewRecords({{ @$data->id }})" href="javascript::void(0)"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                       @if(Session::get('gorgID') != $data->created_by)
                                       <a onclick="editRecords({{@$data->id}})" href="javascript::void(0)"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                       @endif
                                       @endif
                                       

                                    </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row -->
               <!--  Modal content for the above example -->
               <div id="ticket-model" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title mt-0" id="myLargeModalLabel">New Customer Ticket</h4>
                           <button type="button" id="buttonhist" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form  action="{{ url('add/ticket') }}" method="POST" id="FormValidation" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="ids" id="ids">
                              <input type="hidden" name="created_by" id="created_by">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group"> 
                                             <label for="sel1">Name<font style="color:red">*</font></label>
                                             <input type="text" class="form-control" id="requester_name" name="requester_name" value="" placeholder=" Name" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group"> 
                                             <label for="sel1">Email<font style="color:red">*</font></label>
                                             <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group"> 
                                             <label for="sel1">Phone<font style="color:red">*</font></label>
                                             <input type="text" class="form-control" id="phone" name="phone" value="" placeholder="Phone" maxlength="10" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Department/Category</label>
                                             <select class="form-control" id="department_id" name="department_id"  >
                                                <option value=""> Select Department </option>
                                                @if($departmentData !='')
                                                @foreach($departmentData as $data)
                                                <option value="{{$data->id}}">{{ $data->department_name}}</option>
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">SubDepartment/SubCategory</label>
                                             <select class="form-control" id="subDept" name="subDept"  >                                           
                                                <option value=""> Select SubDepartment </option> 
                                                @if($subDeptData !='')
                                                @foreach($subDeptData as $data)
                                                <option value="{{$data->id}}">{{ $data->subdepartment_name}}</option>
                                                @endforeach
                                                @endif 
                                                                                                                                        
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">POC</label>
                                             <select class="form-control" id="poc_id" name="poc_id" required>
                                                <option value=""> Select POC </option>
                                                @if($userData !='')
                                                @foreach($userData as $data)
                                                @if($data->id > 1)
                                                <option value="{{ $data->id }}" <?php if($data->generic_id==1){echo "selected";} ?>> {{ $data->name}}</option>
                                                @endif
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Priority</label>
                                             <select class="form-control" id="priority" name="priority" >
                                                <option value=""> Select Priority </option>
                                                @if($priorityData !='')
                                                @foreach($priorityData as $data)
                                                <option value="{{ $data->id }}">{{ $data->priority_name}}</option>
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Status</label>
                                             <select class="form-control" id="status_id_chek" name="status_id_chek" >
                                                <option value=""> Select Status </option>
                                                @if($statusCheckDATA !='')
                                                @foreach($statusCheckDATA as $data)
                                                   
                                                   <option value="{{ $data->id }}">{{ $data->status_name}}</option>
                                                   
                                                @endforeach
                                                @endif
                                               
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">RequestType</label>
                                             <select class="form-control" id="request_type" name="request_type" >
                                                <!-- <option value=""> Select RequestType </option> -->
                                                <option value="incident" selected>Incident </option>
                                                <option value="request_for_information">Request For Information</option>
                                                <option value="service_request">Service Request</option>
                                             </select>
                                          </div>
                                       </div>               
                                       <div class="col-md-4">
                                          <div class="form-group"> 
                                             <label for="sel1">Subject</label>
                                             <input type="text" class="form-control" id="subject" name="subject" value="" placeholder="Subject">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group"> 
                                             <label for="sel1">Due date</label>
                                             <input type="text" class="form-control dateFilter" id="due_date" name="due_date" value="" placeholder="Select Date" autocomplete="off">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group"> 
                                             <label for="sel1">File No.</label>
                                             <input type="text" class="form-control" id="file_no" name="file_no" value="" placeholder="File No.">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group"> 
                                             <label for="sel1">Resolved Date</label>
                                             <input type="text" class="form-control dateFilter" id="resolved_date" name="resolved_date" value="" placeholder="Select Resolved Date" >
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Assigne To</label>
                                             <select class="form-control" id="assigne_to" name="assigne_to">
                                                <option value=""> Select User </option>
                                                @if($userData !='')
                                                @foreach($userData as $data)
                                                @if($data->id > 1)
                                                <option value="{{ $data->id }}" <?php if($data->generic_id==1){echo "selected";} ?>>{{ $data->name}}</option>
                                                @endif
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="comment">Description<font style="color:red">*</font></label>
                                                <textarea class="form-control" id="description" name="description" required="" rows="3" placeholder="Description" id="comment"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="comment">Resolution</label>
                                                <textarea class="form-control" id="resolution" name="resolution" rows="3" placeholder="Resolution" id="comment"></textarea>
                                             </div>
                                          </div>
                                          <!-- <div class="upl row" id="image_preview"></div> -->
                                          <div class="inp row" id="image_name"></div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                                <label for="sel1">Choose Multiple Files </label>
                                                <input type="file" class="form-control" id="upload_file" name="attachment" onchange="preview_image();" multiple style="width: 42%;" />
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                                <label for="sel1">Ticket No.<font style="color:red">*</font></label>
                                                <input type="text" class="form-control" id="ticket_id"  required="" name="ticket_id" value="" placeholder="Ticket No.">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="submit" id="submitbtn" class="btn btn-primary">Create Ticket</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->

               <!--  View Ticket Model -->
               <!--  View/Update Customer -->
               <div class="modal fade" id="view_ticket" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content" >
                        <div class="modal-header">
                           <h4 class="modal-title mt-0" id="myLargeModalLabel">Tickets Details</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <form action="{{ URL::to('land/customer/add')}}" method="POST" id="Form" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                           <input type="hidden" name="ids" id="ids"  >
                           <div class="modal-body">
                              <div class="row">
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Ticket Number :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="requester_name1"></b>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">File Number :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="file_no1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Phone :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="phone1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">POC Name :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="poc1"></b>
                                       </div>
                                    </div>
                                 </div>
                                   <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Assigned To :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="assigne_to1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Due date :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="due_date1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Subject :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="subject1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Resolved Date :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="resolved_date1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Email :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="email1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Description :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="description1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Resulation :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="resulation1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Priority :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="priority1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Status :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="status_id_chek1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Department :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="department1"></b>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Category :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="category1"></b>
                                       </div>
                                    </div>
                                 </div> -->

                                  <!-- <div class="col-md-5">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Sub-Category :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="subcategory1"></b>
                                       </div>
                                    </div>
                                 </div> -->

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="modal fade" id="view_ticket_history" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                     <div class="modal-dialog modal-lg">
                        <div class="modal-content" >
                           <div class="modal-header">
                              <h4 class="modal-title mt-0" id="myLargeModalLabel">Tickets History Details</h4>
                              <button type="button" id="buttonhist" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>

                              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead style="background: #b6e9ff;">
                                 <tr style="height: 28px;">
                                    <th>Ticket No.</th>
                                    <th>Assigned By</th>
                                    <th>Assigned To</th>
                                    <th>Assigned Date</th>                                 
                                 </tr>
                              </thead>
                              <tbody id="myhistoryTable">                                 
                                 <tr  style="height: 28px;">
                                    <td id="id"> </td>
                                    <td id="assigned_by"> </td>
                                    <td id="assigned_to"> </td>
                                    <td id="assigned_date"> </td>
                                 </tr>
                              </tbody>
                           </table>


                        </div>
                     </div>
                  </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>




<script type="text/javascript">
   function editRecords(id) { 
      // alert(id);
     $.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });
     $.ajax({
       url:"{{ url('edit/ticket/') }}"+'/'+id,  
       method:"POST", 
       contentType : 'application/json',
       success: function( data ) {
          console.log(data);
          document.getElementById("ids").value = data.id;
          document.getElementById("request_type").value = data.request_type;
          document.getElementById("requester_name").value = data.requester_name;
          document.getElementById("email").value = data.email;
          document.getElementById("phone").value = data.phone;
          document.getElementById("status_id_chek").value = data.status_id;
          document.getElementById("poc_id").value = data.poc_id;
         //  document.getElementById("ticket_mode").value = data.ticket_mode;
         //  document.getElementById("level").value = data.level;
         //  document.getElementById("category").value = data.category;
         //  document.getElementById("subcategory").value = data.subcategory_id;
         //  document.getElementById("impact").value = data.impact;
          document.getElementById("priority").value = data.priority;
          document.getElementById("department_id").value = data.department_id;
          document.getElementById("subDept").value = data.subdepartment_id;
          document.getElementById("due_date").value = data.due_date;
          document.getElementById("resolved_date").value = data.resolved_date;
          document.getElementById("subject").value = data.subject;
          document.getElementById("description").value = data.description;
          document.getElementById("resolution").value = data.resolution;
          document.getElementById("file_no").value = data.file_no;
          document.getElementById("assigne_to").value = data.assigne_to;
          document.getElementById("assigned_by").value = data.assigned_by;
          document.getElementById("created_by").value = data.created_by;
          document.getElementById("ticket_id").value = data.ticket_id;
          document.getElementById("submitbtn").innerText ='UPDATE';
          document.getElementById("myLargeModalLabel").innerText ='Update Customer Ticket';
          $('#ticket-model').modal('show');
       }
    });
  }
</script>



<script type="text/javascript">
   function viewRecords(id) { 
      // alert(id);
     $.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });
     $.ajax({
       url:"{{ url('view/ticket/') }}"+'/'+id,  
       method:"POST", 
       contentType : 'application/json',
       success: function(data) {
         document.getElementById("requester_name1").innerHTML = data.requester_name;
         document.getElementById("file_no1").innerHTML = data.file_no;
         document.getElementById("email1").innerHTML = data.email;
         document.getElementById("phone1").innerHTML = data.phone;
         document.getElementById("poc1").innerHTML = data.name;
         document.getElementById("assigne_to1").innerHTML = data.name;
         document.getElementById("due_date1").innerHTML = data.due_date;
         document.getElementById("resolved_date1").innerHTML = data.resolved_date;
         document.getElementById("subject1").innerHTML = data.subject;
         document.getElementById("description1").innerHTML = data.description;
         document.getElementById("priority1").innerHTML = data.priority_name;
          document.getElementById("status_id_chek1").innerHTML = data.status_id;
         document.getElementById("department1").innerHTML = data.department_name;
         document.getElementById("resulation1").innerHTML = data.resolution;
         //document.getElementById("category1").innerHTML = data.category_name;
         //.getElementById("subcategory1").innerHTML = data.subcategory_name;
         $('#view_ticket').modal('show');
      }
   });
  }
</script>

  <!--  <script type="text/javascript">
   function viewTicket(id) { 
     $.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
     $.ajax({
       url:"{{ url('view/ticket') }}"+'/'+id,  
       method:"POST", 
       contentType : 'application/json',
       success: function(data) {
         
         $('#view_ticket_history').modal('show');
      }
   });
   }
</script>
-->



<script type="text/javascript">
   function viewTickethistory(id) { 
     $.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
     $.ajax({
       url:"{{ url('ticket/history') }}"+'/'+id,  
       method:"POST", 
       contentType : 'application/json',
       success: function(data) {
         $("#id").html('');
         $("#assigned_by").html('');
         $("#assigned_to").html('');
         $("#assigned_date").html('');
        $.each(data, function (index, value) {
            // to_append+=`
            //    <tr>
            //       <td>`+this.ticketID+`</td>
            //       <td>`+this.assignedBy+`</td>
            //       <td>`+this.assignedTo+`</td>
            //       <td>`+this.assigned_date+`</td>
            //    </tr>
            // `;
            $("#id").append(this.ticketID + '<br>');
            $("#assigned_by").append(this.assignedBy + '<br>');
            $("#assigned_to").append(this.assignedTo + '<br>');
            $("#assigned_date").append(this.assigned_date + '<br>');
            $('#view_ticket_history').modal('show');
       });
      }
  });
  }
</script>




<script type='text/javascript'>
   $(document).ready(function() {
     var currentdate = moment().format('DD-MM-YYYY');
     document.getElementsByClassName('dateFilter').value = currentdate;

     var today1 = new Date();
     $('.dateFilter').datepicker({
       format: 'dd-mm-yyyy',
       autoclose: true,
       maxDate: today1
    }).on('changeDate', function(ev) {
       $(this).datepicker('hide');
    });
    $('.dateFilter').keyup(function() {
       if (this.value.match(/[^0-9]/g)) {
         this.value = this.value.replace(/[^0-9^-]/g, '');
      }
   });
 });
</script>
<script>
   $(document).ready(function(){
    $("#myInput").on("keyup", function() {
     var value = $(this).val().toLowerCase();
     $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
  });
 });
</script>

<!-- <script type="text/javascript">
   $('#category').change(function(){
      var categoryID = $(this).val(); 
      // alert('category');   
      if(categoryID){
       $.ajax({
          type:"GET",
          url:"{{url('get_subid')}}?category="+categoryID,
          success:function(data){               
           if(data)
           {
              $("#subcategory").empty();
              $("#subcategory").append('<option>Select</option>');
              $.each(data,function(key,value){
               $("#subcategory").append('<option value="'+value['id']+'">'+value['subcategory_name']+'</option>');
            });
           }
           else
           {
              $("#subcategory").empty();
           }
        }
     });
    }    
 });
</script> -->

<!-- here department accc to poc list  and assign to change rohit yestyerday -->
<script type="text/javascript">
   $('#department_id').change(function(){      
      var departmentID = $(this).val(); 
      // alert(id);
      if(departmentID){
       $.ajax({
          type:"GET",
          url:"{{url('get_pocid/')}}"+'/'+departmentID,
          success:function(data){               
           if(data)
           {
              $("#poc_id").empty();
            //   $("#poc_id").append('<option>Select POC</option>');
              $("#assigne_to").empty();
            //   $("#assigne_to").append('<option>Select User</option>');
              $("#subDept").empty();
            //   $("#subDept").append('<option value="">Select Sub Department</option>');
              $.each(data.pocList,function(key,value){
               $("#poc_id").append('<option value="'+value['userId']+'">'+value['userName']+'</option>');
               $("#assigne_to").append('<option value="'+value['userId']+'">'+value['userName']+'</option>');
               });
             
              $.each(data.subdepartment,function(key,value){
                  $("#subDept").append('<option value="'+value['subDeptId']+'">'+value['subDeptName']+'</option>');
               });
           }
           else
           {
              $("#name").empty();
           }
        }
     });
    }    
 });
</script>

<!-- here department accc to poc list  and assign to change rohit yestyerday -->
<script type="text/javascript">
   $('#status_id_chek').change(function(){
      var StatusID = $(this).val(); 
      //  alert(StatusID);
      if(StatusID){
       $.ajax({
          type:"GET",
          url:"{{url('get_statusid/')}}"+'/'+StatusID,
          success:function(data){               
           if(data)
           {     
            $("#assigne_to").empty();
            $("#assigne_to").append('<option>Select User</option>');
              $.each(data,function(key,value){             
               $("#assigne_to").append('<option value="'+value['userid']+'">'+value['uName']+'</option>');
               });
           }
           else
           {
              $("#name").empty();
           }
        }
     });
    }    
 });
</script>



<script>
   $(document).ready(function() 
   { 
      $('form').ajaxForm(function() 
      {
         alert("Uploaded SuccessFully");
      }); 
   });
   
   function preview_image() 
   {
      var total_file=document.getElementById("upload_file").files.length;
      for(var i=0;i<total_file;i++)
      {
         $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
         $('#image_name').append("<input type='text' class='form-controll' name='img_name[]'> <br>");
      }
   }
</script>
<!--- Auto compleate off script -->
<script type="text/javascript">
   $("form").attr('autocomplete', 'off');
</script>

<!-- <script>
$(document).ready(function(){
  $("button").click(function(){
    $("#myTable").remove();
  });
});
</script> -->

<script type="text/javascript">
    $(document).ready(function(){
        $("#buttonhist").click(function(){
            location.reload(true);
        });
    });
</script>

<!-- <script>
    $(document).ready(
            function() {
                setInterval(function() {
                    var randomnumber = Math.floor(Math.random() * 100);
                    $('#myhistoryTable').text(
                            'I am getting refreshed every 3 seconds..! Random Number ==> '
                                    + randomnumber);
                }, 3000);
            });

    $(document).ready(
            function() {
                setInterval(function() {
                    var randomnumber = Math.floor(Math.random() * 100);
                    $('#myhistoryTable').text(
                            'I am getting refreshed every 3 seconds..! Random Number ==> '
                                    + randomnumber);
                }, 3000);
            });
</script> -->