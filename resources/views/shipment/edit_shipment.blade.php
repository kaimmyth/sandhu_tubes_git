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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Update Shipment Receive
                        <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                </div>
            </div>
            <hr class="new2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <form action="{{url('shipment/editStore')}}" method="post" id="FormValidationshipment" required="" aria-required="true" enctype="multipart/form-data">
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
                                        <div class="col-md-3">

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
                                        </div>
                                        <div class="col-md-3">
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>SHIP-FROM LOCATION:</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Address *</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->address}}" name="address" id="address" placeholder="Address" required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="field-2" class="control-label">City</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->city}}" name="city" id="city" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">State</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->state}}" name="state" id="state" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Pin Code</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->pincode}}" name="pin" id="pin" placeholder="Pin Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>VEHICLE</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Vehicle Type *</label>
                                                <select class="form-control" name="vehicle_type" id="vehicle_type" required="" aria-required="true">
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
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">License No.</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->license_no}}" name="license_no" id="license_no" placeholder="License No.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Driver</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Driver Name *</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->driver_name}}" name="driver_name" id="driver_name" placeholder="Driver Name" required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Phone1</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->phone1}}" name="phone1" id="phone1" placeholder="Phone1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Phone2</label>
                                                <input type="text" class="form-control" value="{{$shipmentdata->phone2}}" name="phone2" id="phone2" placeholder="Phone2">
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
                                        <div class="col-md-3">
                                        @if($inv_itemdata)
                                            @foreach($inv_itemdata as $key=>$val)
                                                <div class="form-group">
                                                    <label for="field-2" class="control-label">Item Name *</label>
                                                    <select class="form-control" name="item_ids[]" id="item_ids" required="" aria-required="true">
                                                        <option value="" selected>--Select--</option>
                                                        <option value="1">Mother Coil</option>
                                                        <option value="2">Slit Coil</option>
                                                    </select>
                                                </div>
                                            @endforeach
                                        @endif
                                                </div>
                                        <div class="col-md-3" id="append_here">

                                        </div>
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
        var to_append = `<div class="form-group">
                            <label for="field-2" class="control-label">Item Name *</label>
                            <select class="form-control" name="item_ids[]" id="item_ids" required="" aria-required="true">
                                <option value="" selected>--Select--</option>
                                <option value="1">Mother Coil</option>
                                <option value="2">Slit Coil</option>
                            </select>
                        </div>`;
        $("#append_here").append(to_append);
        append_i++;
    }

</script>