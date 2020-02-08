<style>
    .card .card-header {
        padding: 1px 20px;
        border: none;
    }
    .form-control {
    -moz-border-radius: 2px;
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 2px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    border-radius: 2px;
    border: 1px solid #b3b1b1;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: rgba(0, 0, 0, 0.6);
    font-size: 14px;
    box-shadow: 0px 0px #ffffff;
    width: 100%;
}

</style>
<div class="content-page">
    <div class="content">
        <!-- Start content -->
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Shipment Receive</h4>
                   
                </div>
            </div>
            <hr class="new2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <div class="card-body">
							
							
							
							
							<div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                  <thead>
                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 144px;" aria-label="Phone: activate to sort column ascending">Shipment No: </th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 319px;" aria-label="Contract Start Date: activate to sort column ascending">Shipment Type: IN </th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 308px;" aria-label="Contract End Date: activate to sort column ascending">Shipped Date</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 145px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                  </thead>
                  <tbody>
                                        
                                     </tbody>
                </table></div>
							
							
                                
								<div class="row">
								<div class="col-md-12">
								<h4>SHIP-FROM LOCATION:</h4>
								</div>
								
								<div class="col-md-3">
								
								
								<div class="form-group">
                                <label for="field-2" class="control-label">Address:</label>
                                <select class="form-control" name="state" id="state" required="" aria-required="true">
                                  <option value=""></option>
                                  <option value="Jamshedpur">Jamshedpur, Jharkhand 832108</option>
                                </select>
                              </div>
								
								</div>
								<div class="col-md-3">
								
								<div class="form-group">
                                <label for="field-2" class="control-label">Address:</label>
                                <select class="form-control" name="state" id="state" required="" aria-required="true">
                                  <option value=""></option>
                                  <option value="Jamshedpur">Jamshedpur, Jharkhand 832108</option>
                                </select>
                              </div>
								</div>
								<div class="col-md-3">
								
								<div class="form-group">
                                <label for="field-2" class="control-label">State: PIN:</label>
                                <select class="form-control" name="state" id="state" required="" aria-required="true">
                                  <option value=""></option>
                                  <option value="Jamshedpur">832108</option>
                                </select>
                              </div>
								</div>
								
								
								
                                </div>
								
								
								
								
								
								<div class="row">
								<div class="col-md-12">
								<h4>VEHICLE</h4>
								</div>
								
								<div class="col-md-3">
								
								
								<div class="form-group">
                                <label for="field-2" class="control-label">Address:</label>
                                <select class="form-control" name="state" id="state" required="" aria-required="true">
                                  <option value=""></option>
                                  <option value="Jamshedpur">Jamshedpur, Jharkhand 832108</option>
                                </select>
                              </div>
								
								</div>
								<div class="col-md-3">
								
								<div class="form-group">
                                <label for="field-2" class="control-label">Address:</label>
                                <select class="form-control" name="state" id="state" required="" aria-required="true">
                                  <option value=""></option>
                                  <option value="Jamshedpur">Jamshedpur, Jharkhand 832108</option>
                                </select>
                              </div>
								</div>
								<div class="col-md-3">
								
								<div class="form-group">
                                <label for="field-2" class="control-label">State: PIN:</label>
                                <select class="form-control" name="state" id="state" required="" aria-required="true">
                                  <option value=""></option>
                                  <option value="Jamshedpur">832108</option>
                                </select>
                              </div>
								</div>
								
								
								
                                </div>
								
								
								
								
								
								
								
								
								
								
                                <input type="submit" name="creat_pcc" class="btn btn-primary" >
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                </div> <!-- End Row -->
            </div> <!-- card -->
        </div> <!-- container -->
    </div> <!-- content -->
    <script>
        $( function() {
          $( ".datepicker" ).datepicker();
        } );
    </script>
     <script>
        $(document).ready(function() {
          $(".delete").hide();
          j=0;
          //when the Add Field button is clicked
          $("#adds").click(function(e) {
            j++;
            indete=j+1;
            // alert(i);
            var data = `   
            <tr>
                <th>`+indete+`</th>
                <th>
                <select class="form-control" name="pcc_acction[]">
                    <?php $__currentLoopData = $pcc_master; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value['id']); ?>"><?php echo e($value['entry_pcc_name']); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </th>
                <th> 
                    <select class="form-control" name="pcc_enitity[]">
                        <?php $__currentLoopData = $entity_master; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value['id']); ?>"><?php echo e($value['entity_name']); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </th>
                <th style="height:50px">
                    <input type="text" name="pcc_Entity_search[]"  onkeyup="Select_pcc_enitity(this)"  placeholder="Search Entity Name" class="form-control" >
                    <div class="land_list"></div>
                </th>
                <th>
                    <input type="text" class="form-control" name="pcc_Entity_name[]" style="width: 80%;" >
                    <input type="hidden" name="pcc_entity_id[]" >

                </th>
                <th>
                    <input type="text" class="form-control" name="pcc_comment[]" style="width: 80%;" >
                </th>
                <td><button type="button" class="ibtnDel btn btn-md btn-danger delete-button-material"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</button></td>
            </tr>`;
        $('#item').append(data);
            datepicker_fun();
    
          });
         
        });
      </script>
         <script>
            $(document).ready(function(){
              $( "#item" ).delegate( ".delete-button-material", "click", function() {
                $(this).closest("tr").remove();
              });
            });
          </script>
          <script>
        //   function Select_pcc_enitity(e)
        //   {
        //       //e => this
        //       alert("inside");
        //       var tr_object = $(e).closest("tr");
        //       pcc_id=$("input[name='pcc_enitity[]']");
        //       enitity_id=$(e).val();
        //       $("select[name='pcc_Entity_search[]']").html('<option value="">-Select-</option>');
        //       $.ajax({
        //           url: "<?php echo e(url('pcc/entity_search')); ?>" + '/' + enitity_id,
        //           type: "GET",
        //           success: function(data) {
        //               console.log(data);
        //                 $(tr_object).find("select[name='pcc_Entity_search[e]']").append(data);
        //           }
        //         });
        //     //   $(tr_object).find("input[name='pcc_Entity_name[]']").val("yes");

        //   }
          </script>
          <script>
              function Select_pcc_enitity(e)
              {
                var query = $(e).val();
                var tr_object = $(e).closest("tr");
                enitity_id=$(tr_object).find("select[name='pcc_enitity[]']").val();
                if(enitity_id==4)
                {
                    if (query != '') { 
                        $.ajax({
                            url: "<?php echo e(url('pcc/searchLand')); ?>" + '/' + query,
                            type:"GET",
                            success:function (data) {
                                console.log(data);
                                // $(tr_object).children('.land_list').html(data);
                                $(tr_object).find(".land_list").html(data);
                            }
                        });
                    }else{
                        $(tr_object).find('.land_list').html(""); 
                    }
                }else if(enitity_id==5)
                {
                    if (query != '') { 
                    $.ajax({
                    url: "<?php echo e(url('pcc/searchcompany')); ?>" + '/' + query,
                    type:"GET",
                    success:function (data) {
                        $(tr_object).find('.land_list').html(data);
                    }
                    });
                }else{
                    $(tr_object).find('.land_list').html(""); 
                }
            }
            else{
                $(tr_object).find('.land_list').html("Enitity No Found")
            }
        }

         </script>
        <script>
        function addland(id,e) {  
            var tr_object = $(e).parents("tr");
            $.ajax({
            url: "<?php echo e(url('pcc/getland')); ?>" + '/' + id,
            method: "get",
            success: function(data) {
                $(tr_object[1]).find("input[name='pcc_Entity_name[]']").val(data.land_name);
                $(tr_object[1]).find("input[name='pcc_entity_id[]']").val(data.id);
            }
            });
        }
        function addcustomer(id,e) { 
            var tr_object = $(e).parents("tr");
            $.ajax({
            url: "<?php echo e(url('pcc/getcompany')); ?>" + '/' + id,
            method: "get",
            success: function(data) {
                $(tr_object[1]).find("input[name='pcc_Entity_name[]']").val(data.company);
                $(tr_object[1]).find("input[name='pcc_entity_id[]']").val(data.id);
           
            }
            });
  }
        </script>
         <?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/pcc/pcc_form.blade.php ENDPATH**/ ?>