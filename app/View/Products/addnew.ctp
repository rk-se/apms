<!--
 =======================================================
 This addnew.ctp file is used to create the new Product.
 =======================================================
-->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="/products">Products</a>
				</li>
				<li class="active">addnew</li>
			</ul>
			<!-- /.breadcrumb -->
			<a href="/products/index" class="btn btn-white btn-primary pull-right"><i class="ace-icon fa fa-arrow-left bigger-130" title="Back to Products"></i></a>
		</div>
		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">
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
					<div class="" id="main-widget-container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1">
								<div class="widget-box ui-sortable-handle" id="widget-box-1">
									<div class="widget-header">
										<h5 class="widget-title">Product Details</h5>
										<div class="widget-toolbar">
											<a href="#" data-action="collapse">
											<i class="ace-icon fa fa-chevron-up"></i>
											</a>
										</div>
									</div>
									<div class="widget-body">
										<div class="widget-main">
											<div class="row">
												<div class="col-xs-12">
													<?php echo $this->Form->Create('Item', array('url'=>'/products/addnew', 'id'=>'newProduct', 'class'=>'form-horizontal', 'role'=>"form", 'enctype'=>'multipart/form-data'));?>
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name:</label>
														<div class="col-sm-9">
															<?php echo $this->Form->input('name', array('div'=>false, 'label'=>false, 'class'=>'col-xs-10 col-sm-5', 'placeholder' => 'Product Name', 'type' => 'text', 'required'=>'required'));?>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> SKU:</label>
														<div class="col-sm-9">
															<?php echo $this->Form->input('sku', array('div'=>false, 'label'=>false, 'class'=>'col-xs-10 col-sm-5', 'placeholder' => 'SKU', 'type' => 'text',
															'required'=>'required',
															"maxlength"=>"8",
															"minlength"=>"6", 
															'title' => 'SKU must be unique.'));?>
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right"> Status:</label>
														<div class="col-sm-4">
															<?php echo $this->Form->input('status', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'type' => 'select', 'options'=> array(''=>'--Please Select--', '1' => 'Available', '0' => 'Not Available')));?>
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right"> Description:</label>
														<div class="col-sm-4">
															<?php echo $this->Form->input('description', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'placeholder' => 'Description', 'type' => 'textarea', 'cols'=>"30", 'rows'=>"3"));?>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right"> Type:</label>
														<div class="col-sm-4">
															<?php echo $this->Form->input('category_id', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'type' => 'select', 'options'=> $categories, 'empty'=>'-- Please Select --'));?>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Price:</label>
														<div class="col-sm-9">
															<?php echo $this->Form->input('price', array('div'=>false, 'label'=>false, 'class'=>'col-xs-10 col-sm-5', 'placeholder' => 'Price', 'type' => 'number', 'maxlength'=> '5', 'required'=>'required',
															'min' => '1'));?>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Weight:</label>
														<div class="col-sm-9">
															<?php echo $this->Form->input('weight', array('div'=>false, 'label'=>false, 'class'=>'col-xs-10 col-sm-5', 'placeholder' => 'Weight', 'type' => 'number', 'maxlength'=> '5', 'required'=>'required',
															'min' => '1'));?>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right"> Color:</label>
														<div class="col-sm-4">
															<?php echo $this->Form->input('color', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'type' => 'select', 
																'options'=> array(''=>'--Please Select--',
																'blue' => 'Blue',
																'gold' => 'Gold',
																'grey' => 'Grey',
																'red'  => 'Red')));?>
														</div>
													</div>
													
													<div class="clearfix form-actions">
														<div class="col-md-offset-3 col-md-9">
															<button class="btn btn-info" type="submit" id="saveProduct" title="Save Product">
																<i class="ace-icon fa fa-check bigger-110"></i>
																Save
															</button>
															&nbsp; &nbsp; &nbsp;
															<button class="btn" type="reset" title="Reset">
																<i class="ace-icon fa fa-undo bigger-110"></i>
																Reset
															</button>
														</div>
													</div>
													<?php echo $this->Form->end(); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- PAGE CONTENT ENDS -->
				</div>
				<!-- /.col -->
			</div>
		</div>
		<!-- /.page-content -->
	</div>
</div>

<div class="modal fade" id="validateSKU" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                	Attention!!!
                </h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                	SKU already exists, Please enter another SKU.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php 
echo $this->Html->script(array('/assets/js/jquery.validate.min'));
?>
			
<script>
$(document).ready(function() {
	//Validate the SKU for duplicte checking.
	$("#ItemSku").on("focusout", function(e) {
		var sku = $("#ItemSku").val();
		if(sku.length > 6) {
			var request = $.ajax({
							  url: "/products/validateSku",
							  type: "POST",
							  data: { sku : sku }
							});
			request.done(function(msg) {
				if(msg == 0){
					$("#validateSKU").modal('toggle');
					$("#saveProduct").attr("disabled", "disabled")
				} else if(msg == 1) {
					$("#validateSKU").modal('hide');
					$("#saveProduct").attr("disabled", false)
				}
			});
		}
	});
});
$('#newProduct').validate({
	errorElement: 'div',
	errorClass: 'help-block',
	focusInvalid: false,
	ignore: "",
	
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