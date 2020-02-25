<style>
  hr.new2 {
    border-top: 1px dashed #000;
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
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Inventory Item</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="{{URL::to('#')}}">Item</a></li>
            <li class="active">Inventory Item</li>
          </ol>
        </div>
      </div>
      <hr class="new2">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-border card-info">
            <div class="card-header" style="background-image: linear-gradient(#e1f1f9, white);">
              <div class="card-body">
                <div class="row"><br><br><br>
                  <div class="col-md-12 col-sm-12 col-12">
                    @if(Auth::user()->id!=1)
                      @if(@$module_permission['is_add']=='yes')
                        <a href="{{url('inv_item/add')}}"><button id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" style="float:right; margin-top: 19px;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                      @endif
                    @else
                    <a href="{{url('inv_item/add')}}"><button id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" style="float:right; margin-top: 19px;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                    @endif
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead style="background: #b6e9ff;">
                        <tr>
                          <th>Item Code</th>
                          <th>Item Name</th>
                          <th>Item Category</th>
                          <th>Quantity</th>
                          <th>Age</th>
                          <th>Created Date</th>
                          <th class="action">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($inv_itemdata)
                        @foreach($inv_itemdata as $key=>$val)
                        <tr>
                          <td style="text-align: right;">{{$val->item_code}}</td>
                          <td style="text-align: right;">{{$val->item_name}}</td>
                          <td>{{$val->item_category_id}}</td>
                          <td class="rig">{{$val->quantity}} {{$val->uom_id}}</td>
                          <td style="text-align: right;"><?php $date = date('m/d/Y'); 
                                     $created_at =  $val->created_date;
                                     $age = abs(strtotime($date) - strtotime($created_at));
                                     $years = floor($age / (365*60*60*24));
                                    $months = floor(($age - $years * 365*60*60*24) / (30*60*60*24));
                                    $days = floor(($age - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                    ?>{{$months}} months : {{$days}} days</td>
                          <td style="text-align: right;">{{date('j M, Y',strtotime($val->created_date))}}</td>
                          <td class="actions">
                            @if(Auth::user()->id!=1)
                              @if(@$module_permission['is_read']=='yes')
                                <a href="{{url('inv_item/showView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye" style="color:green;"></i></a>
                              @endif
                              @if(@$module_permission['is_edit']=='yes')
                                <a href="{{url('inv_item/editView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                              @endif
                              @if(@$module_permission['is_delete']=='yes')
                                <a href="{{url('inv_item/deletedata/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" style="color:red;"></i></a>
                              @endif
                            @else
                            <a href="{{url('inv_item/showView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye" style="color:green;"></i></a>
                            <a href="{{url('inv_item/editView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                            <a href="{{url('inv_item/deletedata/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" style="color:red;"></i></a>
                            @endif
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
        </div>
      </div>
    </div>
  </div>
</div>