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
  
    @media screen and (max-width: 1366px) {
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
              <li><a href="{{ URL::to('home') }}">Home</a></li>
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
                          <div class="row">
                            
                            
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
  
  