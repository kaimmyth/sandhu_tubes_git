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
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Shipment Info&nbsp;&nbsp;/ &nbsp; <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="">Shipment</a></li>
            <li class="active">View Shipment</li>
          </ol>
        </div>
      </div>
      <hr class="new2">
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
                        <div class="row">
                          <div class="col-md-12">
                            @if($shipmentdata->shipment_type == 'IN')
                            <h4>ITEMS RECEIVED</h4>
                            @else
                            <h4>ITEMS SHIPPED</h4>
                            @endif
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
                                @if($inv_itemdata)
                                @foreach($inv_itemdata as $key=>$val)
                                <tr>
                                    <td class="rig">{{$val->id}}</td>
                                    <td>{{$val->item_name}}</td>
                                    <td class="rig">{{$val->quantity}}</td>
                                    @if($locationiddata != null)
                                    <td>{{$locationiddata[$key]->location_name}}</td>
                                    @else
                                    <td>NA</td>
                                    @endif
                                    
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
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

