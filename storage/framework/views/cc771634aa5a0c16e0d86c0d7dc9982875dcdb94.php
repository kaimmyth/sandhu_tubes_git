<div class="content-page"> 
   <div class="content">
      <div class="container-fluid">
         <!-- Page-Title -->
         <div class="row" id="dashboard-row">
            <div class="col-sm-12">
               <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Organization Summary</h4>
               <ol class="breadcrumb pull-right">
                  <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                  <li><a href="<?php echo e(URL::to('home')); ?>">Organization</a></li>
                  <li class="active">Organization Summary</li>
               </ol>
            </div>
         </div><hr class="new2">
         <div class="row">
            <div class="col-md-12">           
               <div class="card card-border card-info">
                  <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                     
                     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					 
					 
					
                              <button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float: right;margin-top: 0px !important;" onclick="addRecords()" >Add <i class="md md-add-circle-outline"></i></button>
                           
					 
					 
                        <thead style="background: #b6e9ff;">
                           <tr>
                              <th>Organization Name</th>
                              <th>City, State</th>
                              <th>CIN</th>
                              <th>Revenue (in CR)</th>
							  <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-label="Action: activate to sort column ascending">Action</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $departmentData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td>Tata Tubes</td>
                              <td>Jamshedpur, JH</td>
                              <td>8776744dhjhj</td>
                              <td></td>
							  
							  <td class="actions">
                                            <a href="javascript::void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick="viweland(1)"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg><!-- <i class="fa fa-eye"></i> --></a>                                      
                                                &nbsp;&nbsp;&nbsp;
                              </td>
							  
                              <?php if($data->is_active == 1): ?>
                             
                              <?php else: ?>
                             
                              <?php endif; ?>
                             
                             
                           </tr>
						   
						   <tr>
                              <td>Tata Steel </td>
                              <td>Jamshedpur, JH</td>
                              <td>8776744dhjhj</td>
                              <td></td>
							   <td class="actions">
                                            <a href="javascript::void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick="viweland(1)"><svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg><!-- <i class="fa fa-eye"></i> --></a>                                      
                                                &nbsp;&nbsp;&nbsp;
                              </td>
                              <?php if($data->is_active == 1): ?>
                             
                              <?php else: ?>
                             
                              <?php endif; ?>
                             
                             
                           </tr>
						   
						   
						   
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                     </table>
                  </div>
                  <!-- end card-body -->
               </div>
            </div>
            <!-- container -->
         </div>
      </div>
   </div>
</div>
<!-- content -->

<!--- MODEL CALL--->
<div id="department-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title mt-0">Department info</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form  action="<?php echo e(url('add/department')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="ids" id="ids">
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group"> 
                        <label for="field-1" class="control-label">Department Name </label> 
                        <input  type="text" id="department_name" name="department_name" class="form-control" required="" aria-required="true" placeholder="Research and Development"> 
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group"> 
                        <label for="field-2" class="control-label">Description</label> 
                        <input id="description" type="text" name="description" class="form-control" required="" aria-required="true" placeholder="Enter  Description"> 
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="sel1">POC</label>
                        <select class="select2 form-control" name="pos_id" id="pos_id" >
                           <option value="">--- Select POC ---</option>
                           <?php if($userData !=''): ?>
                           <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($data->id > 1): ?>
                           <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                           <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <p class="control-label"><b>Is Active</b> <font color="red">*</font></p>
                        <div class="radio radio-info form-check-inline">
                           <input type="radio" value="1" name="is_active" checked="">
                           <label for="inlineRadio1"> Active </label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                           <input type="radio" value="0" name="is_active">
                           <label for="inlineRadio1"> Inactive </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div><hr class="new2">
            <div class="modal-footer"> 
               <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
               <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
            </div>
         </form>
      </div>
   </div>
</div>
<!-- /.modal eND -->
<script type="text/javascript">
   function editRecords(id) { 
    $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 });
    $.ajax({
     url:"<?php echo e(url('department/edit/')); ?>"+'/'+id,  
     method:"POST", 
     contentType : 'application/json',
     success: function( data ) {
            // console.log(data);
            document.getElementById("ids").value = data.id;
            document.getElementById("department_name").value = data.department_name;
            document.getElementById("description").value = data.description;
            document.getElementById("pos_id").value = data.pos_id;
            var val = data.is_active;
            if( val == 1)
            {
             $('input[name=is_active][value=' + val + ']').prop('checked',true);
          }else{
             $('input[name=is_active][value=' + val + ']').prop('checked',true);
          }
          document.getElementById("submitbtn").innerText ='UPDATE';
          $('#department-model').modal('show');
       }
    });
 }
 function addRecords() { 
   document.getElementById("ids").value ='';
   document.getElementById("department_name").value = '';
   document.getElementById("description").value = '';
   document.getElementById("pos_id").value = '';
   document.getElementById("submitbtn").innerText ='Save';
   $('#department-model').modal('show');
}

</script><?php /**PATH C:\xampp\htdocs\sandhu_tubes\resources\views/master/department.blade.php ENDPATH**/ ?>