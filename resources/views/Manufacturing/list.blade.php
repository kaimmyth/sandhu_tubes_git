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
    <div class="content">
        <!-- Start content -->
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Manufacturing Details</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Manufacturing: </a></li>
                        <li class="active">Manufacturing: listing</li>
                    </ol>
                </div>
            </div>
            <hr class="new2">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);padding: 0px !important;">
                            <div class="card-body">
                                <div class="row"><br><br><br>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        @if($user_id!=1)
                                        @if(@$module_permission['is_add']=='yes')     
                                        <a href="{{url('Manufacturing/add')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                                        @endif
                                        @else
                                        <a href="{{url('Manufacturing/add')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5 ttnne" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                                        @endif
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; width:100%; border-spacing: 0;">
                                            <thead style="background: #b6e9ff;">
                                                <tr>
                                                    <th>Item Name </th>
                                                    <th>Quantity</th>
                                                    <th>Inventory Location</th>                                     
                                                    <th>Status</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                              
                                                @foreach($toReturn['details'] as $key_del=>$value_del)
                                                @php $item=DB::table('inv_item')->where('id',$value_del['input_items_id'])->first();
                                                    $Location=DB::table('inventory_location')->where('id',$value_del['input_items_location'])->first();
                                                    $uom=DB::table('uom')->where('id',$value_del['input_items_uom'])->first();
                                                    @endphp
                                                <td>{{@$item->item_name}}</td>
                                                <td class="rig">{{@$value_del['input_items_quantity']}} {{@$uom->uom_name}}</td>
                                                <td>{{@$Location->location_name}}</td>
                                                
                                                @if(@$value_del['status']==1)
                                                    <td>
                                                        <p class="mb-0">
                                                            <span class="badge badge-success">Active</span>
                                                        </p>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <p class="mb-0">
                                                            <span class="badge badge-danger">Inactive</span>
                                                        </p>
                                                    </td>
                                                @endif
                                                <td>
                                                    <a href="{{url('Manufacturing/edit/'.$value_del['id'])}}" class="on-default view-row" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Update"><i class="fas fa-edit"></i></a> 
                                                    <a href="{{url('Manufacturing/delete/'.$value_del['id'])}}"  class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" style="color:red;"></i></a>

                                                </td>
                                            </tr>
                                                @endforeach
                                               
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

 
    <script type="text/javascript">
        $(document).ready(function () {
            $('#e_additional_charge').on('change', function () {
                var value = $(this).val();
                var bs = Number(document.getElementById('e_based_rent').value);
                var tax = Number(document.getElementById('e_taxes').value);
                var ins = Number(document.getElementById('e_insurance').value);
                var mainti = Number(document.getElementById('e_maintanance').value);
                var adi = Number(document.getElementById('e_additional_charge').value);
                var pay = bs + tax + ins + mainti + adi;
                document.getElementById('e_netpaybill').value = pay;
            });

        });

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("input[name$='net_payable']").click(function () {
                var test = $(this).val();
                if (test == 'monthly') {
                    document.getElementById('tag_n').textContent = 'Month';
                    document.getElementById('time_duration').value = 'm';
                } else {
                    document.getElementById('tag_n').textContent = 'Year';
                    document.getElementById('time_duration').value = 'yr';
                }
            });
        });

    </script>

   

    <script type="text/javascript">
        $(document).ready(function () {
            $('#searchcustomer').on('keyup', function () {
                var query = $(this).val();
                if (query != '') {
                    $("#modelloader").css("display", "block");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{url('land/serachcustomers/')}}" + '/' + query,
                        type: "GET",
                        success: function (data) {
                            $("#modelloader").css("display", "none");
                            $('#customer_list').html(data);
                        }
                    })
                } else {
                    $('#customer_list').html("");
                }
            });
            $(document).on('click', 'td', function () {
                var value = $(this).text();
                $('#customer_list').html("");
                $("#searcherror").css("display", "none");
            });

            /* Land */
            $('#searchland').on('keyup', function () {
                var query = $(this).val();
                if (query != '') {
                    $("#modelloader").css("display", "block");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{url('land/serachland/')}}" + '/' + query,
                        type: "GET",
                        success: function (data) {
                            $("#modelloader").css("display", "none");
                            $('#land_list').html(data);
                        }
                    })
                } else {
                    $('#land_list').html("");
                }
            });
            $(document).on('click', 'td', function () {
                var value = $(this).text();
                $('#land_list').html("");
            });

        });

        function addcustomer(id) {
            $("#modelloader").css("display", "block");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{url('land/customer/add/')}}" + '/' + id,
                method: "POST",
                contentType: 'application/json',
                success: function (data) {
                    console.log(data)
                    $("#modelloader").css("display", "none");
                    var name = data.f_name + ' ' + data.l_name;
                    var email = data.email;
                    var mobile = data.mobile;
                    document.getElementById("cust_id").value = data.id;
                    document.getElementById("searchcustomer").value = name;
                }
            });
        }

        function addland(id) {
            $("#modelloader").css("display", "block");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{url('land/land/add/')}}" + '/' + id,
                method: "POST",
                contentType: 'application/json',
                success: function (data) {
                    console.log(data)
                    $("#modelloader").css("display", "none");
                    // document.getElementById("plot_no").value = data.plot_no;
                    document.getElementById("land_id").value = data.id;
                    document.getElementById("searchland").value = data.land_name;
                }
            });
        }

    </script>
    <!-- Add Customers -->

    

    <script type="text/javascript">
        $(document).ready(function () {
            $('#additional_charge').on('change', function () {
                var value = $(this).val();
                var bs = Number(document.getElementById('based_rent').value);
                var tax = Number(document.getElementById('taxes').value);
                var ins = Number(document.getElementById('insurance').value);
                var mainti = Number(document.getElementById('maintanance').value);
                var adi = Number(document.getElementById('additional_charge').value);
                var pay = bs + tax + ins + mainti + adi;
                document.getElementById('netpaybill').value = pay;
            });

            $("input[name$='add_net_payable']").click(function () {
                var test = $(this).val();
                if (test == 'monthly') {
                    document.getElementById('add_tag_n').textContent = 'Month';
                    document.getElementById('add_time_duration').value = 'm';
                } else {
                    document.getElementById('add_tag_n').textContent = 'Year';
                    document.getElementById('add_time_duration').value = 'yr';
                }
            });

        });

    </script>


   
    

</div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
      $('#additional_charge').on('change',function() { 
        var value = $(this).val();
        var bs = Number(document.getElementById('based_rent').value);
        var tax = Number(document.getElementById('taxes').value);
        var ins = Number(document.getElementById('insurance').value);
        var mainti = Number(document.getElementById('maintanance').value);
        var adi = Number(document.getElementById('additional_charge').value);
        var pay = bs+tax+ins+mainti+adi;
        document.getElementById('netpaybill').value=pay;
      });
  
      $("input[name$='add_net_payable']").click(function() { 
        var test = $(this).val();
        if(test=='monthly'){
          document.getElementById('add_tag_n').textContent ='Month';
          document.getElementById('add_time_duration').value ='m';
        }else{
         document.getElementById('add_tag_n').textContent ='Year';
         document.getElementById('add_time_duration').value ='yr';
       }
     });
  
    });
  </script>
<script type="text/javascript">
  function SearchCustomer() {
    $('.search').on('keyup', function() {
      var query = $(this).val();
      // alert(query);
      if (query != '') {
        $('#contrannsfer').css("display", "none");
        $("#modelloader").css("display", "block");
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: "{{url('land/serachtransfercustomers/')}}" + '/' + query,
          type: "GET",
          success: function(data) {
            document.getElementById("csearch").style.color = "";
            $("#modelloader").css("display", "none");
            $('#customer_transfer_list').html(data);
          }
        })
      } else {
        $('#customer_transfer_list').html("");
      }
    });
    $(document).on('click', 'td', function() {
      var value = $(this).text();
      $('#customer_transfer_list').html("");
    });
  };
</script>

