<style>
  hr.new2 {
    border-top: 1px dashed #000;
  }

  .card {
    -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    border-radius: 0px;
    border: 0px solid whitesmoke;
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }
</style>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Update Inventory Item
            <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="{{URL::to('home')}}">Item</a></li>
            <li class="active">Edit Inventory Item</li>
          </ol>
        </div>
      </div>
      <hr class="new2">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="border-left: 3px solid #386900;box-shadow: 4px 4px #b1b1b1;">
            <div class="card-header" style="background: linear-gradient(to left, #6e5e5c, #ffffff 50%, #ffffff, #ffffff 75%);">
              <div class="card-body">

                <form action="{{url('inv_item/editStore')}}" method="post" id="FormValidation" required="" aria-required="true" enctype="multipart/form-data">
                  <div class="row gutters justify-content-left">
                      @csrf
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="row">
                              <input type="hidden" name="item_id"value="{{$inv_itemdata->id}}">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="field-4" class="control-label">Item Code</label>
                                  <input type="text" class="form-control" name="item_code" id="item_code" value="{{$inv_itemdata->item_code}}" placeholder="Item Code" required aria-required="true">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="field-4" class="control-label">Item Name</label>
                                  <input type="text" class="form-control" name="item_name" id="item_name" value="{{$inv_itemdata->item_name}}" placeholder="Item Name" required aria-required="true">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="field-4" class="control-label">Item Category</label>
                                  <select class="form-control" name="item_category" id="item_category">
                                    @foreach($categorytData as $key=>$val)
                                    <option value="{{$val->id}}" @if(@$val->id==@$inv_itemdata->item_category_id ?? ''){{'selected'}} @endif>{{$val->category_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>

                            </div>
                            <div class="row">

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="field-4" class="control-label">Quantity</label>
                                  <input type="text" class="form-control" name="quantity" id="quantity" value="{{$inv_itemdata->quantity}}" placeholder="Quantity" required aria-required="true">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="field-4" class="control-label">UoM</label>
                                  <select class="form-control" name="uom" id="uom" required  aria-required="true">
                                    @foreach($uomData as $key=>$val)
                                    <option value="{{$val->id}}" @if(@$val->id==@$inv_itemdata->uom_id ?? ''){{'selected'}} @endif>{{$val->uom_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="new2">
                  </div>
                  <div class="col-md-12" style="    text-align: left; margin-bottom: 6px;">
                    <button type="submit" class="btn btn-success waves-effect waves-light m-b-5">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>