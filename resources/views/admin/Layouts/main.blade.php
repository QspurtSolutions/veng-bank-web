<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- Bootstrap CSS -->
	<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<!--plugins-->
	<link href="{{ asset('admin/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

	<link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
	<title>Vengara Service Co-operative Bank</title>
	@stack('css')
</head>

<body class="bg-theme bg-theme1">



	<div class="wrapper">
		@include('admin.Layouts.header')
		@include('admin.Layouts.menu')
		<div class="page-wrapper">
			<div class="page-content">



				@yield('content')



			</div>
		</div>
	</div>



	
@push('script')

<script>

  
document.getElementById('whats-chat').addEventListener("mouseover", showchatbox);
document.getElementById('chat-top-right').addEventListener("click", closechatbox);
document.getElementById('send-btn').addEventListener("click", sendmsg);
window.addEventListener("load", showchatboxtime);
function showchatbox(){
document.getElementById('chat-box').style.right='8%'
}
function closechatbox(){
document.getElementById('chat-box').style.right='-500px'


}
function showchatboxtime(){
setTimeout(launchbox,5000)
}
function launchbox(){
document.getElementById('chat-box').style.right='8%'

}
function sendmsg(){
var msg = document.getElementById('whats-in').value;
var relmsg = msg.replace(/ /g,"%20");
 window.open('https://api.whatsapp.com/send?phone=99999999999&text='+relmsg,'_blank');

}
</script>


@endpush









</body>
<!--end page wrapper -->
<!--start overlay-->
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/input-tags/js/tagsinput.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/app.js') }}"></script>


@stack('js')
@stack('script')
</html>