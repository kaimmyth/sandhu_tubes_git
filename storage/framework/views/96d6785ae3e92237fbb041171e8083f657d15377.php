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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Convertion</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(URL::to('home')); ?>">Convertion</a></li>
                        <!-- <li class="active">location/area</li> -->
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
                                        <th>From SI Unit</th>
                                        <th>To SI Unit</th>
                                        <th>Multiplication Value</th>
                                        <th>Status</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $result_convertion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="rig"><?php echo e($key+1); ?></td>
                                        <td><?php echo e($value['from_si_unit']); ?></td>
                                        <td><?php echo e($value['to_si_unit']); ?></td>
                                        <td class="rig"><?php echo e($value['multiplication_value']); ?></td>
                                        <?php if($value['status']== 1): ?>
                                        <td>
                                            <p class="mb-0">
                                                <span class="badge badge-success">Active</span>
                                            </p>
                                        </td>
                                        <?php else: ?>
                                        <td>
                                            <p class="mb-0">
                                                <span class="badge badge-danger">Inactive</span>
                                            </p>
                                        </td>
                                        <?php endif; ?>
                                        <td class="actions">
                                            <a href="javascript::void(0)" class="on-default edit-row" onclick="editRecords(<?php echo e($value['id']); ?>)" data-toggle="tooltip" data-modal="modal-12" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="<?php echo e(URL::to('convertion/destroy',$value['id'])); ?>" class="on-default remove-row" onclick="return confirm('Are you sure you want to delete this item?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fas fa-trash" style="color:red;"></i></a>
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
</div>
<!--- MODEL CALL--->
<div id="convertion-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0">Convertion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(url('convertion/add')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="ids" id="ids">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="from_si_unit" class="control-label">From SI Unit<font color="red">*</font></label>
                                <input type="text" id="from_si_unit" name="from_si_unit" class="form-control" required="" aria-required="true" placeholder="From SI Unit">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="to_si_unit" class="control-label">To SI Unit<font color="red">*</font></label>
                                <input type="text" id="to_si_unit" name="to_si_unit" class="form-control" required="" aria-required="true" placeholder="To SI Unit">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="multiplication_value" class="control-label">Multiplication Value<font color="red">*</font></label>
                                <input type="text" id="multiplication_value" name="multiplication_value" class="form-control" required="" aria-required="true" placeholder="Multiplication Value">
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
            url: "<?php echo e(url('convertion/edit/')); ?>" + '/' + id,
            method: "POST",
            contentType: 'application/json',
            success: function (data) {
                // console.log(data);
                document.getElementById("ids").value = data.id;
                document.getElementById("from_si_unit").value = data.from_si_unit;
                document.getElementById("to_si_unit").value = data.to_si_unit;
                document.getElementById("multiplication_value").value = data.multiplication_value;
                var val = data.status;
                if (val == 1) {
                    $('input[name=status][value=' + val + ']').prop('checked', true);
                } else {
                    $('input[name=status][value=' + val + ']').prop('checked', true);
                }
                document.getElementById("submitbtn").innerText = 'UPDATE';
                $('#convertion-model').modal('show');
            }
        });
    }


    function addRecords() {
        document.getElementById("ids").value = '';
        document.getElementById("from_si_unit").value = '';
        document.getElementById("to_si_unit").value = '';
        document.getElementById("multiplication_value").value = '';
        document.getElementById("submitbtn").innerText = 'Save';
        $('#convertion-model').modal('show');
    }

</script><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/master/convertion.blade.php ENDPATH**/ ?>