<style>
  hr.new2 {
    border-top: 1px dashed #000;
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
            <li><a href="{{URL::to('home')}}">Item</a></li>
            <li class="active">Inventory Item</li>
          </ol>
        </div>
      </div>
      <hr class="new2">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-border card-info">
            <div class="card-header" style="background-image: linear-gradient(#e1f1f9, white);">
              <div class="card-body" style="margin-top: -15px;">
                <a href="{{url('inv_item/add')}}"><button id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" style="float:right; margin-top: 19px;"><i class="md md-add-circle-outline"></i> Add</button></a>
              </div>
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead style="background: #b6e9ff;">
                  <tr>
                    <th>Item Name</th>
                    <th>Item Code</th>
                    <th>Item Category</th>
                    <th>Quantity</th>
                    <th>Unit of M</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($inv_itemdata)
                    @foreach($inv_itemdata as $key=>$val)
                    <tr>
                      <td>{{$val->item_name}}</td>
                      <td>{{$val->item_code}}</td>
                      <td>{{$val->item_category_id}}</td>
                      <td>{{$val->quantity}}</td>
                      <td>{{$val->uom_id}}</td>
                      <td class="actions">
                        <a href="{{url('inv_item/showView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye"></i></a>
                        <a href="{{url('inv_item/editView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                        <a href="{{url('inv_item/deletedata/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
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