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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Add Shipment Receive&nbsp;&nbsp;/ &nbsp;
                        <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(URL::to('home')); ?>">List</a></li>
                        <li class="active">Add Shipment Receive</li>
                    </ol>
                </div>
            </div>
            <hr class="new2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <form action="<?php echo e(url('shipment/addStore')); ?>" method="post" id="FormValidationshipment" required="" aria-required="true" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Supplier Name *</label>
                                                <input type="text" class="form-control" name="supplier_name" id="supplier_name" placeholder="Supplier Name" required aria-required="true">
                                            </div>
                                        </div>
                                        <input type="hidden" name="shipment_type" value="1">
                                        <!-- <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Shipment Type *</label>
                                                <select class="form-control" name="shipment_type" id="shipment_type" required="" aria-required="true">
                                                    <option value="" selected>--Select--</option>
                                                    <option value="1">IN</option>
                                                    <option value="0">OUT</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Status *</label>
                                                <select class="form-control" name="status" id="status" required="" aria-required="true">
                                                    <option value="" selected>--Select--</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">InActive</option>
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
                                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="field-2" class="control-label">City</label>
                                                <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">State</label>
                                                <input type="text" class="form-control" name="state" id="state" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Pin Code</label>
                                                <input type="text" class="form-control" name="pin" id="pin" placeholder="Pin Code">
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
                                                    <option value="">--Select-</option>
                                                    <option value="Bus">Bus</option>
                                                    <option value="Truck">Truck</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Vehicle Make</label>
                                                <input type="text" class="form-control" name="vehicle_make" id="vehicle_make" placeholder="Vehicle Make">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Model</label>
                                                <input type="text" class="form-control" name="model" id="model" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">License No.</label>
                                                <input type="text" class="form-control" name="license_no" id="license_no" placeholder="License No.">
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
                                                <input type="text" class="form-control" name="driver_name" id="driver_name" placeholder="Driver Name" required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Phone1</label>
                                                <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Phone1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Phone2</label>
                                                <input type="text" class="form-control" name="phone2" id="phone2" placeholder="Phone2">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Address</label>
                                                <input type="text" class="form-control" name="driver_address" id="driver_address" placeholder="Address">
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
                                        <div class="col-md-6 row" id="append_here">

                                        </div>
                                    </div>
                                    <div class="col-md-12" style="text-align: left; margin-bottom: 6px;">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-b-5">Create</button>
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
            url: "<?php echo e(url('shipment/fetchItems')); ?>",
            data: {},
            method: "GET",
            contentType: 'application/json',
            dataType: "json",
            success: function (data) {
                console.log(data);
                var to_append = `<div class="col-md-6"><div class="form-group">
                            <label for="field-2" class="control-label">Item Name *</label>
                            <select class="form-control" name="item_ids[]" id="item_ids" required="" aria-required="true">
                                <option value="" selected>--Select--</option>`
                                for(var i = 0; i < data.inv_item.length; i++)
                                {
                                    to_append += `<option value=\"`+ data.inv_item[i].id+ `\">`+ data.inv_item[i].item_name +`</option>`
                                }
                    to_append += `</select>
                        </div></div>
                        <div class="col-md-6"><div class="form-group">
                            <label for="field-2" class="control-label">Item Location *</label>
                            <select class="form-control" name="item_location[]" id="item_location" required="" aria-required="true">
                                <option value="" selected>--Select--</option>`
                                for(var i = 0; i < data.inventory_location.length; i++)
                                {
                                    to_append += `<option value=\"`+ data.inventory_location[i].id+ `\">`+ data.inventory_location[i].location_name +`</option>`
                                }
                    to_append += `</select>
                        </div></div>
                        `;
                $("#append_here").append(to_append);
                append_i++;
            }
        });
    }

</script><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/shipment/add_shipment.blade.php ENDPATH**/ ?>