<!--
 =============================================================
 This view.ctp file is used to update the Product information.
 =============================================================
-->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="/products">Products</a>
				</li>
				<li class="active">View <i class="ace-icon"></i> </li>
				<li class="active"><?php echo $item['Item']['name'];?></li>
			</ul>
			<!-- /.breadcrumb -->
			<a href="/products/update/<?php echo $item['Item']['id'];?>" class="btn btn-white btn-primary pull-right"><i class="ace-icon fa fa-pencil bigger-130" title="Update Product"></i></a>
			<a href="/products/addnew" class="btn btn-white btn-primary pull-right"><i class="ace-icon fa fa-plus bigger-130" title="New Product"></i></a>
			<a href="/products/index" class="btn btn-white btn-primary pull-right"><i class="ace-icon fa fa-arrow-left bigger-130" title="Back to Products"></i></a>
		</div>
		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">
				<!-- <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
					<i class="ace-icon fa fa-cog bigger-130"></i>
					</div> -->
				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-add-container">
							Inside
							<b>.container</b>
							</label>
						</div>
					</div>
					<!-- /.pull-left -->
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>
						<div class="ace-settings-item">
							<input class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" type="checkbox">
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>
					</div>
					<!-- /.pull-left -->
				</div>
				<!-- /.ace-settings-box -->
			</div>
			<!-- /.ace-settings-container -->
			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<div class="hr dotted"></div>
					<div class="">
						<div id="user-profile-2" class="user-profile">
							<div class="tabbable">
								<ul class="nav nav-tabs padding-18">
									<li class="active">
										<a data-toggle="tab" href="#home" aria-expanded="true">
										<i class="green ace-icon glyphicon glyphicon-gift bigger-110"></i>
										Products Details
										</a>
									</li>
								</ul>
								<div class="tab-content no-border padding-24">
									<div id="home" class="tab-pane active">
										<div class="row">
											<div class="col-xs-12 col-sm-9">
												<h4 class="blue">
													<span class="middle">
													<i class="red fa fa-product-hunt bigger-110" title="Product Name">  </i>
													<?php echo $item['Item']['name'];?></span>
												</h4>
												<div class="profile-user-info">
													<!--  <div class="profile-info-row">
														<div class="profile-info-name"> Name : </div>
														<div class="profile-info-value">
															<span><?php // echo $item['Item']['name'];?></span>
														</div>
													</div> -->
													<div class="profile-info-row">
														<div class="profile-info-name"> SKU : </div>
														<div class="profile-info-value">
															<span><?php echo $item['Item']['sku']?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Status : </div>
														<div class="profile-info-value">
															<span><?php echo ($item['Item']['status'] == 1 ? 'Available' : 'Not Available');?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Description : </div>
														<div class="profile-info-value">
															<span><?php echo $item['Item']['description']?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Type : </div>
														<div class="profile-info-value">
															<span><?php echo $item['ItemCategory']['name']?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Price : </div>
														<div class="profile-info-value">
														<i class="ace-icon glyphicon glyphicon-usd"></i> 
															<span><?php echo $item['Item']['price'];?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Weight : </div>
														<div class="profile-info-value">
														<i class="fa fa-balance-scale"></i> 
															<span><?php echo $item['Item']['weight']." gms";?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Color : </div>
														<div class="profile-info-value">
															<span><?php echo ucfirst($item['Item']['color'])?></span>
														</div>
													</div>
												</div>
											</div>
											<!-- /.col -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- PAGE CONTENT ENDS -->
				</div>
				<!-- /.col -->
			</div>
		</div>
		<!-- /.page-content -->
	</div>
</div>
<?php 
	echo $this->Html->css(array('/assets/css/bootstrap-datepicker3.min', '/assets/css/daterangepicker.min'));
	echo $this->Html->script(array('/assets/js/bootstrap-datepicker.min', '/assets/js/jquery.validate.min'));
	?>
<script>
	//link
	$('.date-picker').datepicker({
		autoclose: true,
		todayHighlight: true
	})
	//show datepicker when clicking on the icon
	.next().on(ace.click_event, function(){
		$(this).prev().focus();
	});
	
	$('#validation-form').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		ignore: "",
		rules: {
			email: {
				required: true,
				email:true
			}
		},
		messages: {
			email: {
				required: "Please provide a valid email.",
				email: "Please provide a valid email."
			}
		},
		
		
		highlight: function (e) {
			$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
		},
		
		success: function (e) {
			$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
			$(e).remove();
		},
		submitHandler: function (form) {
			return true;
		},
		invalidHandler: function (form) {
		}
	});
</script>

