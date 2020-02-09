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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Shipment List</h4>

                </div>
            </div>
            <hr class="new2">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <div class="card-body">
                                <div class="row"><br><br><br>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <a href="{{url('shipment/add/0')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Shipment</button></a>
                                        <a href="{{url('shipment/add/1')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Shipment Receive</button></a><br>
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="background: #b6e9ff;">
                                                <tr>
                                                    <th>Shipment No</th>
                                                    <th>Shipment Type</th>
                                                    <th>Supplier Name</th>
                                                    <th>Shipped Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($statusdata)
                                                @foreach($statusdata as $key=>$val)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    @if($val->shipment_type == 1)
                                                    <td>IN</td>
                                                    @else
                                                    <td>OUT</td>
                                                    @endif
                                                    <td>{{$val->supplier_name}}</td>
                                                    <td>{{$val->created_date}}</td>
                                                    @if($val->status == 1)
                                                    <td>
                                                        <p class="mb-0">
                                                            <span class="badge badge-success">Active</span>
                                                        </p>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <p class="mb-0">
                                                            <span class="badge badge-danger">InActive</span>
                                                        </p>
                                                    </td>
                                                    @endif
                                                    <td class="actions">
                                                        <a href="{{url('shipment/showView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye"></i></a>
                                                        <a href="{{url('shipment/editView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                                                        <a href="{{url('shipment/deletedata/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div> <!-- card -->
        </div> <!-- container -->
    </div> <!-- content -->