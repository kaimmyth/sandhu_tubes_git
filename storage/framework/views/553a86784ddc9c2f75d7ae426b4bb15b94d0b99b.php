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
          <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Inventory Item Info&nbsp;&nbsp;/ &nbsp; <a href="<?php echo e(url('inv_item/listing')); ?>">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
            <li><a href="">Item</a></li>
            <li class="active">View Inventory Item</li>
          </ol>
        </div>
      </div>
      <hr class="new2">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body">
                <h4>Inventory Item Information</h4>
                    <section style="left: inherit;">
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-3">
                            <p>Item Name : <b style="color: #F0560A" id="c_name"><?php echo e($inv_itemdata->item_name); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Item Code : <b style="color: #F0560A" id="c_mobile"><?php echo e($inv_itemdata->item_code); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Item Category : <b style="color: #F0560A" id="c_email"><?php echo e($inv_itemdata->item_category_id); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Quantity : <b style="color: #F0560A" id="c_company"><?php echo e($inv_itemdata->quantity); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Unit of M : <b><?php echo e($inv_itemdata->uom_id); ?></b></p>
                          </div>
                          
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

<?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/inventory/view_inv_item.blade.php ENDPATH**/ ?>