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
          <h4 class="pull-left page-title">Shipment Info <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
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
                            <p>Shipment Type : <b style="color: #F0560A" id="c_name">{{$shipmentdata->shipment_type}}</b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Supplier Name : <b style="color: #F0560A" id="c_mobile">{{$shipmentdata->supplier_name}}</b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Status : <b style="color: #F0560A" id="c_email">{{$shipmentdata->status}}</b></p>
                          </div>
                          <div class="col-md-3">
                            <p>Shipped Date : <b style="color: #F0560A" id="c_company">{{$shipmentdata->created_date}}</b></p>
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

