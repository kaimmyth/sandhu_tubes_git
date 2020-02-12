<!-- ==========css style change by shivani========== -->
<style>
	.side-menu.left {
		background: #0061af;
		-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
		box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
		position: absolute;
		top: 0px;
	}

	#sidebar-menu {
		background-color: #0061af;
		padding-bottom: 50px;
		width: 100%;
	}

	#sidebar-menu>ul>li>a {
		color: #ffffff;
		display: block;
		padding: 15px 25px;
	}

	.navbar-default {
		background-color: #0061af;
		border-radius: 0px;
		border: none;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		margin-bottom: 0px;
		padding: 0px;
		height: 70px;
	}

	.content-page>.content {
		margin-bottom: 60px;
		margin-top: 62px;
		padding: 20px 10px 15px 10px;
		background: #eaf4fd;
	}

	.breadcrumb>.active {
		color: #000000;
	}

	#sidebar-menu>ul>li>a.active {
		background: #262c32 !important;
		color: #fff;
		width: 95%;
		margin-left: 2%;
		border-radius: 4px;
	}

	#sidebar-menu ul ul li.active a {
		color: #ffffff;
	}

	#dashboard-row {
		width: 100%;
		margin-left: 0px;
		background: #b6e9ff;
		padding-right: 10px;
		margin-bottom: 10px;
		height: 46px;
		border-left: 5px solid #004e8c;
		border-right: 2px solid #004e8c;
	}

	body.fixed-left .side-menu.left {
		bottom: 50px;
		height: 96.1%;
		margin-bottom: -70px;
		margin-top: 0px;
		padding-bottom: 70px;
		position: fixed;
	}

	#icon-color {
		color: #d9c3ff;
		;
		font-size: 19px;
	}

	.table td,
	.table th {
		padding: 0.20rem;
		vertical-align: top;
		border-top: 1px solid #dee2e6;
		font-size: 13px;
		color: black;
		padding-left: 8px;
	}

	#sidebar-menu>ul>li>a.active.subdrop {
		background: #ffffff !important;
		width: 95%;
		margin-left: 2%;
		border-radius: 11px;
	}

	#sidebar-menu>ul>li>a.active.subdrop {
    background: #262c32 !important;
    width: 95%;
    margin-left: 2%;
    border-radius: 11px;
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
	}

	label {
		font-weight: 500;
		font-family: "Roboto", sans-serif;
		color: #003a69;
	}

	.table-striped>tbody>tr:nth-of-type(even) {
		background-color: #ffffff;
	}

	.table-striped>tbody>tr:nth-of-type(odd) {
		background-color: #e6e6e6;
	}

	#sidebar-menu ul ul a {
		color: #FFEB3B;
		display: block;
		padding: 10px 25px 10px 65px;
		font-size: 13px;
	}

	.modal .modal-dialog .modal-content {
		-moz-box-shadow: none;
		-webkit-box-shadow: none;
		border-radius: 2px;
		box-shadow: none;
		padding: 30px;
		background: #f2f9ff;

	}

	.modal-title {
		margin-bottom: 0;
		line-height: 1.5;
		color: #ffffff;
		font-weight: 200;
	}

	.modal .modal-dialog .modal-content .modal-header {
		border-bottom-width: 2px;
		margin: 0px;
		padding: 9px;
		padding-bottom: 9px;
		background-color: #3F51B5;
	}

	.modal-footer {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		-ms-flex-pack: end;
		justify-content: flex-end;
		padding: 1rem;
		border-top: 0px solid #e9ecef;
		*/ border-bottom-right-radius: .3rem;
		border-bottom-left-radius: .3rem;
	}

	.modal .modal-dialog .modal-content .modal-footer {
		padding: 0;
		padding-top: 0px;
	}

	#sidebar-menu>ul>li>a:hover {
		background: #383838;
		text-decoration: none;
	}

	#sidebar-menu ul ul a {
		color: #b6e9ff;
		display: block;
		padding: 10px 25px 10px 65px;
		font-size: 13px;
	}
</style>
<!-- ==========end of css style========== -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
	<div class="sidebar-inner slimscrollleft">
		<div class="user-details">
		</div>
		<?php 
		$module_id=Session::get('module_id');
	?>
		<!--- Divider -->
		<div id="sidebar-menu">
			@if(Auth::user()->users_role==1)
			<ul>
				<li>
					<a href="{{ URL::to('dashboard')}}" class="waves-effect"><i class="md md-home"></i>&nbsp;&nbsp;<span>DASHBOARD</span></a>
				</li>
				<li class="has_sub">
					<a href="#" class="waves-effect"><i class="fa fa-list" style="margin-left: 7px;" aria-hidden="true"></i>&nbsp;&nbsp; <span style="margin-left: 19px;">INVENTORY</span><span class="pull-right"><i class="md md-add"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="{{url('inv_item/listing')}}"><span>ITEMS</span></a></li>
						<li><a href="{{ url('category')}}">CATEGORIES</a></li>
						<li><a href="{{url('inventory/inventory-location')}}"><span>LOCATION</span></a></li>
						<li><a href="{{ url('uom_master')}}">UoM</a></li>
					</ul>
				</li>
				
				<li><a href="{{URL::to('Manufacturing/list')}}" class="waves-effect"><i class="fa fa-industry" style="margin-left: 4px;" aria-hidden="true"></i>&nbsp;&nbsp;<span style="margin-left: 21px;">MAUNFACTURING</span></a></li>
				<li class="has_sub">
					<a href="#" class="waves-effect"><i class="fa fa-building" style="margin-left: 7px;" aria-hidden="true"></i>&nbsp;&nbsp; <span style="margin-left: 19px;">ORGNIZATIONS</span><span class="pull-right"><i class="md md-add"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="{{url('organization/listing')}}"><span>ORGNIZATIONS</span></a></li>
						<li><a href="{{url('org/org_relationship')}}"><span>RELATIONSHIP</span></a></li>
						<li><a href="{{url('org/org_contact')}}"><span>CONTACT TYPE</span></a></li>
						<li><a href="{{url('org/org_designation')}}"><span>DESIGNATION</span></a></li>
					</ul>
				</li>
				<li><a href="{{URL::to('shipment/listing')}}" class="waves-effect"><i class="fa fa-truck" style="margin-left: 5px;" aria-hidden="true"></i>&nbsp;&nbsp;<span style="margin-left: 21px;">SHIPMENT</span></a></li>
				@if(Auth::user()->users_role==1)
				<li class="has_sub">
					<a href="#" class="waves-effect"><i class="ion-settings"></i>&nbsp;&nbsp;SETTINGS<span class="pull-right"><i class="md md-add"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="{{url('convertion')}}"><span>CONVERTIONS</span></a></li>
						<li><a href="{{ url('department')}}">DEPARTMENT</a></li>
						<li><a href="{{ url('users')}}">USERS</a></li>
						<!-- <li><a href="{{ url('organization/listing')}}">ORGNIZATIONS</a></li> -->
						<!--<li><a href="{{ url('subdepartment')}}">SUB-DEPARTMENTS</a></li>-->
				</li>
				@endif
			</ul>
			@else
			<ul>
				@if(in_array(1, $module_id))
				<li>
					<a href="{{ URL::to('dashboard')}}" class="waves-effect"><i class="md md-home"></i>&nbsp;&nbsp;<span>DASHBOARD</span></a>
				</li>
				@endif
				@if(in_array(2, $module_id))
				<li class="has_sub">
					<a href="#" class="waves-effect"><i class="fa fa-list" style="margin-left: 7px;" aria-hidden="true"></i>&nbsp;&nbsp; <span style="margin-left: 19px;">INVENTORY</span><span class="pull-right"><i class="md md-add"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="{{url('inv_item/listing')}}"><span>ITEMS</span></a></li>
						<li><a href="{{ url('category')}}">CATEGORIES</a></li>
						<li><a href="{{url('inventory/inventory-location')}}"><span>LOCATION</span></a></li>
						<li><a href="{{ url('uom_master')}}">UoM</a></li>
					</ul>
				</li>
				@endif
				@if(in_array(3, @$module_id))
				<li><a href="{{URL::to('Manufacturing/list')}}" class="waves-effect"><i class="fa fa-industry" style="margin-left: 4px;" aria-hidden="true"></i>&nbsp;&nbsp;<span style="margin-left: 21px;">MAUNFACTURING</span></a></li>
				
				@endif
				@if(in_array(4, @$module_id))
				<!-- <li><a href="{{URL::to('organization/listing')}}" class="waves-effect"><i class="fa fa-building" style="margin-left: 7px;" aria-hidden="true"></i>&nbsp;&nbsp;<span style="margin-left: 24px;">ORGNIZATIONS</span></a></li> -->
				<li class="has_sub">
					<a href="#" class="waves-effect"><i class="fa fa-building" style="margin-left: 7px;" aria-hidden="true"></i>&nbsp;&nbsp; <span style="margin-left: 19px;">ORGNIZATIONS</span><span class="pull-right"><i class="md md-add"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="{{url('organization/listing')}}"><span>ORGNIZATIONS</span></a></li>
						<li><a href="{{url('org/org_relationship')}}"><span>RELATIONSHIP</span></a></li>
						<li><a href="{{url('org/org_contact')}}"><span>CONTACT TYPE</span></a></li>
						<li><a href="{{url('org/org_designation')}}"><span>DESIGNATION</span></a></li>
					</ul>
				</li>
				@endif
				@if(in_array(5, @$module_id))
				<li><a href="{{URL::to('shipment/listing')}}" class="waves-effect"><i class="fa fa-truck" style="margin-left: 5px;" aria-hidden="true"></i>&nbsp;&nbsp;<span style="margin-left: 21px;">SHIPMENT</span></a></li>
				@endif
				@if(in_array(6, @$module_id))
				<li class="has_sub">
					<a href="#" class="waves-effect"><i class="ion-settings"></i>&nbsp;&nbsp;SETTINGS<span class="pull-right"><i class="md md-add"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="{{url('convertion')}}"><span>CONVERTIONS</span></a></li>
						<li><a href="{{ url('department')}}"> DEPARTMENT</a></li>
                        <li><a href="{{ url('users')}}">USERS</a></li>
						
						<!-- <li><a href="{{ url('organization/listing')}}">ORGNIZATIONS</a></li> -->
						<!--<li><a href="{{ url('subdepartment')}}">SUB-DEPARTMENTS</a></li>-->
				</li>
				@endif

			</ul>
			@endif
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->