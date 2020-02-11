<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i
                                class="ion-arrow-right-b"></i> &nbsp;&nbsp; View Customer Info/ <a href="javascript::void(0);"
                                onclick="history.back();">Back</a></h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(URL::to('land/customer')); ?>">Customer</a></li>
                        <li class="active">View Customer</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-1" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                <span class="d-none d-sm-block">Basic Information</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-1" data-toggle="tab" href="#nav-material" role="tab" aria-controls="profile-1" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                <span class="d-none d-sm-block">Material</span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" id="message-tab-1" data-toggle="tab" href="#profile" role="tab" aria-controls="message-1" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span> <?php if($edit_company->company_type!='proprietorship'): ?>
                                <span class="d-none d-sm-block">Director</span> <?php endif; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="setting-tab-1" data-toggle="tab" href="#message" role="tab" aria-controls="setting-1" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span> <?php if($edit_company->company_type!='proprietorship'): ?>
                                <span class="d-none d-sm-block">ShareHolder</span> <?php endif; ?>
                            </a>

                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                            <div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Type :
                                            </label>
                                            <span style="text-transform: uppercase;"><?php echo e(@$edit_company->company_type); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Name :</label>
                                            <?php echo e($edit_company->company); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Registration No :</label>
                                            <?php echo e($edit_company->company_reg_no); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group no-margin">
                                            <label for="field-7" class="control-label">Unit Address :</label>
                                            <?php echo e($edit_company->address); ?>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <?php if($edit_company->industry_id): ?>
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Industry :
                                            </label>
                                        <?php 
                                            $industries =DB::table('industries')->where('id',$edit_company->industry_id)->first('industires_name');
                                            ?>
                                            <?php echo e(@$industries->industires_name); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Turn Over :</label>
                                            <?php echo e($edit_company->turn_over); ?>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Number of Employees :</label>
                                            <?php echo e($edit_company->number_of_employees); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="    margin-top: -0em;">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Established Date :</label>
                                            <?php echo e($edit_company->established_date); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <br>
                                        <br>

                                    </div>
                                </div>
                                <!--end of row-->

                                <!-- Start LTD & Proprietorship -->
                            </div>

                           <?php if($editData_comp): ?>
                            <div id="proprietorship">
                                <div class="row" id="s_f_name">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">First Name :-
                                            </label>
                                            <?php echo e(@$editData_comp->f_name); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-2" class="control-label">Last Name :-
                                            </label>
                                            <?php echo e($editData_comp->l_name); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-3" class="control-label">Designation :-</label>
                                            <?php echo e($editData_comp->occupation); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-4" class="control-label">DOB :-
                                            </label>
                                            <?php echo e($editData_comp->dob); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-5" class="control-label">Contact :-
                                            </label>
                                            <?php echo e($editData_comp->mobile); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-4" class="control-label">Land Line No :-
                                            </label>
                                            <?php echo e($editData_comp->landline_no); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group no-margin">
                                            <label for="field-6" class="control-label">Email :-
                                            </label>
                                            <?php echo e($editData_comp->email); ?>

                                        </div>
                                    </div>

                                    <div class="col-md-4" id="s_gender">
                                        <label for="field-1" class="control-label">Gender :-</label>
                                        <?php echo e(@$editData_comp->gender); ?>

                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-left: -10px;">
                                    <div class="form-group">
                                        <label for="field-7" class="control-label">Address :-
                                        </label>
                                        <?php echo e($editData_comp->address); ?>

                                    </div>
                                </div>

                            </div>
                            <?php endif; ?>

                        </div>
                        <div class="tab-pane fade" id="nav-material" role="tabpanel" aria-labelledby="nav-material-tab">
                     
                            <div class="row">
                            <?php if(count($input_detailsArray)!=0): ?> 
                                <div class="col-md-5">
                                    <table class="table">
                                        <thead>
                                             <label for="input_materials" class="control-label">Input Materials :-
                                            </label>
                                        </thead>
                                        <tbody id="get_input_materials">
                                            <?php if(count($input_detailsArray)!=0): ?> 
                                            <?php $__currentLoopData = $input_detailsArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value_input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                            $input_details_final =DB::table('materials')->where('id',$value_input)->first();
                                            ?>
                                                <br><?php echo e(@$input_details_final->material_name); ?> <br> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                               
                               
                                <?php endif; ?>
                                

                                <?php if(count($waste_materialsArray)!=0): ?>
                                <div class="col-md-5">
                                    <table class="table">
                                        <thead>
                                            <!-- <tr>

                                                <th scope="col" colspan="2">Waste Materials</th>

                                            </tr> -->
                                            <label for="waste_materials" class="control-label">Waste Materials :-
                                            </label>
                                            

                                        </thead>
                                        <tbody id="get_waste_materials">
                                            <?php if(count($waste_materialsArray)!=0): ?> <?php $__currentLoopData = $waste_materialsArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value_materials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php 
                                            $input_details_final =DB::table('materials')->where('id',$value_materials)->first();
                                            ?>
                                             
                                                <br><?php echo e(@$input_details_final->material_name); ?> <br> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                              
                                <?php endif; ?>
                            </div>

                        </div>

                       
                        <div class="tab-pane fad" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php if(count($directorData)!=0): ?>
                            <div id="items">
                                <?php $__currentLoopData = @$directorData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value_director): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">FirstName :-</label>
                                            <?php echo e($value_director->f_name); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">LastName :-</label>
                                            <?php echo e(@$value_director->l_name); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Designation :-</label>
                                            <?php echo e(@$value_director->occupation); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group no-margin">
                                            <label for="field-7" class="control-label">Address :-</label>
                                            <?php echo e(@$value_director->location); ?>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">DOB :-</label>
                                            <?php echo e(@$value_director->dob); ?>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Contact :-</label>
                                            <?php echo e(@$value_director->mobile); ?>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Email Id :-</label>
                                            <?php echo e(@$value_director->email); ?>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">ShareValue :-</label>
                                            <?php echo e(@$value_director->svalue); ?>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Share Value(%) :-</label>
                                            <?php echo e(@$value_director->svalue_percentage); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="field-1" class="control-label">Gender :-</label>
                                        <?php echo e(@$value_director->gender); ?>

                                    </div>

                                </div>
                                <hr style="height:50px;">
                                <!--end of row-->
                                <!-- </div> -->
                                <!--end of div>-->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php else: ?>
                            <span style="color:red;">No Record Found!!</span>
                            <?php endif; ?>
                            <!-- </div> -->
                        </div>
                      
                      

                        <!--end of third tabs-->
                        <!--end of director tabs-->

                        <!--start of shareholder tab-->
                        
                        <div class="tab-pane fad" id="message" role="tabpanel" aria-labelledby="message-tab">
                            <?php if(count($shareholderData)!=0): ?>
                            <div id="item" style="margin-top: 1em; margin-left:13px;">
                                <div class="form-group row delete_info">
                                    <?php $__currentLoopData = $shareholderData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row" style="width: 100%;">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">First Name :
                                                        </label>

                                                        <?php echo e(@$value->f_name); ?>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Last Name :
                                                        </label>
                                                        <?php echo e(@$value->l_name); ?>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Designation :</label>
                                                        <?php echo e(@$value->occupation); ?>

                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">DOB :</label>
                                                        <?php echo e(@$value->dob); ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Contact :</label>
                                                        <?php echo e(@$value->mobile); ?>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Email Id :
                                                        </label>
                                                        <?php echo e(@$value->email); ?>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Share Value :
                                                        </label>
                                                        <?php echo e(@$value->svalue); ?>

                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Share Value (%) :
                                                        </label>
                                                        <?php echo e(@$value->svalue_percentage); ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-left: 1px;">
                                                <label for="field-1" class="control-label">Gender :</label>
                                                <?php echo e(@$value->gender); ?>

                                            </div>
                                            <br>

                                            <div class="form-group no-margin">
                                                <label for="field-7" class="control-label">Address :</label>
                                                <?php echo e(@$value->location); ?>

                                            </div>
                                            <hr style="height:50px;">
                                        </div>

                                    </div>

                                    <!-- </div> -->

                                    <!-- </div> -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                                <!--end of fourth tabs-->
                                <!--end of shareholder tab-->

                            </div>
                            <?php else: ?>
                            <span style="color:red;">No Record Found!!</span>
                            <?php endif; ?>

                        </div>
                       
                        <!--end of tab content-->
                    </div>
                </div>
                <!--end of tab-row-->

            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\sandhu_tubes_git\resources\views/customer/view_company_customer.blade.php ENDPATH**/ ?>