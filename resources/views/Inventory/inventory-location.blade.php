<style>
   table th {
        text-align: center;
    }

    table td {
        padding: 3px 10px 3px 10px !important;
    }

    .rig {
        text-align: right;
    }

    .action {
        width: 50px;
    }
</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Manage Location</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{ URL::to('home') }}">Home</a></li>
                        <li><a href="{{URL::to('home')}}">Location</a></li>
                        <li class="active">location/area</li>
                    </ol>
                </div>
            </div>
            <hr class="new2">

            <div class="row" style="width: 102%; margin-left: -16px;">
                <div class="col-md-12" style="display:block; margin:auto;float:none;">
                    <div class="col-xl-12">
                        <div class="portlet">
                                <button type="button" class="btn btn-primary" style="float:right;margin-top: 1%;" onclick="addRecords()"> <i class="md md-add-circle-outline"></i> Add</button><br>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                  <tr>
                                    <th style="width: 55px;">SL No.</th>                   
                                    <th>Location ID </th>
                                    <th>Location Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th class="action">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($inventory_location as $key => $value)
                                    <tr>
                                       <td class="rig">{{$key+1}}</td>
                                       <!-- <td>{{$value['id']}}</td> -->
                                       <td class="rig">{{$value['location_id']}}</td>
                                       <td>{{$value['location_name']}}</td>
                                       <td>{{$value['location_description']}}</td>
                                       @if($value['status']== 1)
                                       <td>
                                          <p class="mb-0">
                                             <span class="badge badge-success">Active</span>
                                          </p>
                                       </td>
                                       @else
                                       <td>
                                          <p class="mb-0">
                                             <span class="badge badge-danger">Inactive</span>
                                          </p>
                                       </td>
                                       @endif
                                       <td class="actions">
                                          <a href="javascript::void(0)" class="on-default edit-row" onclick="editRecords({{$value['id']}})" data-toggle="tooltip" data-modal="modal-12" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                          &nbsp;&nbsp;&nbsp;
                                          <a href="{{ URL::to('inventory/destroy',$value['id'])}}" class="on-default remove-row" onclick="return confirm('Are you sure you want to delete this item?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fas fa-trash" style="color:red;"></i></a>
                                       </td>
                                    </tr>
                                    @endforeach
                               
                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--- MODEL CALL--->
<div id="location_inventory" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title mt-0">Inventory Location</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <form action="{{ url('inventory-location/Add') }}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
             @csrf
             <input type="hidden" name="ids" id="ids">
             <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                         <label for="location_id" class="control-label">Location ID <font color="red">*</font></label>
                         <input type="text" id="location_id" name="location_id" class="form-control" required="" aria-required="true" placeholder="Location ID">
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="location_name" class="control-label">Location Name <font color="red">*</font></label>
                           <input type="text" id="location_name" name="location_name" class="form-control" required="" aria-required="true" placeholder="Location Name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="location_description" class="control-label">Description <font color="red">*</font></label>
                            <input type="text" id="location_description" name="location_description" class="form-control" required="" aria-required="true" placeholder="Description">
                        </div>
                    </div>
 
                   <div class="col-md-6">
                      <div class="form-group">
                         <p class="control-label"><b>Status</b>
                            <font color="red">*</font>
                         </p>
                         <div class="radio radio-info form-check-inline">
                            <input type="radio" value="1" name="status" checked="">
                            <label for="inlineRadio1"> Active </label>
                         </div>
                         <div class="radio radio-info form-check-inline">
                            <input type="radio" value="0" name="status">
                            <label for="inlineRadio1"> Inactive </label>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <hr class="new2">
             <div class="modal-footer">
                <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
             </div>
          </form>
       </div>
    </div>
 </div>
 

 <!-- rohit   -->
 <script>
    function editRecords(id) {
       $.ajaxSetup({
          headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
       });
 
 
       $.ajax({
          url: "{{url('inventory-location/edit/')}}" + '/' + id,
          method: "POST",
          contentType: 'application/json',
          success: function (data) {
             // console.log(data);
             document.getElementById("ids").value = data.id;
             document.getElementById("location_id").value = data.location_id;
             document.getElementById("location_name").value = data.location_name;
             document.getElementById("location_description").value = data.location_description;
             var val = data.status;
             if (val == 1) {
                $('input[name=status][value=' + val + ']').prop('checked', true);
             } else {
                $('input[name=status][value=' + val + ']').prop('checked', true);
             }
             document.getElementById("submitbtn").innerText = 'UPDATE';
             $('#location_inventory').modal('show');
          }
       });
    }
 

    function addRecords() {
       document.getElementById("ids").value = '';
       document.getElementById("location_id").value = '';
       document.getElementById("location_name").value = '';
       document.getElementById("location_description").value = '';
       document.getElementById("submitbtn").innerText = 'Save';
       $('#location_inventory').modal('show');
    }

 </script>
