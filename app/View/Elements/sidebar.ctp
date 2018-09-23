
<!-- ace scripts -->
<script src="/assets/js/ace-elements.min.js"></script>
<script src="/assets/js/ace.min.js"></script>
<div id="sidebar" class="sidebar responsive ace-save-state">
<script type="text/javascript">
	try{ace.settings.loadState('sidebar')}catch(e){}
</script>
<ul class="nav nav-list">
	<li class="">
		<a href="/products/dashboard">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Home </span>
		</a>
	</li>
	<li class="">	
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-desktop"></i>
			<span class="menu-text">
				Products
			</span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="/products">
					<i class="menu-icon fa fa-caret-right"></i>
					Products
				</a>
				<b class="arrow"></b>
			</li>
		</ul>
	</li>
</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
	<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>
