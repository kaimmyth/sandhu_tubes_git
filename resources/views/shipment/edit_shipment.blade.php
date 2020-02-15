<style>
    .card .card-header {
        padding: 1px 20px;
        border: none;
    }

    .form-control {
        -moz-border-radius: 2px;
        -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        -webkit-border-radius: 2px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
        border-radius: 2px;
        border: 1px solid #b3b1b1;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: rgba(0, 0, 0, 0.6);
        font-size: 14px;
        box-shadow: 0px 0px #ffffff;
        width: 100%;
    }
</style>
<div class="content-page">
    <div class="content">
        <!-- Start content -->
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Update Shipment Receive&nbsp;&nbsp;/ &nbsp;
                        <a href="{{URL::to('shipment/listing')}}">Back</a></h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="{{ URL::to('home') }}">Home</a></li>
                            <li><a href="{{URL::to('home')}}">List</a></li>
                            <li class="active">Update Shipment Receive</li>
                        </ol>
                </div>
            </div>
            <hr class="new2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <form action="{{url('shipment/editStore')}}" method="post" id="FormValidation" required="" aria-required="true" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <input type="hidden" name="shipment_id" value="{{$shipmentdata->id}}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Supplier Name *</label>
                                                <input type="text" class="form-control" name="supplier_name" value="{{$shipmentdata->supplier_name}}" id="supplier_name" placeholder="Supplier Name" required aria-required="true">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Shipment Type *</label>
                                                <select class="form-control" name="shipment_type" id="shipment_type" required="" aria-required="true">
                                                    @if($shipmentdata->shipment_type == 1)
                                                    <option value="1">IN</option>
                                                    <option value="0">OUT</option>
                                                    @else
                                                    <option value="0">OUT</option>
                                                    <option value="1">IN</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Q/A</label>
                                                <select class="form-control" name="qa_check" id="qa_check">
                                                    @if($shipmentdata->qa == 1)
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                    @else
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                   @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Shipping Date</label>
                                                <input type="text" class="form-control datepicker" value="{{$shipmentdata->shipping_date}}"  name="date" id="date" autocomplete="off">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Status *</label>
                                                <select class="form-control" name="status" id="status" required="" aria-required="true">
                                                    @if($shipmentdata->status == 1)
                                                    <option value="1">Active</option>
                                                    <option value="0">InActive</option>
                                                    @else
                                                    <option value="1">InActive</option>
                                                    <option value="0">Active</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>SHIP-FROM LOCATION:</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Address</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->address}}" name="address" id="address" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">City</label>
                                                <select class="form-control" name="city" id="city">
                                                    @foreach($cities as $key=>$val)
                                                    <option value="{{$val->id}}" @if(@$val->id==@$shipmentdata->city ?? ''){{'selected'}} @endif>{{$val->city}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">State</label>
                                                <select class="form-control" name="state" id="state">
                                                    <option value="" selected>--Select--</option>
                                                    @foreach($state as $key=>$val)
                                                    <option value="{{$val->id}}" @if(@$val->id==@$shipmentdata->state ?? ''){{'selected'}} @endif>{{$val->state}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Pin Code</label>
                                                <input type="text" min="1" class="form-control" value="{{$shipmentdata->pincode}}" name="pin" id="pin" placeholder="Pin Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>VEHICLE</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Vehicle Type</label>
                                                <select class="form-control" name="vehicle_type" id="vehicle_type">
                                                    @if($shipmentdata->vehicle_type == 'Bus')
                                                    <option value="Bus">Bus</option>
                                                    <option value="Truck">Truck</option>
                                                    @else
                                                    <option value="Truck">Truck</option>
                                                    <option value="Bus">Bus</option>
                                                    @endif
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Vehicle Make</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->vehicle_make}}" name="vehicle_make" id="vehicle_make" placeholder="Vehicle Make">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Model</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->model}}" name="model" id="model" placeholder="Model">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">License No.</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->license_no}}" name="license_no" id="license_no" placeholder="License No.">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Driver</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Driver Name</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->driver_name}}" name="driver_name" id="driver_name" placeholder="Driver Name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Phone1</label>
                                                <input type="text" class="form-control" min="1" value="{{$shipmentdata->phone1}}" name="phone1" id="phone1" placeholder="Phone1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Phone2</label>
                                                <input type="text" class="form-control" min="1" value="{{$shipmentdata->phone2}}" name="phone2" id="phone2" placeholder="Phone2">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Address</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->driver_address}}" name="driver_address" id="driver_address" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4>ITEMS RECEIVED</h4>
                                        </div>
                                        <div class="col-md-9">
                                            <button type="button" onclick="append_data();" class="btn btn-secondary btn-sm btn-circle">Add <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                        </div>
                                        <div class="col-md-12 row" id="append_here">
                                            @if($shiped_item_data)
                                            @foreach($shiped_item_data as $key=>$val)
                                            <div class="col-sm-12 row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Item Type</label>
                                                        <select class="form-control" name="item_type_ids[]" id="item_type_ids">
                                                            <option value="">--Select--</option>
                                                            @foreach($item_type as $kee=>$val1)
                                                            <option value="{{$val1->id}}" @if(@$val1->id==@$val->item_type_id ?? ''){{'selected'}} @endif>{{$val1->category_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Item Name</label>
                                                        <select class="form-control" name="item_ids[]" id="item_ids" onchange="showserailno(this.value,append_i,this)">
                                                            <option value="" selected>--Select--</option>
                                                            @foreach($inv_item as $kee=>$val1)
                                                            <option value="{{$val1->id}}" @if(@$val1->id==@$val->item_id ?? ''){{'selected'}} @endif>{{$val1->item_name_id}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">GRN No.</label>
                                                        <input type="text" class="form-control" name="grn_no[]" value="{{$val->item_grn_no}}" id="grn_no" placeholder="GRN No.">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Invoice No.</label>
                                                        <input type="text" class="form-control" name="invoice_no[]" value="{{$val->item_invoice_no}}" id="invoice_no" placeholder="Invoice No.">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Quantity</label>
                                                        <input type="text" class="form-control" name="quantity[]" id="quantity" value="{{$val->item_quantity}}" placeholder="Quantity">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">UoM</label>
                                                        <select class="form-control" name="uom_ids[]" id="uom_ids">
                                                            <option value="">--Select--</option>
                                                            @foreach($uomData as $kee=>$val1)
                                                            <option value="{{$val1->id}}" @if(@$val1->id==@$val->item_uom_id ?? ''){{'selected'}} @endif>{{$val1->uom_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-12 row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Item Location</label>
                                                        <select class="form-control" name="item_location[]" id="item_location">
                                                            <option value="" selected>--Select--</option>
                                                            @foreach($inventory_location as $kee=>$val1)
                                                            <option value="{{$val1->id}}" @if(@$val1->id==@$val->item_location_id ?? ''){{'selected'}} @endif>{{$val1->location_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    @if($val->item_serial_no != null)
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Serial No.</label>
                                                        <input type="text" class="form-control" name="serial_no[]" value="{{$val->item_serial_no}}" readonly id="serial_no" placeholder="Serial No.">
                                                    </div>
                                                    @else
                                                        <!-- <div class="form-group"> -->
                                                            <!-- <label for="field-2" class="control-label">Serial No. *</label> -->
                                                            <input type="hidden" class="form-control" name="serial_no[]" value="{{$val->item_serial_no}}" id="serial_no">
                                                        <!-- </div> -->
                                                    @endif
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                        <!-- <div class="col-md-3" id="append_here">

                                        </div> -->
                                    </div>
                                    <div class="col-md-12" style="text-align: left; margin-bottom: 6px;">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-b-5">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- card -->
    </div> <!-- container -->
</div> <!-- content -->

<script>
    var append_i = 0;
    function append_data() {
        $.ajax({
            url: "{{url('shipment/fetchItems')}}",
            data: {},
            method: "GET",
            contentType: 'application/json',
            dataType: "json",
            success: function (data) {
                var to_append = `<span class="col-md-12 row">
                    <div class="col-md-2"><div class="form-group">
                        <label for="field-2" class="control-label">Item Type</label>
                        <select class="form-control" name="item_type_ids[]" id="item_type_ids">
                            <option value="" selected>--Select--</option>`
                        for (var i = 0; i < data.item_type.length; i++) {
                            to_append += `<option value=\"` + data.item_type[i].id + `\">` + data.item_type[i].category_name + `</option>`
                        }
                        to_append += `</select>
                    </div></div>
                    <div class="col-md-2"><div class="form-group">
                        <label for="field-2" class="control-label">Item Name</label>
                        <select class="form-control" name="item_ids[]" id="item_ids" onchange="showserailno(this.value,`+ append_i + `,this)">
                            <option value="" selected>--Select--</option>`
                for (var i = 0; i < data.inv_item.length; i++) {
                    to_append += `<option value=\"` + data.inv_item[i].id + `\">` + data.inv_item[i].item_name_id + `</option>`
                }
                to_append += `</select>
                    </div></div>
                    <div class="col-md-2"><div class="form-group">
                        <label for="field-2" class="control-label">GRN No.</label>
                        <input type="text" class="form-control" name="grn_no[]" id="grn_no" placeholder="GRN No.">
                        
                        </div></div>
                    <div class="col-md-2"><div class="form-group">
                        <label for="field-2" class="control-label">Invoice No.</label>
                        <input type="text" class="form-control" name="invoice_no[]" id="invoice_no" placeholder="Invoice No.">
                        
                        </div></div>
                    <div class="col-md-2"><div class="form-group">
                        <label for="field-2" class="control-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity[]" id="quantity" placeholder="Quantity">
                        
                        </div></div>
                    <div class="col-md-2"><div class="form-group">
                        <label for="field-2" class="control-label">UoM</label>
                        <select class="form-control" name="uom_ids[]" id="uom_ids">
                            <option value="" selected>--Select--</option>`
                for (var i = 0; i < data.uomData.length; i++) {
                    to_append += `<option value=\"` + data.uomData[i].id + `\">` + data.uomData[i].uom_name + `</option>`
                }
                to_append += `</select>
                        
                        </div></div>
                    <div class="col-md-2"><div class="form-group">
                        <label for="field-2" class="control-label">Item Location</label>
                        <select class="form-control" name="item_location[]" id="item_location">
                            <option value="" selected>--Select--</option>`
                for (var i = 0; i < data.inventory_location.length; i++) {
                    to_append += `<option value=\"` + data.inventory_location[i].id + `\">` + data.inventory_location[i].location_name + `</option>`
                }
                to_append += `</select>
                    </div></div>
                    <div class="col-md-2"><div class="form-group" id="hidden_sl" style="display:none">
                        <label for="field-2" class="control-label">Serial No.</label>
                        <input type="text" class="form-control" name="serial_no[]" readonly id="serial_no" placeholder="Serial No.">
                    </div></div>
                    </span>
                    `;
                $("#append_here").append(to_append);
                append_i++;
            }
        });
    }

    function showserailno(element, append, e) {
        // alert(append);
        $.ajax({
            url: "{{url('shipment/fetchItemsserialno/')}}" + '/' + element,
            data: {},
            method: "GET",
            contentType: 'application/json',
            dataType: "json",
            success: function (data) {
                if (data.inv_item_sl.serial_no != null) {
                    $(e).closest('span').find("#hidden_sl").css('display', 'block');
                    $(e).closest('span').find("#serial_no").val(data.inv_item_sl.serial_no);
                }
                else {
                    $(e).closest('span').find("#hidden_sl").css('display', 'none');
                }

            }
        });
    }
</script>
<script>
    $(function () {
    $(".datepicker").datepicker();
    });
</script> 