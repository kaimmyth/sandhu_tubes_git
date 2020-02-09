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
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Organization Info <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
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
                            <p>Organization Name : <b style="color: #F0560A" id="c_name">{{$organizationdata->organization_name}}</b></p>
                          </div>
                          <div class="col-md-3">
                            <p>City, State : <b style="color: #F0560A" id="c_mobile">{{$organizationdata->city}}, {{$organizationdata->state}}</b></p>
                          </div>
                          <div class="col-md-3">
                            <p>CIN : <b style="color: #F0560A" id="c_email">{{$organizationdata->cin}}</b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Revenue (in CR) : <b style="color: #F0560A" id="c_company">{{$organizationdata->revenue}}</b></p>
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

