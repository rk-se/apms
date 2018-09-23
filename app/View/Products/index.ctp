<!--
 =========================================================
 This index.ctp file is used to display the Products list.
 =========================================================
-->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active">
					<i class="ace-icon fa fa-home home-icon"></i>
				Products</li>
			</ul><!-- /.breadcrumb -->
			<a href="/products/addnew" class="btn btn-white btn-primary pull-right"><i class="ace-icon glyphicon glyphicon-plus" title="Add Product"></i></a>
		</div>

		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">

				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="no-skin" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div><!-- /.pull-left -->

					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>
					</div><!-- /.pull-left -->
				</div><!-- /.ace-settings-box -->
			</div><!-- /.ace-settings-container -->

			<!-- <div class="page-header">
				<h1>
					Items
				</h1>
			</div --><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
						<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dynamic-table">
							<thead>
								<tr class="view-tab-tr">
									<th>Name</th>
									<th>SKU</th>
									<th>Price ($)</th>
									<th>Weight (gms)</th>
									<th>Type</th>
									<th>Color</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($items as $item){ ?>
								<tr class="child_check">
									<td><?php echo $item['Item']['name'];?></td>
									<td><?php echo $item['Item']['sku'];?></td>
									<td align="right"><?php echo "$ ".$item['Item']['price'];?></td>
									<td align="right"><?php echo $item['Item']['weight'];?></td>
									<td><?php echo $item['ItemCategory']['name'];?></td> 
									<td><?php echo ucfirst($item['Item']['color']);?></td>
									<td><?php echo ($item['Item']['status'] == 1 ? 'Available' : 'Not Available');?></td>
									<td>
										<div class="hidden-sm hidden-xs action-buttons">
											<a href="/products/update/<?php echo $item['Item']['id'];?>" class="green"><i class="ace-icon fa fa-pencil bigger-130" title="Edit"></i></a>
											<a href="/products/view/<?php echo $item['Item']['id'];?>" class="red"><i class="ace-icon fa fa-eye bigger-130" title="View"></i></a>
											<a href="/products/delete/<?php echo $item['Item']['id'];?>" class="red"><i class="ace-icon fa fa-trash bigger-130" title="Delete"></i></a>
										</div>
									</td>
								</tr>
								<?php }?>
							</tbody>
						</table>

					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->

<?php echo $this->Html->script(array('/assets/js/jquery.dataTables.min', '/assets/js/jquery.dataTables.bootstrap.min', '/assets/js/dataTables.buttons.min', '/assets/js/buttons.flash.min', '/assets/js/dataTables.select.min'));?>
<script>
jQuery(function($) {
	//initiate dataTables plugin
	var myTable = $('#dynamic-table').DataTable( {
		bAutoWidth: false,
		"aoColumnDefs": [{ "bSortable": false, "aTargets": [ 0,7 ] }],
		"columnDefs" : [ { targets: 0, sortable: false}],
		'aaSorting': [[1, 'asc']] // start to sort data in second column
    } );
} );
</script>