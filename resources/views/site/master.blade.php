<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>High Fashion Website Template</title>

	{!! Html::style('website/css/style.css') !!}
	{!! Html::style('admin/bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('https://cdnjs.cloudflare.com/admin/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') !!}
	{!! Html::style('https://cdnjs.cloudflare.com/admin/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') !!}
	{!! Html::style('admin/dist/css/AdminLTE.min.css') !!}
	{!! Html::style('admin/dist/css/skins/_all-skins.min.css') !!}
	{!! Html::style('admin/plugins/iCheck/flat/blue.css') !!}
	{!! Html::style('admin/plugins/morris/morris.css') !!}
	{!! Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
	{!! Html::style('admin/plugins/datepicker/datepicker3.css') !!}
	{!! Html::style('admin/plugins/daterangepicker/daterangepicker-bs3.css') !!}
	{!! Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}


	
</head>
<body>
	<div class="header">
		<div>
			<a href="index.html" id="logo"><img src="website/images/logo.png" alt="logo"></a>
			<ul>
				<li class="selected">
					<a href="catogry">Home</a>
				</li>
				<li>
					<a href="addCatogry">Add Catogry</a>
				</li>
				<li>
					<a href="catogrycontrol">Catogry Control</a>
				</li>
				<li>
					<a href="collections.html">Collections</a>
					<ul>
						<li>
							<a href="collections.html">Women's</a>
						</li>
						<li>
							<a href="collections.html">Men's</a>
						</li>
						<li>
							<a href="/addCatogry">Add Catogry</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="locator.html">Store Locator</a>
				</li>
			</ul>
		</div>
		
	</div>

	 @yield('content')

	 <div class="footer">
		<div>
			<p>
				&#169; Saverio Salermo
			</p>
			<ul>
				<li>
					<a href="#">Privacy Policy</a>
				</li>
				<li>
					<a href="#">Terms And Conditons</a>
				</li>
			</ul>
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">Twitter</a> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">Facebook</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">Google+</a>
			</div>
		</div>
	</div>
	{!! Html::script('admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}
	{!! Html::script('admin/https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') !!}
	{!! Html::script('admin/bootstrap/js/bootstrap.min.js') !!}
	{!! Html::script('https://cdnjs.cloudflare.com/admin/ajax/libs/raphael/2.1.0/raphael-min.js') !!}
	{!! Html::script('admin/plugins/morris/morris.min.js') !!}
	{!! Html::script('admin/plugins/sparkline/jquery.sparkline.min.js') !!}
	{!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
	{!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
	{!! Html::script('admin/plugins/knob/jquery.knob.js') !!}
	{!! Html::script('admin/dist/js/pages/dashboard.js') !!}
	{!! Html::script('admin/dist/js/app.min.js') !!}
	{!! Html::script('admin/plugins/fastclick/fastclick.js') !!}
	{!! Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}
	{!! Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
	{!! Html::script('admin/plugins/datepicker/bootstrap-datepicker.js') !!}
	{!! Html::script('admin/plugins/daterangepicker/daterangepicker.js') !!}
	{!! Html::script('https://cdnjs.cloudflare.com/admin/ajax/libs/moment.js/2.11.2/moment.min.js') !!}
	{!! Html::script('admin/dist/js/demo.js') !!}

</body>
</html>