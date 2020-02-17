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
    @media  print {
        table th:last-child {display:none}  
        table td:last-child {display:none}
    }

    #to-print-area { display: none; }
    @media  print
    {
        #to-print-area { display: block; }
    }
    @media  print
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Reports</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(URL::to('home')); ?>">Reports</a></li>
                        <!-- <li class="active">location/area</li> -->
                    </ol>
                </div>
            </div>
            <hr class="new2">
            <form method="post" action="<?php echo e(url('genrate/report')); ?>" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="row" style="width: 100%; margin-left: 0px;">
                    <div class="col-xl-2">
                        <div class="form-group">
                            <label for="field-2" class="control-label">Process</label>
                            <select class="select2 form-control" onchange="get_cat_details(this);" name="procreportsreportsess" id="process" required>
                                <option value="">--- Select Type ---</option>
                                <option value="1">Input</option>
                                <option value="0">Output</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="form-group">
                            <label for="field-2" class="control-label">Item Type</label>
                            <select class="select2 form-control" name="category" id="category" required>
                                <option value="">---Select---</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <label for="field-2" class="control-label">Start Date</label>
                        <input type="text" name="start_date" class="form-control datepicker" required>
                    </div>
                    <div class="col-xl-2">
                        <label for="field-2" class="control-label">End Date</label>
                        <input type="text" name="end_date" class="form-control datepicker" required>
                    </div>
                    <div class="col-xl-2">
                        <button type="submit" class="btn btn-primary" style="margin-top: 30px;"> <i class="md md-add-circle-outline"></i> Genrate</button>
                        <a href="<?php echo e(url('reports')); ?>"><button type="button" class="btn btn-primary" style="margin-top: 30px;"> <i class="md md-add-circle-outline"></i> Undo</button></a>
                    </div>
                </div>
            </form>
            <hr class="new2">
            <?php if(@$itemsdetails): ?>
                <div class="card card-border card-info">
                    <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);padding: 0px !important;">
                        <div class="card-body">
                            <div class="row"><br><br><br>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div id="printable-area" class="row">
                                        <div class="col-md-6">
                                            <table class="table table-striped table-bordered dt-responsive" id="datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background: #393e4a59;">
                                                    <tr><th colspan="4">Received Items Duration <?php echo e(date('j M, Y ',strtotime(@$start_date))); ?> To <?php echo e(date('j M, Y ',strtotime(@$end_date))); ?></th></tr>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Item Type</th>
                                                        <th>Quantity</th>
                                                        <th>Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = @$itemsdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kee => $value_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($value_item->item_id); ?></td>
                                                                <td><?php echo e($value_item->item_type_id); ?></td>
                                                                <td class="rig"><?php echo e($value_item->item_quantity); ?> <?php echo e($value_item->item_uom_id); ?></td>
                                                                <td><?php echo e($value_item->item_location_id); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <tr><th colspan="4" style="text-align: left;">Total Item : <?php echo e(@$totalItem); ?></th> </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6" style="padding-top: 8px;">
                                            <table class="table table-striped table-bordered dt-responsive" id="datatable-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background: #393e4a59;">
                                                    <tr><th colspan="4">Issue Items Duration <?php echo e(date('j M, Y ',strtotime(@$start_date))); ?> To <?php echo e(date('j M, Y ',strtotime(@$end_date))); ?></th></tr>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Item Type</th>
                                                        <th>Quantity</th>
                                                        <th>Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = @$itemsdetailsOut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kee => $value_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($value_item->item_id); ?></td>
                                                                <td><?php echo e($value_item->item_type_id); ?></td>
                                                                <td class="rig"><?php echo e($value_item->item_quantity); ?> <?php echo e($value_item->item_uom_id); ?></td>
                                                                <td><?php echo e($value_item->item_location_id); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <tr><th colspan="4" style="text-align: left;">Total Item : <?php echo e(@$totalOutItem); ?></th> </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-striped table-bordered dt-responsive" id="datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background: #393e4a59;">
                                                    <tr><th colspan="12">Manufacturing Items Duration <?php echo e(date('j M, Y ',strtotime(@$start_date))); ?> To <?php echo e(date('j M, Y ',strtotime(@$end_date))); ?></th></tr>
                                                    <tr>
                                                        <th>Item Type</th>
                                                        <th>Item Name</th>
                                                        <th>Total Quantity</th>
                                                        <th>Rest Quantity</th>
                                                        <th>Input Quantity</th>
                                                        <th>Finished Goods</th>
                                                        <th>Output Quantity</th>
                                                        <th>Metal Scrap</th>
                                                        <th>Output Quantity</th>
                                                        <th>Invisible Loss</th>
                                                        <th>Output Quantity</th>
                                                        <th>Created Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = @$manufacture_items_final; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kee => $value_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($value_menu->items_type); ?></td>
                                                                <td><?php echo e($value_menu->input_items_id); ?></td>
                                                                <td class="rig"><?php echo e($value_menu->total_quantity); ?> <?php echo e($value_menu->main_uom); ?></td>
                                                                <td class="rig"><?php echo e($value_menu->rest_quantity); ?> <?php echo e($value_menu->main_uom); ?></td>
                                                                <td class="rig"><?php echo e($value_menu->input_items_quantity); ?> <?php echo e($value_menu->input_items_uom); ?></td>

                                                                <td><?php echo e($value_menu->finished_goods_name); ?></td>
                                                                <td class="rig"><?php echo e($value_menu->finished_goods_quantity); ?> <?php echo e($value_menu->finished_goods_uom); ?></td>

                                                                <td><?php echo e($value_menu->metal_scrap_name); ?></td>
                                                                <td class="rig"><?php echo e($value_menu->metal_scrap_quantity); ?> <?php echo e($value_menu->metal_scrap_uom); ?></td>

                                                                <td><?php echo e($value_menu->invisible_loss_name); ?></td>
                                                                <td class="rig"><?php echo e($value_menu->invisible_loss_quantity); ?> <?php echo e($value_menu->invisible_loss_uom); ?></td>
                                                                <td><?php echo e(date('j M, Y ',strtotime($value_menu->created_at))); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-striped table-bordered dt-responsive" id="datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background: #393e4a59;">
                                                    <tr><th colspan="4">Items Opening And Closing Stock <?php echo e(date('j M, Y ',strtotime(@$start_date))); ?> To <?php echo e(date('j M, Y ',strtotime(@$end_date))); ?></th></tr>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Item Type</th>
                                                        <th>Opening Stock</th>
                                                        <th>Closing Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = @$inv_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php 
                                                        $itemName = DB::table('item')->where('id',$value->item_name)->value('items_name');
                                                        $itemtypeName = DB::table('category')->where('id',$value->item_category_id)->value('category_name');
                                                    ?>
                                                        <tr>
                                                            <td><?php echo e($itemName); ?></td>
                                                            <td><?php echo e($itemtypeName); ?></td>
                                                            <?php if($value->ClosingStock == 0): ?>
                                                            <td class="rig"><?php echo e($value->quantity); ?></td>
                                                            <?php else: ?>
                                                            <td class="rig"><?php echo e($value->ClosingStock); ?></td>
                                                            <?php endif; ?>

                                                            <?php if($value->openingStock == 0): ?>
                                                            <td class="rig"><?php echo e($value->quantity); ?></td>
                                                            <?php else: ?>
                                                            <td class="rig"><?php echo e($value->openingStock); ?></td>
                                                            <?php endif; ?>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <tr><th colspan="4" style="text-align: left;">Total Item : <?php echo e(count(@$inv_item)); ?></th> </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    function editRecords(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "<?php echo e(url('org/org_contact/edit/')); ?>" + '/' + id,
            method: "POST",
            contentType: 'application/json',
            success: function (data) {
                // console.log(data);

            }
        });
    }

</script>
<script>
    $(function () {
        $(".datepicker").datepicker();
    });
</script>
<script>
    function get_cat_details(e) {
        var process_id = $(e).val();
        // alert(process_id);
        $.ajax({
            url: "<?php echo e(url('report/get_cat')); ?>" + '/' + process_id,
            method: "get",
            contentType: 'application/json',
            success: function (data) {
                $("#category").html("");
                var to_append = "";
                if (data != null) {
                    to_append +=`<option value="">---Select---</option>`;
                    for (i = 0; i < data.length; i++) {
                        to_append += `<option value="` + data[i].id + `">` + data[i].category_name + `</option>`;
                    }
                }
                $("#category").append(to_append);
            }
        });
    }
</script><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/reports/report.blade.php ENDPATH**/ ?>