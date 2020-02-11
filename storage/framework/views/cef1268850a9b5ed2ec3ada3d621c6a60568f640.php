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
          <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> Organization Info&nbsp;&nbsp;/ &nbsp; 
            <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
            <li><a href="">Organization</a></li>
            <li class="active">View Organization</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body">
                <h4>Organization Information</h4>
                    <section style="left: inherit;">
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-3">
                            <p>Organization Name : <b style="color: #F0560A" id="c_name"><?php echo e($organizationdata->organization_name); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>City, State : <b style="color: #F0560A" id="c_mobile"><?php echo e($organizationdata->city); ?>, <?php echo e($organizationdata->state); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>CIN : <b style="color: #F0560A" id="c_email"><?php echo e($organizationdata->cin); ?></b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Revenue (in CR) : <b style="color: #F0560A" id="c_company"><?php echo e($organizationdata->revenue); ?></b></p>
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

<?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/organization/view_organization.blade.php ENDPATH**/ ?>