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
    <div class="content">
        <!-- Start content -->
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Shipment List</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(URL::to('home')); ?>">List</a></li>
                        <li class="active">Shipment List</li>
                    </ol>
                </div>
            </div>
            <hr class="new2">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <div class="card-body">
                                <div class="row"><br><br><br>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <form action="<?php echo e(url('shipment/listing')); ?>" method="post" id="FormValidation" aria-required="true" enctype="multipart/form-data">
                                            <div class="row">
                                                <?php echo csrf_field(); ?>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="shipment_type" id="shipment_type">
                                                        <?php if($type != null || $type != ""): ?>
                                                        <option value="3" <?php if($type==3 ?? '' ): ?><?php echo e('selected'); ?> <?php endif; ?>>--Select--</option>
                                                        <option value="2" <?php if($type==2 ?? '' ): ?><?php echo e('selected'); ?> <?php endif; ?>>All</option>
                                                        <option value="1" <?php if($type==1 ?? '' ): ?><?php echo e('selected'); ?> <?php endif; ?>>IN</option>
                                                        <option value="0" <?php if($type==0 ?? '' ): ?><?php echo e('selected'); ?> <?php endif; ?>>OUT</option>
                                                        <?php else: ?>
                                                        <option value="3">--Select--</option>
                                                        <option value="2">All</option>
                                                        <option value="1">IN</option>
                                                        <option value="0">OUT</option>
                                        
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light m-b-5" style="margin-top: 3px;margin-left: -12px;">Search</button>
                                                    <a href="<?php echo e(url('shipment/listing')); ?>"><button type="button" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5" style="margin-top: 3px"><i class="fas fa-sync-alt"></i> Refresh</button></a>
                                                </div>
                                            </div>
                                        </form>
                                        <?php if(Auth::user()->id!=1): ?>
                                            <?php if(@$module_permission['is_add']=='yes'): ?>
                                            <a href="<?php echo e(url('shipment/add/0')); ?>"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Shipment Out</button></a>
                                            <a href="<?php echo e(url('shipment/add/1')); ?>"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Shipment Receive</button></a><br>
                                            <?php endif; ?>
                                        <?php else: ?>
                                        <a href="<?php echo e(url('shipment/add/0')); ?>"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Shipment Out</button></a>
                                        <a href="<?php echo e(url('shipment/add/1')); ?>"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Shipment Receive</button></a><br>
                                        <?php endif; ?>
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="background: #b6e9ff;">
                                                <tr>
                                                    <th style="width: 85px;">Shipment No</th>
                                                    <th>Shipment Type</th>
                                                    <th>Supplier Name</th>
                                                    <th>Shipped Date</th>
                                                    <th>Status</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($statusdata): ?>
                                                <?php $__currentLoopData = $statusdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="rig"><?php echo e($key + 1); ?></td>
                                                    <?php if($val->shipment_type == 1): ?>
                                                    <td>IN</td>
                                                    <?php else: ?>
                                                    <td>OUT</td>
                                                    <?php endif; ?>
                                                    <td><?php echo e($val->supplier_name); ?></td>
                                                    <td><?php echo e(date('j M, Y ',strtotime($val->shipping_date))); ?></td>
                                                    <?php if($val->status == 1): ?>
                                                    <td>
                                                        <p class="mb-0">
                                                            <span class="badge badge-success">Active</span>
                                                        </p>
                                                    </td>
                                                    <?php else: ?>
                                                    <td>
                                                        <p class="mb-0">
                                                            <span class="badge badge-danger">InActive</span>
                                                        </p>
                                                    </td>
                                                    <?php endif; ?>
                                                    <td class="actions">
                                                        <?php if(Auth::user()->id!=1): ?>
                                                            <?php if(@$module_permission['is_read']=='yes'): ?>
                                                            <a href="<?php echo e(url('shipment/showView/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye" style="color:green;"></i></a>
                                                            <?php endif; ?>
                                                            <?php if(@$module_permission['is_edit']=='yes'): ?>
                                                            <a href="<?php echo e(url('shipment/editView/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                                                            <?php endif; ?>
                                                            <?php if(@$module_permission['is_delete']=='yes'): ?>
                                                            <a href="<?php echo e(url('shipment/deletedata/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" style="color:#f12409;"></i></a>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                        <a href="<?php echo e(url('shipment/showView/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye" style="color:green;"></i></a>
                                                        <a href="<?php echo e(url('shipment/editView/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                                                        <a href="<?php echo e(url('shipment/deletedata/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" style="color:#f12409;"></i></a>
                                                        <?php endif; ?>
                                                        
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div> <!-- card -->
        </div> <!-- container -->
    </div> <!-- content -->
</div><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/shipment/shipment_list.blade.php ENDPATH**/ ?>