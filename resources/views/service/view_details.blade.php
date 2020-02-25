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
          <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;View Service Details&nbsp;&nbsp;/ &nbsp; <a href="{{URL::to('serviceManu/list')}}">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="{{url('serviceManu/list')}}">Service</a></li>
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

                <h4>Service Details</h4>
                <section style="left: inherit;">
                  <div class="col-md-10">
                    <h4>Input details</h4>
                    <div class="row">
                      <div class="col-md-3">
                        @php
                        $input_items_uom=DB::table('uom')->where('id',$service_details->input_uom_id)->value('uom_name');
                        $get_item_name = DB::table('inv_item')->where('id','$service_details->inv_item_id')->value('item_name');
                        @endphp
                        <p>Item Name : <b style="color: #F0560A">{{$get_item_name}}</b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A">{{$service_details->input_quantity}} {{$input_items_uom}}</b></p>
                      </div>
                      @php
                      $input_items_details=DB::table('inv_item')->where('item_name',$service_details->inv_item_id)->first();
                      @endphp
                      @if(@$input_items_details->serial_no!="")
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A">{{$input_items_details->serial_no}}</b></p>
                      </div>
                      @endif
                      @if(@$input_items_details->batch_no!="")
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A">{{$input_items_details->batch_no}}</b></p>
                      </div>
                      @endif
                    </div>
                    <h4>Finished Goods details</h4>
                    @php
                    $finished_goods_name=DB::table('finished_goods_type')->where('id',$service_details->finished_good_id)->value('finished_goods_type_name');
                    $finished_goods_uom=DB::table('uom')->where('id',$service_details->finished_good_uom)->value('uom_name');
                    @endphp
                    <div class="row">
                      
                      <div class="col-md-3">
                        <p>Item Type : <b style="color: #F0560A">{{$finished_goods_name}}</b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Name : <b style="color: #F0560A">{{$service_details->finished_good_name}}</b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A">{{$service_details->finished_good_quantity}} {{$finished_goods_uom}}</b></p>
                      </div>
                      @php
                      $finished_goods_details=DB::table('inv_item')->where('item_name',$service_details->finished_good_id)->first();
                      @endphp
                      @if(@$finished_goods_details->serial_no!="")
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A">{{$finished_goods_details->serial_no}}</b></p>
                      </div>
                      @endif
                      @if(@$finished_goods_details->batch_no!="")
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A">{{$finished_goods_details->batch_no}}</b></p>
                      </div>
                      @endif
                    </div>
                    <h4>Metal Scrap details</h4>
                    @php
                    $metal_scrap_name=DB::table('metal_scrap')->where('id',$service_details->scrap)->value('metal_scrap_name');
                    $metal_scrap_uom=DB::table('uom')->where('id',$service_details->scrap_uom)->value('uom_name');
                    @endphp
                    <div class="row">
                      <div class="col-md-3">
                        <p>Item Type : <b style="color: #F0560A">{{$metal_scrap_name}}</b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Name : <b style="color: #F0560A">{{$service_details->metal_scrap_name}}</b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A">{{$service_details->scrap_quantity}} {{$metal_scrap_uom}}</b></p>
                      </div>
                      @php
                      $metal_scrap_details=DB::table('inv_item')->where('item_name',$service_details->scrap)->first();
                      @endphp
                      @if(@$metal_scrap_details->serial_no!="")
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A">{{$metal_scrap_details->serial_no}}</b></p>
                      </div>
                      @endif
                      @if(@$metal_scrap_details->batch_no!="")
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A">{{$metal_scrap_details->batch_no}}</b></p>
                      </div>
                      @endif
                    </div>
                    <h4>Invisible Loss</h4>
                    @php
                    $invisible_loss_name=DB::table('invisible_loss_percentage')->where('id',$service_details->invisible_loss)->value('invisible_loss_percentage');
                    $invisible_loss_uom=DB::table('uom')->where('id',$service_details->invisible_uom)->value('uom_name');
                    @endphp
                    <div class="row">
                      <div class="col-md-3">
                        <p>Item Type : <b style="color: #F0560A">{{$invisible_loss_name}}</b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Name : <b style="color: #F0560A">{{$service_details->invisible_loss_name}}</b></p>
                      </div>
                      <div class="col-md-3">
                        <p>Item Quanitity : <b style="color: #F0560A">{{$service_details->invisible_quantity}} {{$invisible_loss_uom}}</b></p>
                      </div>
                      @php
                      $invisible_loss_details=DB::table('inv_item')->where('item_name',$service_details->invisible_loss)->first();
                      @endphp
                      @if(@$invisible_loss_details->serial_no!="")
                      <div class="col-md-3">
                        <p>Serial No:-<b style="color: #F0560A">{{$invisible_loss_details->serial_no}}</b></p>
                      </div>
                      @endif
                      @if(@$invisible_loss_details->batch_no!="")
                      <div class="col-md-3">
                        <p>Batch No:-<b style="color: #F0560A">{{$invisible_loss_details->batch_no}}</b></p>
                      </div>
                      @endif
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