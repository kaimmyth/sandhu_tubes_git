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
    @media print {
        table th:last-child {display:none}  
        table td:last-child {display:none}
    }

    #to-print-area { display: none; }
    @media print
    {
        #to-print-area { display: block; }
    }
    @media print
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Summary Reports</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{ URL::to('home') }}">Home</a></li>
                        <li class="active">Summary Reports</li>
                       
                    </ol>
                </div>
            </div>
            <hr class="new2">
            <form method="post" action="{{url('genrate/summary-report')}}" autocomplete="off" id="summary_report">
                @csrf()
                <div class="row" style="width: 100%; margin-left: 0px;">
                   
                  
                    <div class="col-xl-2">
                        <label for="field-2" class="control-label">Start Date</label>
                        <input type="text" name="start_date" class="form-control datepicker" value="@if(@$start_date) {{$start_date}} @endif" required>
                    </div>
                    <div class="col-xl-2">
                        <label for="field-2" class="control-label">End Date</label>
                        <input type="text" name="end_date" class="form-control datepicker" value="@if(@$end_date) {{$end_date}} @endif" required>
                    </div>
                    <div class="col-xl-2">
                        <button type="submit" class="btn btn-primary" style="margin-top: 30px;"> <i class="md md-add-circle-outline"></i> Genrate</button>
                        <button type="button" class="btn btn-primary" style="margin-top: 30px;" onclick="form_reset();"> <i class="md md-add-circle-outline"></i> Undo</button>
                       
                        <a href="#"><button id="prtbtn"  onclick="printDiv('datatable ')" class="btn btn-primary" style="margin-top:30px;">Print</button></a>
                       
                    </div>
                </div>
            </form>
            @if(count($reservations)!=0)
            <hr class="new2 ">
       
                <div class="card card-border card-info">
                    <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);padding: 0px !important;">
                        <div class="card-body">
                            <div class="row"><br><br><br>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div id="printable-area" class="row">
                                        <div class="col-md-12">
                                            <table class="table table-striped table-bordered dt-responsive" id="datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background: #393e4a59;">
                                                    <tr><th colspan="5">Report Summary {{date('j M, Y ',strtotime(@$fromDate))}} To {{date('j M, Y ',strtotime(@$toDate))}}</th></tr>
                                                    <tr>
                                                        <th>Item Inventory</th>
                                                        <th>Item Type(category)</th>
                                                        <th>Quantity</th>
                                                        <th>Opening Quantity</th>
                                                        <th>Closing Quantity</th>
                                                    </tr>
                                                </thead>
                                              
                                                <tbody>
                                                 @foreach($reservations as $value)
                                                        <tr>
                                                           <td>
                                                           <?php
                                                              $get_item_type = DB::table('inv_item')->where('id',$value->inv_item_id)->value('item_name');
                                                               
                                                              echo $get_item_type;
                                                          
                                                           ?>
                                                            </td>
                                                           <td>
                                                           <?php 
                                                    
                                                                $get_item_category = DB::table('category')->where('id',$value->item_type)->value('category_name');
                                                                echo $get_item_category;
                                                            ?>    
                                                          </td>
                                                           <td style="text-align:right;"><?php  $get_uom_name = DB::table('uom')->where('id',$value->uom_id)->value('uom_name');?>{{$value->quantity}}<?php echo $get_uom_name?></td>
                                                           <td style="text-align:right;">{{$value->opening_quantity}}<?php echo $get_uom_name?></td>
                                                           <td style="text-align:right;">{{$value->closing_quantity}}<?php echo $get_uom_name?></td>
                                                         
                                                        </tr>
                                                @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <span style="display:none;">No data Found</span>
                </div>
                @endif

        </div>
    </div>
</div>

<script>
    function editRecords(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{url('org/org_contact/edit/')}}" + '/' + id,
            method: "POST",
            contentType: 'application/json',
            success: function (data) {
                // console.log(data);

            }
        });
    }

</script>
<script>
    $(function () {
        $(".datepicker").datepicker();
    });
</script>
<div id="to-print-area" style="position: fixed;top:0;left:0;width:100vw; height: 100vh; z-index: +999;background: white;">
</div>
<script>
    function get_cat_details(e) {
        var process_id = $(e).val();
        // alert(process_id);
        $.ajax({
            url: "{{url('report/get_cat')}}" + '/' + process_id,
            method: "get",
            contentType: 'application/json',
            success: function (data) {
                $("#category").html("");
                var to_append = "";
                if (data != null) {
                    to_append +=`<option value="">---Select---</option>`;
                    for (i = 0; i < data.length; i++) {
                        to_append += `<option value="` + data[i].id + `">` + data[i].category_name + `</option>`;
                    }
                }
                $("#category").append(to_append);
            }
        });
    }
    function printDiv() {
        $("#to-print-area").html($("#printable-area").html());
        window.print();
    }

    function form_reset()
    {
        document.getElementById('summary_report').reset();
    }
</script>