<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }

  .col-sm-12 {
    padding-left: 0px !important;
    padding-right: 8px !important;
  }

  @media screen and (max-width: 1366px) {
    .inp {
      width: 52% !important;
    }

    .inp2 {
      width: 59% !important;
    }

    .frs {
      width: 172px !important;
    }

    label {
      font-weight: 500;
      padding-right: 0px !important;
      font-family: "Roboto", sans-serif;
    }
  }
</style>
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

  @media screen and (max-width: 1366px) {
    .wizard>.steps>ul>li {
      width: 16% !important;
      font-size: 11px !important;
    }
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
  <div class="content">
    <!-- Start content -->
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;">&nbsp;<i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Manufacturing Actions&nbsp;&nbsp;/ &nbsp; <a href="{{URL::to('Manufacturing/list')}}">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="{{url('Manufacturing/list')}}">Manufacturing</a></li>
            <li class="active">Process</li>
          </ol>
        </div>
      </div>
      <hr class="new2">

      <div class="row" id="default-form">
        <div class="col-lg-12">
          <!-- <div class="portlet-widgets text-right">
            <button type="button" id="regFormchange" data-id="2" onclick="wizardForm(this)" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">Registration With Form Wizard</button>
          </div> -->
          <div class="card" style="border-left: 3px solid #386900;box-shadow: 4px 4px #b1b1b1;">
            <div class="card-header" style="background: linear-gradient(to left, #dbf2fd, #ffffff 50%, #ffffff, #ffffff 75%);">
              <form action="{{ URL::to('Manufacturing/create')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="card-body">
                  <h4 style="text-align: center;"><span id="msg" style="color: #F0560A;"></span></h4>
                  <p style="font-size: 17px; font-weight: 700;">Input</p>
                  <div class="col-md-5">
                    <div class="row form-group">
                      <!--   <label class="col-sm-3 control-label" for="example-input-normal">Search Land</label> -->
                      <div class="col-sm-7">
                        <div class="input-group">
                          <!-- <input type="text" id="searchland" name="search_items_name" class="form-control" placeholder="Search items"> -->
                          <input type="hidden" name="manufacturing_details_id" value="{{@$manufacturing_details->id}}">
                          <span class="input-group-prepend">
                            <!-- <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button> &nbsp; -->
                            <!-- <button type="button" class="btn waves-effect waves-light btn-primary" onclick="addlandModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Land"><i class="fa fa-plus"></i></button> -->
                          </span>
                        </div>
                        <div id="land_list"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Item Type*</label>
                          <label for="field-1" class="control-label"></label>
                          <select class="form-control" name="input_itemstype_ids" id="input_itemstype_ids"  required="" aria-required="true" onchange="get_item_name();">
                            <option value="">--Select--</option>
                            @foreach($inputitem_type as $key=> $value)
                            <option value="{{$value->id}}" @if(@$manufacturing_details->input_item_type==$value->id) {{"selected"}} @endif>{{$value->category_name}}</option>
                            @endforeach
                          </select>
                        </div>

                      </div>
                      <div class="col-md-3">

                        <div class="form-group">
                          <label for="field-1" class="control-label">Item Name*</label>
                          <select class="form-control" name="input_items_id" id="input_items_id"  required=""  aria-required="true">
                            <option value="">--Select--</option>
                          
                            @foreach($inv_item as $key=> $value)
                            <option value="{{$value['id']}}" @if(@$manufacturing_details->input_items_id==$value['id']) {{"selected"}} @endif>{{$value['item_name']}}</option>
                            @endforeach
                         
                          </select>
                        </div>
                        <!-- <div class="row"> -->
                          <!-- </div> -->
                          
                        </div>
                        
                      <div class="col-md-3" id="hidden_section_serial" style="display: none;">
                          <label for="field-3" class="control-label">Serial No.</label>
                          <input type="text" class="form-control"  id="Serial_no"  placeholder="" required="" aria-required="true">
                        </div>
                        <div class="col-md-3" id="hidden_section_batch" style="display: none;">
                          <label for="field-3" class="control-label">Batch No.</label>
                          <input type="text" class="form-control"  id="batch_no"  placeholder="" required="" aria-required="true">
                        </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Quantity*</label>
                          <input type="text" class="form-control" name="input_items_quantity" onblur="clc_per();" id="input_items_quantity" min="1" value="@if(@$manufacturing_details->input_items_quantity) {{$manufacturing_details->input_items_quantity}} @endif" placeholder="" required="" aria-required="true">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-3" class="control-label">UoM*</label>
                          <label for="field-1" class="control-label"></label>
                          <select class="form-control" name="input_items_uom"  required="" aria-required="true">
                            <option value="">--Select--</option>
                            @foreach($uom as $key=> $value)
                            <option value="{{$value['id']}}" @if(@$manufacturing_details->input_items_uom==$value['id']) {{"selected"}} @endif>{{$value['uom_name']}}</option>
                            @endforeach
                          </select>
                        </div>

                      </div>

                      <!-- <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Inventory Location*</label>
                          <label for="field-1" class="control-label"></label>
                          <select class="form-control" name="input_items_location"  required="" aria-required="true">
                            <option value=""></option>
                            @foreach($InventoryLocation as $key=> $value)
                            <option value="{{$value['id']}}" @if(@$manufacturing_details->input_items_location==$value['id']) {{"selected"}} @endif>{{$value['location_name']}}</option>
                            @endforeach

                          </select>
                        </div>
                      </div> -->

                      <!-- <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Q/A</label>
                          <select class="form-control" name="qa_check" id="qa_check">
                            @if(@$manufacturing_details->qa_check == "0")
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                           @else
                           <option value="1">Yes</option>
                           <option value="0">No</option>
                           @endif
                          </select>
                        </div>
                      </div> -->
                    </div>
                  </div>

                  <hr>
                  <p style="font-size: 17px; font-weight: 700;">Output</p>
                  <span style="color:#F83008; font-weight: 600;" id="NotAloowPccCust"> </span><br><br>
                  <div class="col-md-5">
                    <div class="row form-group">
                      <div class="col-sm-7">
                        <!-- <div class="input-group" style="margin-top: -47px;"> -->
                        <!-- <input type="text" name="output_item_name" id="searchcustomer" class="form-control" placeholder="Search items" autocomplete="off"> -->
                        <!-- <span class="input-group-prepend"> -->
                        <!-- <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>&nbsp; -->
                        <!-- <button type="button" class="btn waves-effect waves-light btn-primary" onclick="addcustomerModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Customer"><i class="fa fa-plus"></i></button> -->
                        <!-- </span> -->
                        <!-- </div> -->
                        <div id="customer_list"></div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Finished Goods Type*</label>
                        <label for="field-1" class="control-label"></label>
                        <select class="form-control" name="finished_goods_type" id="finished_goods_type"  required="" aria-required="true">
                          <option value="">--Select--</option>
                          @foreach($finished_goods_type as $key=> $value)
                          <option value="{{$value->id}}" @if(@$manufacturing_details->finished_goods_dimension==$value['id']) {{"selected"}} @endif>{{$value->finished_goods_type_name}}</option>
                          @endforeach
                        </select>
                      </div>

                    </div>
                    <div class="col-md-3">

                      <div class="form-group">
                        <label for="field-1" class="control-label">Finished Goods Name*</label>
                        <input type="text" class="form-control" name="finished_goods_name" id="finished_goods_name" required="" aria-required="true" value="@if(@$manufacturing_details->finished_goods_name) {{$manufacturing_details->finished_goods_name}} @endif">
                        
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Quantity*</label>
                        <input type="text" class="form-control" name="finished_goods_quantity"  onblur="clc_scrap();" id="finished_goods_quantity" min="1" value="@if(@$manufacturing_details->finished_goods_quantity) {{$manufacturing_details->finished_goods_quantity}} @endif" placeholder="" required="" aria-required="true">
                      </div>
                      <span id="finished_goods_quantity_error" style="color: #F83008;display:none">Finished Goods Quantity</span>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">UoM*</label>
                        <label for="field-1" class="control-label"></label>
                        <select class="form-control" name="finished_goods_uom" id="finished_goods_uom" required="" aria-required="true">
                          <option value="">--Select--</option>
                          @foreach($uom as $key=> $value)
                          <option value="{{$value['id']}}" @if(@$manufacturing_details->finished_goods_uom==$value['id']) {{"selected"}} @endif>{{$value['uom_name']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <!-- <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Inventory Location*</label>
                        <select class="form-control" name="finished_goods_location" id="finished_goods_location"  required="" aria-required="true">
                          <option value=""></option>
                          @foreach($InventoryLocation as $key=> $value)
                          <option value="{{$value['id']}}" @if(@$manufacturing_details->finished_goods_location==$value['id']) {{"selected"}} @endif>{{$value['location_name']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div> -->
                  </div>


                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Metal Scrap*</label>
                        <label for="field-1" class="control-label"></label>
                        <select class="form-control" name="scrab_itemstype_ids" id="scrab_itemstype_ids"  required="" aria-required="true">
                          <option value="">--Select--</option>
                          @foreach($metal_scrap_type as $key=> $value)
                          <option value="{{$value->id}}" @if(@$manufacturing_details->metal_scrap_dimension==$value['id']) {{"selected"}} @endif>{{$value->metal_scrap_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-1" class="control-label">Metal Scrap Name*</label>
                        <input type="text" class="form-control" name="metal_scrap_name" id="metal_scrap_name" required="" aria-required="true" value="@if(@$manufacturing_details->metal_scrap_name) {{$manufacturing_details->metal_scrap_name}} @endif">
                         
                        <!-- <input type="text" class="form-control" name="metal_scrap_name" id="metal_scrap_name"  value="@if(@$manufacturing_details->metal_scrap_name) {{$manufacturing_details->metal_scrap_name}} @endif" placeholder="Metal Scrap" required="" aria-required="true"> -->
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Quantity*</label>
                        <input type="text" class="form-control" name="metal_scrap_quantity"  id="metal_scrap_quantity" min="1" value="@if(@$manufacturing_details->metal_scrap_quantity) {{$manufacturing_details->metal_scrap_quantity}} @endif" placeholder="" required="" aria-required="true">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">UoM*</label>
                        <label for="field-1" class="control-label"></label>
                        <select class="form-control" name="metal_scrap_uom" id="metal_scrap_uom" required="" aria-required="true">
                          <option value="">--Select--</option>
                          @foreach($uom as $key=> $value)
                          <option value="{{$value['id']}}" @if(@$manufacturing_details->metal_scrap_uom==$value['id']) {{"selected"}} @endif>{{$value['uom_name']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <!-- <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Inventory Location*</label>
                        <label for="field-1" class="control-label"></label>
                        <select class="form-control" name="metal_scrap_location" id="metal_scrap_location" required="" aria-required="true">
                          <option value=""></option>
                          @foreach($InventoryLocation as $key=> $value)
                          <option value="{{$value['id']}}" @if(@$manufacturing_details->metal_scrap_location==$value['id']) {{"selected"}} @endif >{{$value['location_name']}}</option>
                          @endforeach
                        </select>
                      </div>

                    </div> -->

                  </div>


                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Invisible Loss Percentage*</label>
                        <label for="field-1" class="control-label"></label>
                        <select class="form-control" name="loss_itemstype_ids" id="loss_itemstype_ids"  required="" aria-required="true" >
                          <option value="">--Select--</option>
                          @foreach($invisible_loss_percentage as $key=> $value)
                          <option value="{{$value->id}}" @if(@$manufacturing_details->invisible_loss_dimension==$value['id']) {{"selected"}} @endif>{{$value->invisible_loss_percentage}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-1" class="control-label">Invisible Loss Name*</label>
                        <input type="text" class="form-control" name="invisible_loss_name" id="invisible_loss_name" required="" aria-required="true" value="@if(@$manufacturing_details->invisible_loss_name) {{$manufacturing_details->invisible_loss_name}} @endif">
                         
                        <!-- <input type="text" class="form-control" name="invisible_loss_name" id="invisible_loss_name"  value="@if(@$manufacturing_details->invisible_loss_name) {{$manufacturing_details->invisible_loss_name}} @endif" placeholder="" required="" aria-required="true"> -->
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Quantity*</label>
                        <input type="text" class="form-control" name="invisible_loss_quantity" id="invisible_loss_quantity" min="0" value="@if(@$manufacturing_details->invisible_loss_quantity) {{$manufacturing_details->invisible_loss_quantity}} @endif" placeholder="" required="" aria-required="true">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">UoM*</label>
                        <select class="form-control" name="invisible_loss_uom" id="invisible_loss_uom" required="" aria-required="true">
                          <option value="">--Select--</option>
                          @foreach($uom as $key=> $value)
                          <option value="{{$value['id']}}" @if(@$manufacturing_details->invisible_loss_uom==$value['id']) {{"selected"}} @endif>{{$value['uom_name']}}</option>
                          @endforeach

                        </select>
                      </div>
                    </div>

                    <!-- <div class="col-md-3">
                      <div class="form-group">
                        <label for="field-3" class="control-label">Inventory Location*</label>
                        <select class="form-control" name="invisible_loss_auto" id="invisible_loss_auto" required="" aria-required="true">
                          <option value=""></option>
                          @foreach($InventoryLocation as $key=> $value)
                          <option value="{{$value['id']}}" @if(@$manufacturing_details->invisible_loss_auto ==$value['id']) {{"selected"}} @endif >{{$value['location_name']}}</option>
                          @endforeach
                        </select>
                      </div>

                    </div> -->
                  </div>

                  <div class="total-mn">
                    <div class="row">
                      <div class="col-md-6">
                        <p>Total Quantity </p>
                      </div>
                      <div class="col-md-6">
                        <p id="final_quantity">@if(@$manufacturing_details->input_items_quantity) {{$manufacturing_details->input_items_quantity}} @endif </p>
                      </div>
                    </div>
                  </div>
                  <br>
                  <input type="submit" class="btn btn-primary" name="submit" onclick="return check_quantity()" value="Create">

                  <hr>



                </div> <!-- card -->
            </div> <!-- container -->
          </div> <!-- content -->
          </form>
        </div>
      </div>
      <!--  Wizard Form -->


      <script>
        function check_quantity() {
          var input_items_quantity = $("#input_items_quantity").val();
          var finished_goods_quantity = $("#finished_goods_quantity").val();
          var metal_scrap_quantity = $("#metal_scrap_quantity").val();
          var int_input_quantity = input_items_quantity.replace(/\s/g, '');
          var output_quantity = parseFloat(finished_goods_quantity.replace(/\s/g, '')) + parseFloat(metal_scrap_quantity.replace(/\s/g, ''));
          var diff = 0;
          var final_quantity = 0;
          if (int_input_quantity > output_quantity) {
            diff = int_input_quantity - output_quantity;
            final_quantity = output_quantity + diff;
            $("#final_quantity").html(final_quantity);
            // $("#invisible_loss_quantity").val(diff);
            return true;
          }
          else {
            $("#final_quantity").html(final_quantity);
            // $("#invisible_loss_quantity").val(diff);
            alert("Your Output Quantity is Greater Than Input Quantity");
            return false;
          }
        }
      </script>
      <script>
        function clc_scrap() {
          var input_items_quantity = $("#input_items_quantity").val();
          var finished_goods_quantity = $("#finished_goods_quantity").val();
          // var metal_scrap_quantity = $("#metal_scrap_quantity").val();
          var int_finished_goods_quantity=finished_goods_quantity.replace(/\s/g, '');
          var int_input_quantity = input_items_quantity.replace(/\s/g, '');
          var invisible_loss_quantity   = $("#invisible_loss_quantity").val();
           var int_invisible_loss_quantity=parseFloat(invisible_loss_quantity.replace(/\s/g, ''));

          var scrap_item=parseFloat(input_items_quantity.replace(/\s/g, '')) - parseFloat(finished_goods_quantity.replace(/\s/g, ''))-int_invisible_loss_quantity;
          // var output_quantity = parseFloat(finished_goods_quantity.replace(/\s/g, '')) + parseFloat(metal_scrap_quantity.replace(/\s/g, ''));
          var diff = 0;
          var final_quantity = 0;
          if (parseFloat(int_input_quantity)>parseFloat(int_finished_goods_quantity)) {
          $("#metal_scrap_quantity").val(scrap_item);
          $("#finished_goods_quantity_error").css('display','none');

          }
          else
          {
            $("#finished_goods_quantity_error").css('display','block');
            $("#metal_scrap_quantity").val(0);
          }
          // if (int_input_quantity > output_quantity) {
          //   diff = int_input_quantity - output_quantity;
          //   final_quantity = output_quantity + diff;
          //   $("#final_quantity").html(final_quantity);
          //   $("#invisible_loss_quantity").val(diff);
          //   return true;
          // }
          // else {
          //   $("#final_quantity").html(final_quantity);
          //   $("#invisible_loss_quantity").val(diff);
          //   alert("Your Output Quantity is Greater Than Input Quantity");
          //   return false;
          // }
        }
      </script>
      <script>
        function clc_per() {
          var input_items_quantity = $("#input_items_quantity").val();
          var int_input_items_quantity = input_items_quantity.replace(/\s/g, '');
          var invisible_los = (int_input_items_quantity / 300).toFixed(2);
          $("#invisible_loss_quantity").val(invisible_los);
        }
      </script>
      <script>
        function get_item_details(e)
        {
          var item_id=$(e).val();
          $.ajax({
          url: "{{url('Manufacturing/get_item_details/')}}" + '/' + item_id,
          type: "GET",
          success: function(data) {
          console.log(data);
          if(data.serial_no!=null)
          {
            $("#hidden_section_serial").css('display','block');
          $("#Serial_no").val(data.serial_no);
          }
          else
          {
            $("#hidden_section_serial").css('display','none');
          $("#Serial_no").val("");
          }
          if(data.batch_no!=null)
          {
            $("#hidden_section_batch").css('display','block');
          $("#batch_no").val(data.batch_no);
          }
          else
          {
            $("#hidden_section_batch").css('display','none');
          $("#batch_no").val("");
          }
          }
        });
         
        }
        function get_item_names(element,check) {
           
          $.ajax({
              url: "{{url('Manufacturing/fetchItemname/')}}" + '/' + element,
              data: {},
              method: "GET",
              contentType: 'application/json',
              dataType: "json",
              success: function (data) {
                if(check == 1)
                {
                  $("#input_items_id").html("");
                  var to_append = `<option value="">--Select--</option>`
                  for (var i = 0; i < data.inv_Type_item.length; i++) {
                      to_append += `<option value=\"` + data.inv_Type_item[i].id + `\">` + data.inv_Type_item[i].item_name + `</option>`
                      }
                  $("#input_items_id").append(to_append);
                } 
                else if(check == 2)
                {
                  $("#finished_goods_name").html("");
                  var to_append = `<option value="">--Select--</option>`
                  for (var i = 0; i < data.inv_Type_item.length; i++) {
                      to_append += `<option value=\"` + data.inv_Type_item[i].id + `\">` + data.inv_Type_item[i].item_name + `</option>`
                      }
                  $("#finished_goods_name").append(to_append);
                }
                else if(check == 3)
                {
                  $("#metal_scrap_name").html("");
                  var to_append = `<option value="">--Select--</option>`
                  for (var i = 0; i < data.inv_Type_item.length; i++) {
                      to_append += `<option value=\"` + data.inv_Type_item[i].id + `\">` + data.inv_Type_item[i].item_name + `</option>`
                      }
                  $("#metal_scrap_name").append(to_append);
                }
                else if(check == 4)
                {
                  $("#invisible_loss_name").html("");
                  var to_append = `<option value="">--Select--</option>`
                  for (var i = 0; i < data.inv_Type_item.length; i++) {
                      to_append += `<option value=\"` + data.inv_Type_item[i].id + `\">` + data.inv_Type_item[i].item_name + `</option>`
                      }
                  $("#invisible_loss_name").append(to_append);
                }
              }
          });
        }
      </script>

<script>
    function get_item_name(){
          var item_id_tmp = $("#input_itemstype_ids").val(); 
        $("#input_items_id").html('<option value="">--Select--</option>');
        if(item_id_tmp)
        {
      
            $.ajax({
              url: "{{url('Manufacturing/get_item_name/')}}"+'/'+item_id_tmp,
              data: {'input_items_id':item_id_tmp},
              method:"GET",
              contentType:'application/json',
              dataType:"json",
              beforeSend: function(data){
                  $(".loader").fadeIn(300);
                  
              },
              error:function(xhr){
                  alert("error"+xhr.status+","+xhr.statusText);
                  $(".loader").fadeOut(300);
              },
              success:function(data){
              
                  $("#input_items_id").html('<option value="">--Select--</option>');
                  for(var i=0;i<data.length;i++){
                      $("#input_items_id").append('<option value="'+data[i].id+'" >'+data[i].item_name+'</option>');
                  }
                  $(".loader").fadeOut(300);
              }
          });
        }
    }
      </script>