<div class="content-page">
   <div class="content">
      <div class="container-fluid">
         <!-- Page-Title -->
         <div class="row" id="dashboard-row">
            <div class="col-sm-12">
               <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Organization Summary</h4>
               <ol class="breadcrumb pull-right">
                  <li><a href="{{ URL::to('home') }}">Home</a></li>
                  <li><a href="{{URL::to('home')}}">Organization</a></li>
                  <li class="active">Organization Summary</li>
               </ol>
            </div>
         </div>
         <hr class="new2">
         <div class="row">
            <div class="col-md-12">
               <div class="card card-border card-info">
                  <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <a href="{{url('organization/add')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float: right;margin-top: 0px !important;">Add <i class="md md-add-circle-outline"></i></button></a>
                        <thead style="background: #b6e9ff;">
                           <tr>
                              <th>Organization Name</th>
                              <th>City, State</th>
                              <th>CIN</th>
                              <th>Revenue (in CR)</th>
                              <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-label="Action: activate to sort column ascending">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($statusdata)
                           @foreach($statusdata as $key=>$val)
                           <tr>
                              <td>{{$val->organization_name}}</td>
                              <td>{{$val->city}}, {{$val->state}}</td>
                              <td>{{$val->cin}}</td>
                              <td>{{$val->revenue}}</td>
                              <td class="actions">
                                 <a href="{{url('organization/showView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" onclick=""><i class="fa fa-eye"></i></a>
                                 <a href="{{url('organization/editView/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick=""><i class="fa fa-edit"></i></a>
                                 <a href="{{url('organization/deletedata/'.$val->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this Data?');"><i class="fa fa-trash"></i></a>
                              </td>
                           </tr>
                           @endforeach
                           @endif
                        </tbody>
                     </table>
                  </div>
                  <!-- end card-body -->
               </div>
            </div>
            <!-- container -->
         </div>
      </div>
   </div>
</div>
<!-- content -->

