<style>
  hr.new2 {
    border-top: 1px dashed #000;
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
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Inventory Item</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(URL::to('home')); ?>">Item</a></li>
            <li class="active">Inventory Item</li>
          </ol>
        </div>
      </div>
      <hr class="new2">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-border card-info">
            <div class="card-header" style="background-image: linear-gradient(#e1f1f9, white);">
              <div class="card-body">
                <div class="row"><br><br><br>
                  <div class="col-md-12 col-sm-12 col-12">
                    <a href="<?php echo e(url('inv_item/add')); ?>"><button id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" style="float:right; margin-top: 19px;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead style="background: #b6e9ff;">
                        <tr>
                          <th>Item Code</th>
                          <th>Item Name</th>
                          <th>Item Category</th>
                          <th>Quantity</th>
                          <th>Created Date</th>
                          <th class="action">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($inv_itemdata): ?>
                        <?php $__currentLoopData = $inv_itemdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($val->item_code); ?></td>
                          <td><?php echo e($val->item_name); ?></td>
                          <td><?php echo e($val->item_category_id); ?></td>
                          <td class="rig"><?php echo e($val->quantity); ?> <?php echo e($val->uom_id); ?></td>
                          <td><?php echo e(date('j M, Y',strtotime($val->created_date))); ?></td>
                          <td class="actions">
                            <a href="<?php echo e(url('inv_item/showView/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye" style="color:green;"></i></a>
                            <a href="<?php echo e(url('inv_item/editView/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                            <a href="<?php echo e(url('inv_item/deletedata/'.$val->id)); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" style="color:red;"></i></a>
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
        </div>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/inventory/inv_item.blade.php ENDPATH**/ ?>