<style>
.form-group {
    margin-bottom: 5px;
}

#wrapper {
    overflow: hidden;
    width: 100%;
    background: #eaf4fd;
}

.plss1{float: left; position: relative; left: 5%; top: -25px; font-size: 20px;}

@media (max-width: 1280px) { 
.plss1 {
    float: left !important;
    position: relative;
    left: 8%;
    top: -25px;
    font-size: 20px;
}
}

@media (max-width: 1440px) { 

.plss1 {
    float: left !important;
    position: relative;
left: 8%;}

}

</style>


<div class="content-page">
    <div class="content">
        <!-- <div class="container-fluid"> -->
        <!-- <div action="{{ URL::to('land/customer/add')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off"> -->
        @csrf
        <div class="row" id="dashboard-row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;@if(@$editData->id!='') Update Customer Info @else Create Customer @endif / <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ URL::to('home') }}">Home</a></li>
                    <li><a href="">Customer</a></li>
                    <li class="active">Add Customer</li>
                </ol>
            </div>
        </div>
        <form action="{{url('add/company_website')}}" method="post" enctype="multipart/form-data">
            @csrf()
            <!-- <div class="tab-pane fade" id="company_website" role="tabpanel" aria-labelledby="nav-material-tab"> -->
            <div class="row">
                <div class="col-md-10">
                    <div class="col-md-4" style="float:left;">
                        <div class="form-group">
                            <input type="hidden" name="comp_id" value="{{$customer_details->id}}">
                            <label for="field-6" class="control-label">Unit Name<font color="red">*</font></label>
                            <input type="text" readonly class="form-control" name="company" id="company" value="{{$customer_details->company}}" required="" aria-required="true" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4" style="float:left;">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Unit Portal URL<font color="red">*</font></label>
                            <input type="text"   class="form-control" name="company_portal_url" id="company" value="{{$customer_details->company_portal_url}}" required="" aria-required="true" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4" style="float:left;">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Unit Description<font color="red">*</font></label>
                            <textarea name="company_description" class="form-control" required>{{$customer_details->company_description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="background: #eaf4fd;">
                
                   <h4 style="margin: 0px 0 6px 0;background: #b6e9ff;padding: 6px 10px;">Add Services In Your Website</h4>
                
                @if(count($company_services)!=0)
                @foreach($company_services as $key_services => $value_services)
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <input type="hidden" name="service_id[]" value="{{$value_services->id}}">
                                <label for="field-6" class="control-label">Service Name<font color="red">*</font></label>
                                <input type="text" class="form-control" name="service_name[]" id="service_name" required="" value="{{$value_services->services_name}}" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Heading<font color="red">*</font></label>
                                <input type="text" class="form-control" name="services_heading[]" required="" value="{{$value_services->services_heading}}" aria-required="true" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Description<font color="red">*</font></label>
                                <textarea class="form-control" name="services_description[]" value="{{$value_services->services_description}}">{{$value_services->services_description}}</textarea>
                                <!-- <input type="text" class="form-control"  name="services_description" id="services_description" required="" aria-required="true" placeholder=""> -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger delete-button-material">Remove</button>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <input type="hidden" name="service_id[]" >
                                <label for="field-6" class="control-label">Service Name<font color="red">*</font></label>
                                <input type="text" class="form-control" name="service_name[]" id="service_name" required="" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Heading<font color="red">*</font></label>
                                <input type="text" class="form-control" name="services_heading[]" required="" aria-required="true" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Description<font color="red">*</font></label>
                                <textarea class="form-control" name="services_description[]"></textarea>
                                <!-- <input type="text" class="form-control"  name="services_description" id="services_description" required="" aria-required="true" placeholder=""> -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger delete-button-material">Remove</button>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row" id="service_iteams_append"></div>
                <div class="col-md-6 plss1" style="float:left;">
                    <tr>
                        <span style="text-align:right;" colspan="2"><i class="fa fa-plus-circle" aria-hidden="true" style="color:green;" onclick="service_section();"></i></span>
                    </tr>
                </div>
            </div>
           
            <div class="card-body" style="background: #eaf4fd;">
                
                    <h4 style="margin: 0px 0 6px 0;background: #b6e9ff;padding: 6px 10px;">Add Product In Your Website</h4>
               
                @if(count($company_product)!=0)
                @foreach($company_product as $key_product=>$value_product)
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-4" style="float:left;">
                            <div class="form-group">
                                <input type="hidden" name="product_id[]" value="{{$value_product->id}}">
                                <label for="field-6" class="control-label">Product Name<font color="red">*</font></label>
                                <input type="text" class="form-control" name="product_name[]" value="{{$value_product['product_name']}}" id="service_name" required="" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Product Heading<font color="red">*</font></label>
                                <input type="text" class="form-control" name="product_heading[]" required="" value="{{$value_product['product_heading']}}" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Product Image<font color="red">*</font></label>
                                <input type="file" class="form-control" name="product_image[]"  aria-required="true" multiple="">
                                @if($value_product['product_heading']!="")
                                <input type="hidden" name="product_image_pre[]" value="{{$value_product['product_image']}}">
                                <a href="{{url('public/company_doc/'.$value_product['product_image'])}}">{{$value_product['product_image']}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Product Description<font color="red">*</font></label>
                                <textarea class="form-control" name="product_description[]" >{{$value_product['product_description']}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger delete-button-material">Remove</button>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="row">
                    <div class="col-md-10">
                        <div class="col-md-4" style="float:left;">
                            <div class="form-group">
                                <input type="hidden" name="product_id[]">

                                <label for="field-6" class="control-label">Product Name<font color="red">*</font></label>
                                <input type="text" class="form-control" name="product_name[]" id="service_name" required="" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Product Heading<font color="red">*</font></label>
                                <input type="text" class="form-control" name="product_heading[]" required="" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Product Image<font color="red">*</font></label>
                                <input type="file" class="form-control" name="product_image[]" required="" aria-required="true" placeholder="" multiple="">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6" style="float:left;">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Product Description<font color="red">*</font></label>
                                <textarea class="form-control" name="product_description[]"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger delete-button-material">Remove</button>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row" id="product_section_append" class="product_append">
                </div>
                <div class="col-md-6 plss1" style="float:left;">
                    <tr>
                        <span style="text-align:right;" colspan="2"><i class="fa fa-plus-circle" aria-hidden="true" style="color:green;" onclick="product_section();"></i></span>
                    </tr>
                </div>
            </div>
            <!-- </div>
            </div>   -->
            <!-- </div>
            </div> -->
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary" value="Submit" style=" padding: 9px 27px; font-size: 14px;">
            </div>
        </form>
    </div>
</div>
</div>
<script>
    function product_section() {
        var product_item = `<div class="col-md-10">
                            <div class="col-md-4" style="float:left;">
                                <div class="form-group">
                                    <input type="hidden" name="product_id[]">
                                    <label for="field-6" class="control-label">Product  Name<font color="red">*</font></label>
                                    <input type="text" class="form-control" name="product_name[]" id="service_name" required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4" style="float:left;">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Product  Heading<font color="red">*</font></label>
                                    <input type="text" class="form-control"  name="product_heading[]"  required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4" style="float:left;">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Product  Image<font color="red">*</font></label>
                                    <input type="file" class="form-control"  name="product_image[]"  required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="col-md-6" style="float:left;">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Product Description<font color="red">*</font></label>
                                    <textarea class="form-control" name="product_description[]"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <button type="button" class="btn btn-danger delete-button-material">Remove</button>
                            </div>
                        </div>
                    </div>`;
        $("#product_section_append").append(product_item);
    }
</script>
<script>
    function service_section() {
        var service_iteams = `<div class="col-md-10">
                            <div class="col-md-6" style="float:left;">
                                <div class="form-group">
                                    <input type="hidden" name="service_id[]" >
                                    <label for="field-6" class="control-label">Service  Name<font color="red">*</font></label>
                                    <input type="text" class="form-control"  name="service_name[]" id="service_name" required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6" style="float:left;">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Services Heading<font color="red">*</font></label>
                                    <input type="text" class="form-control"  name="services_heading[]"  required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="col-md-6" style="float:left;">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Services Description<font color="red">*</font></label>
                                    <textarea class="form-control" name="services_description"></textarea>
                                    <!-- <input type="text" class="form-control"  name="services_description[]" id="services_description" required="" aria-required="true" placeholder=""> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                            <button type="button" class="btn btn-danger delete-button-material">Remove</button>
                            </div>
                        </div>
                        `;
        $("#service_iteams_append").append(service_iteams);
    }
</script>
<script>
  $(document).ready(function() {
        $("body").delegate(".delete-button-material", "click", function() {
            // alert("fdsfsf");
            // $('.product_append').remove();
            $(this).closest(".row").remove();
        });
        $("body").delegate(".delete-button-material", "click", function() {
            $(this).closest(".row").remove();
        });
    });
</script>