<style>
  hr.new2 {
  border-top: 1px dashed #000;
}

</style>
<div class="content-page">
 <!-- Start content -->
 <div class="content">
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row" id="dashboard-row">
      <div class="col-sm-12">
        <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Inventory</h4>
        <ol class="breadcrumb pull-right">
          <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
          <li><a href="<?php echo e(URL::to('home')); ?>">land</a></li>
          <li class="active">Land Inventory</li>
        </ol>
      </div>
    </div><hr class="new2">

    <div class="row">
      <div class="col-md-12">
        <div class="card card-border card-info">
        <div class="card-header" style="background-image: linear-gradient(#e1f1f9, white);">
          <div class="card-body" style="margin-top: -15px;">
           <?php if($user_id!=1): ?>
            <?php if(@$module_permission['is_add']=='yes'): ?>
            <a href="<?php echo e(url('land/add')); ?>" ><button  id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5"  data-toggle="modal" style="float:right; margin-top: 19px;"><i class="md md-add-circle-outline"></i> Add</button></a>
           <?php endif; ?>
           <?php else: ?>
           <a href="<?php echo e(url('land/add')); ?>" ><button  id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5 "  data-toggle="modal" style="float:right; margin-top: 10px !important;"><i class="md md-add-circle-outline"></i> Add</button></a>
           <?php endif; ?>
          </div>
     
           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
           <thead style="background: #b6e9ff;">
            <tr>
            
              <th>Item Name </th>
              <th>Item Category</th>
              <th>Quantity </th>
              <th>Unit of M</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $landdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <?php if($user_id!=1): ?>
                <?php if(@$module_permission['is_edit']=='yes'): ?>
              <td>1</td>
              <?php else: ?>
              <td>1</td>
              <?php endif; ?>
              <?php else: ?>
              
              <?php endif; ?>
              <td>Mother Coil </td>
              <td>Materials</td>
              <td>103487</td>
              <td>Kilograms</td>
			  
			  
              <td class="actions">
                <?php if($user_id!=1): ?>
                <?php if(@$module_permission['is_edit']=='yes'): ?>
             
                <?php endif; ?>
                <?php else: ?>
              
                <?php endif; ?>
                <?php if($user_id!=1): ?>
                <?php if(@$module_permission['is_view']=='yes'): ?>
                <a href="javascript::void(0);"  data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick="viweland(<?php echo e($val->id); ?>)"><i class="fa fa-eye"></i></a>                                      
                &nbsp;&nbsp;&nbsp;
                <?php endif; ?>
                <?php else: ?>
                <a href="javascript::void(0);"  data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick="viweland(<?php echo e($val->id); ?>)"><i class="fa fa-eye"></i></a>                                      
                <?php endif; ?>
                <?php if($user_id!=1): ?>
                <?php if(@$module_permission['is_delete']=='yes'): ?>
                <!-- <a href="javascript::void(0)" onclick="viewRecords(<?php echo e($val->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a> -->
                 &nbsp;&nbsp;&nbsp;
              
                <?php endif; ?>
                <?php else: ?>
              

               
                <?php endif; ?>
              </td>            
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<div class="modal fade bd-example-modal-lg" id="view_land_details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Land Info</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-xl-12">
              <div class="row">
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Plot No :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="plot_no"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Plot Name :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="plot_name"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Plot Size :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="plot_size"></b>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Area :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="area"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Sector :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="sector"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Block :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="block"></b>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Address :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="address"></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Is  land  Register  :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="is_land_register"></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="row form-group">
                      <label class="col-sm-5 control-label" for="example-input-normal">Is land Transfer  :- </label>
                      <div class="col-sm-7">
                          <b style="color: #F47C11;" id="is_land_transfer"></b>
                      </div>
                  </div>
              </div>
              <!-- <div>
                <h2>Land Tranfer History</h2>
                <table>
                  <thead>
                    <tr>
                      <th>
                        
                      </th>
                    </tr>
                  </thead>
                </table>

              </div> -->
            </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function viweland(id) {
    $.ajax({
          url: "<?php echo e(url('land/viewland/')); ?>" + '/' + id,
          method: "get",
          contentType: 'application/json',
          success: function (data) {
            console.log(data);
            if(data.Land_details.is_register==1)
            {
              var Register="Yes";
            }
            else
            {
              var Register="No";
            }
            $("#plot_no").text(data.Land_details.plot_no);
            $("#plot_name").text( data.Land_details.land_name);
            $("#plot_size").text( data.Land_details.plot_size);
            $("#area").text( data.Land_details.area);
            $("#sector").text( data.Land_details.sector);
            $("#block").text( data.Land_details.block);
            $("#address").text( data.Land_details.address1);
            $("#is_land_register").text(Register);
            $("#is_land_transfer").text( data.Land_details.is_transfer);
            // for(i=0;data.land_lease_details.length;i++)
            // {
            //   $("#land_transfer_history").append("<tr><td>"++)
            // }
            $('#view_land_details').modal('show');
          }
    });
  }
</script><?php /**PATH C:\xampp\htdocs\sandhu_tubes\resources\views/land/lands.blade.php ENDPATH**/ ?>