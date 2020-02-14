<style type="text/css">
  .custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 0.1rem;
  }

  .f-padding {
    margin-bottom: 10px;
  }

  .justify-content-center {

    -ms-flex-pack: center !important;

    justify-content: inherit !important;

  }

  @media  screen and (max-width: 1366px) {
    .wizard>.steps>ul>li {
      width: 16% !important;
      font-size: 11px !important;
    }
  }

  .wizard,
  .tabcontrol {
    display: block;
    width: 100%;
    height: auto !important;
    overflow: scroll;
  }

  .wizard>.steps>ul>li {
    width: 16%;
  }

  .wizard>.content {
    background: #ffffff;
    min-height: 500px !important;
    padding: 20px;
  }

  .side {
    margin-left: 8px;
  }
</style>

<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;View Manufacturing Details&nbsp;&nbsp;/ &nbsp; <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
            <li><a href="">Manufacturing</a></li>
            <li class="active">View </li>
          </ol>
        </div>
      </div>
      <hr class="new2">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body">

                <h4>Manufacturing Details</h4>
                <section style="left: inherit;">
                  <div class="col-md-10">
                    <h4>Input details</h4>
                    <div class="row">
                      <div class="col-md-3">

                        <?php
                        $input_item_name=DB::table('inv_item')->where('id',$manufacturing_details->input_items_id)->value('item_name');
                        $input_items_location=DB::table('inventory_location')->where('id',$manufacturing_details->input_items_location)->value('location_name');
                        $input_items_uom=DB::table('uom')->where('id',$manufacturing_details->input_items_uom)->value('uom_name');
                        ?>
                        <p>Item Name : <b style="color: #F0560A"><?php echo e($input_item_name); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A"><?php echo e($manufacturing_details->input_items_quantity); ?> <?php echo e($input_items_uom); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Location : <b style="color: #F0560A"><?php echo e($input_items_location); ?></b></p>
                      </div>
                      <?php
                      $input_items_details=DB::table('inv_item')->where('id',$manufacturing_details->input_items_id)->first();
                      ?>
                      <?php if(@$input_items_details->serial_no!=""): ?>
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A"><?php echo e($input_items_details->serial_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                      <?php if(@$input_items_details->batch_no!=""): ?>
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A"><?php echo e($input_items_details->batch_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                    </div>
                    <h4>Finished Goods details</h4>
                    <?php
                    $finished_goods_name=DB::table('inv_item')->where('id',$manufacturing_details->finished_goods_name)->value('item_name');
                    $finished_goods_location=DB::table('inventory_location')->where('id',$manufacturing_details->finished_goods_location)->value('location_name');
                    $finished_goods_uom=DB::table('uom')->where('id',$manufacturing_details->finished_goods_uom)->value('uom_name');
                    ?>
                    <div class="row">
                      <div class="col-md-3">
                        <p>Item Name : <b style="color: #F0560A"><?php echo e($finished_goods_name); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A"><?php echo e($manufacturing_details->finished_goods_quantity); ?> <?php echo e($finished_goods_uom); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Location : <b style="color: #F0560A"><?php echo e($finished_goods_location); ?></b></p>
                      </div>
                      <?php
                      $finished_goods_details=DB::table('inv_item')->where('id',$manufacturing_details->finished_goods_name)->first();
                      ?>
                      <?php if(@$finished_goods_details->serial_no!=""): ?>
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A"><?php echo e($finished_goods_details->serial_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                      <?php if(@$finished_goods_details->batch_no!=""): ?>
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A"><?php echo e($finished_goods_details->batch_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                    </div>
                    <h4>Metal Scrap details</h4>
                    <?php
                    $metal_scrap_name=DB::table('inv_item')->where('id',$manufacturing_details->metal_scrap_name)->value('item_name');
                    $metal_scrap_location=DB::table('inventory_location')->where('id',$manufacturing_details->metal_scrap_location)->value('location_name');
                    $metal_scrap_uom=DB::table('uom')->where('id',$manufacturing_details->metal_scrap_uom)->value('uom_name');
                    ?>
                    <div class="row">
                      <div class="col-md-3">
                        <p>Item Name : <b style="color: #F0560A"><?php echo e($metal_scrap_name); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A"><?php echo e($manufacturing_details->metal_scrap_quantity); ?> <?php echo e($metal_scrap_uom); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Location : <b style="color: #F0560A"><?php echo e($metal_scrap_location); ?></b></p>
                      </div>
                      <?php
                      $metal_scrap_details=DB::table('inv_item')->where('id',$manufacturing_details->metal_scrap_name)->first();
                      ?>
                      <?php if(@$metal_scrap_details->serial_no!=""): ?>
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A"><?php echo e($metal_scrap_details->serial_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                      <?php if(@$metal_scrap_details->batch_no!=""): ?>
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A"><?php echo e($metal_scrap_details->batch_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                    </div>
                    <h4>Invisible Loss</h4>
                    <?php
                    $invisible_loss_name=DB::table('inv_item')->where('id',$manufacturing_details->invisible_loss_name)->value('item_name');
                    $metal_scrap_location=DB::table('inventory_location')->where('id',$manufacturing_details->metal_scrap_location)->value('location_name');
                    $invisible_loss_uom=DB::table('uom')->where('id',$manufacturing_details->invisible_loss_uom)->value('uom_name');
                    ?>
                    <div class="row">
                      <div class="col-md-3">
                        <p>Item Name : <b style="color: #F0560A"><?php echo e($invisible_loss_name); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A"><?php echo e($manufacturing_details->invisible_loss_quantity); ?> <?php echo e($manufacturing_details->invisible_loss_uom); ?></b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Location : <b style="color: #F0560A"><?php echo e(@$invisible_loss_auto); ?></b></p>
                      </div>
                      <?php
                      $invisible_loss_details=DB::table('inv_item')->where('id',$manufacturing_details->invisible_loss_name)->first();
                      ?>
                      <?php if(@$invisible_loss_details->serial_no!=""): ?>
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A"><?php echo e($invisible_loss_details->serial_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                      <?php if(@$invisible_loss_details->batch_no!=""): ?>
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A"><?php echo e($invisible_loss_details->batch_no); ?></b></p>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <hr>
                </section>
              </div> <!-- End card-body -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/Manufacturing/view_details.blade.php ENDPATH**/ ?>