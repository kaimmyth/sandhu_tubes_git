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
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Shipment Info <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
            <li><a href="">Shipment</a></li>
            <li class="active">View Shipment</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body">
                <h4>Shipment Details</h4>
                    <section style="left: inherit;">
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-3">
                            <p>Shipment Type : <b style="color: #F0560A" id="c_name"><?php echo e($shipmentdata->shipment_type); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Supplier Name : <b style="color: #F0560A" id="c_mobile"><?php echo e($shipmentdata->supplier_name); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Status : <b style="color: #F0560A" id="c_email"><?php echo e($shipmentdata->status); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Shipped Date : <b style="color: #F0560A" id="c_company"><?php echo e($shipmentdata->created_date); ?></b></p>
                          </div>
                          
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <?php if($shipmentdata->shipment_type == 'IN'): ?>
                            <h4>ITEMS RECEIVED</h4>
                            <?php else: ?>
                            <h4>ITEMS SHIPPED</h4>
                            <?php endif; ?>
                          </div>
                          <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead style="background: #b6e9ff;">
                                <tr>
                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($inv_itemdata): ?>
                                <?php $__currentLoopData = $inv_itemdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($val->id); ?></td>
                                    <td><?php echo e($val->item_name); ?></td>
                                    <td><?php echo e($val->quantity); ?></td>
                                    <?php if($locationiddata != null): ?>
                                    <td><?php echo e($locationiddata[$key]->location_name); ?></td>
                                    <?php else: ?>
                                    <td>NA</td>
                                    <?php endif; ?>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
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
  </div>

<?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/shipment/view_shipment.blade.php ENDPATH**/ ?>