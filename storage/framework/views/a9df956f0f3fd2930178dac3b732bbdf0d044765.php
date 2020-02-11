<style>
    .table td{
        padding: 0.50rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        font-size: 13px;
        color: black;
        padding-left: 8px;
        
    }
    .table td {
        padding: 0.50rem;
        vertical-align: top;
        border-top: 1px dashed #747474;
        font-size: 13px;
        color: black;
        padding-left: 8px;
        background: #f4f4f4;
}
    </style>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Edit Users</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(URL::to('home')); ?>">Master</a></li>
                        <li class="active">Edit User</li>
                    </ol>
                </div>
            </div>
            <hr class="new2">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo e(url('update/users')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                            <div class="card card-border card-info" style="border-top: 2px solid #018eff;">
                                <div class="card-body" style="background-image: linear-gradient(#ebf9ff, white);">
                                   <input type="hidden" value="<?php echo e($toReturn['data']->id); ?>" name="user_id" >
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo e(@$toReturn['data']->name); ?>" id="" placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" id="" value="<?php echo e(@$toReturn['data']->email); ?>" name="email" placeholder="" required>
                                            </div>
                                    </div> <!-- col-->

                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" id="" value="<?php echo e(@$toReturn['data']->username); ?>" name="user_name" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" id=""  name="password" placeholder="" required>
                                        </div>
                                </div> <!-- col-->

                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="number" class="form-control" id="" name="phone" value="<?php echo e(@$toReturn['data']->phone); ?>" min="1" placeholder="" >
                                    </div>

                                    <div style="display: flex;">
                                        <div class="form-group">
                                            <label for="">Designation</label>
                                            <input type="text" class="form-control" id="" name="designation" value="<?php echo e(@$toReturn['data']->designation); ?>" required placeholder="Designation" >
                                        </div>
                                        <div class="form-group" style='margin-left: 1em;'><br>
                                        <label for="">Is Active</label><br>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1" value="1" <?php if($toReturn['data']->status==1): ?> <?php echo e('checked'); ?>  <?php endif; ?> name="status" >
                                            <label for="inlineRadio1"> Active</label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="0" <?php if($toReturn['data']->status==0): ?> <?php echo e('checked'); ?> <?php endif; ?> name="status">
                                            <label for="inlineRadio2">Inactive</label>
                                        </div>
                                    </div>
                                    </div>
                            </div> <!-- col-->
                                </div> <!-- End row -->

                                <table class="table table-striped add-edit-table dt-responsive nowrap" id="datatable-editable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead style='background: #d0f0ff;'>
                                    <tr>
                                        <th>Module Name</th>
                                        <th>Read</th>
                                        <th>Add</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $toReturn['module']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <tr> 
                                        <?php @$module_permission=DB::table('user_permission')->where('permission_value',$value['ID'])->first();
                                        ?>

                                    <td><?php echo e(@$value['module_name']); ?><input id="text" name="module[]" value="<?php echo e(@$value['ID']); ?>" type="hidden"> <input type="hidden" name="module_permission_id[]" value="<?php echo e(@$module_permission->ID); ?>" > </td>
                                    <td><input  name="read<?php echo e(@$value['ID']); ?>"  value="read"  <?php if(@$module_permission->is_read=='yes'): ?> checked='checked'  <?php endif; ?>   type="checkbox" ></td>
                                    <td><input  name="add<?php echo e(@$value['ID']); ?>"  value="add"  <?php if(@$module_permission->is_add=='yes'): ?> checked='checked'  <?php endif; ?>   type="checkbox"></td>
                                    <td><input  name="edit<?php echo e(@$value['ID']); ?>"   value="edit" <?php if(@$module_permission->is_edit=='yes'): ?> checked='checked'  <?php endif; ?>   type="checkbox"></td>
                                    <td><input  name="delete<?php echo e(@$value['ID']); ?>}" value="delete" <?php if(@$module_permission->is_delete=='yes'): ?> checked='checked'  <?php endif; ?>   type="checkbox"></td>
                                    <tr>
                                    <tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Update</button>
                                </div>
                            </div><!-- card-body -->
                        </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/master/edit_user.blade.php ENDPATH**/ ?>