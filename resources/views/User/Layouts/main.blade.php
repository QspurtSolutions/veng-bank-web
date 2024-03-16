<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('/admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('/admin/assets/plugins/input-tags/css/tagsinput.css')}}"  rel="stylesheet" />
	<link href="{{asset('/admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('/admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('/admin/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('/admin/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('/admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('/admin/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('/admin/assets/css/icons.css')}}" rel="stylesheet">
	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
	<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		$('.ckeditor').ckeditor();
		});
	</script>
</head>
<body class="bg-theme bg-theme1">
	<div class="wrapper">
		@include('User.Layouts.header')
		@include('User.Layouts.menu')
   	<div class="page-wrapper">
	<div class="page-content">

      @yield('content')

	</div>
</div>
</div>
<!--end page wrapper -->
<!--start overlay-->
	<script src="{{asset('/admin/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/admin/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('/admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('/admin/assets/plugins/input-tags/js/tagsinput.js')}}"></script>
	<script src="{{asset('/admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('/admin/assets/js/app.js')}}"></script>
	@stack('js')
	@stack('script')
</body>
</html>