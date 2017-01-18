<!DOCTYPE html>
<html lang="en">
<head>
	@section('head')
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}plugins/iCheck/flat/blue.css">
		<!-- Date Picker -->
		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}plugins/datepicker/datepicker3.css">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}plugins/daterangepicker/daterangepicker-bs3.css">
		<!-- jQuery 2.2.0 -->
		<script src="{{env('FILE_PATH_CUSTOM')}}plugins/jQuery/jQuery-2.2.0.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  		<!-- DataTables -->
  		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}plugins/datatables/dataTables.bootstrap.css">
  		<!-- Select2 -->
  		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}plugins/select2/select2.min.css">
  		<!-- Theme style -->
		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}dist/css/skins/_all-skins.min.css">
		<!-- Bootstrap 3.3.6 -->
		<script src="{{env('FILE_PATH_CUSTOM')}}bootstrap/js/bootstrap.min.js"></script>

	@yield('addHead')
</head>

<body class="hold-transition skin-blue sidebar-mini skin-red fixed">
	<div class="modal fade" tabindex="-1" role="dialog" id="prompt_modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">System Message...</h4>
	      </div>
	      <div class="modal-body">
	        <p id="mdl_msg"></p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	    <!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
	</div>
	<script type="text/javascript">
		function promptMsg($result,$message)
		{
			$("#mdl_msg").text($message);
			$("#prompt_modal").removeClass("modal-danger");
			$("#prompt_modal").removeClass("modal-success");
			if($result == "success"){
				$("#prompt_modal").addClass("modal-success");
			}
			else
			{
				$("#prompt_modal").addClass("modal-danger");
			}

			$("#prompt_modal").modal("show");
		}
		function promptConfirmation($message)
		{
			//$("#mdl_confirmation_msg").text($message);
			$('body').append('<div class="modal fade modal-info" tabindex="-1" role="dialog" id="prompt_confirmation">\
								  <div class="modal-dialog">\
								    <div class="modal-content">\
								      <div class="modal-header">\
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
								          <span aria-hidden="true">&times;</span></button>\
								        <h4 class="modal-title">Comfirmation Message...</h4>\
								      </div>\
								      <div class="modal-body">\
								        <p id="mdl_confirmation_msg">'+$message+'</p>\
								      </div>\
								      <div class="modal-footer">\
								        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>\
								        <button class="btn btn-outline" type="button" data-dismiss="modal" id="btnYes">Save changes</button>\
								      </div>\
								    </div>\
								  </div>\
								</div>');
			$("#prompt_confirmation").modal("show");
		}
	    $(document).on("hidden.bs.modal","#prompt_confirmation",function(){
			$(this).remove();
		});
		/*
		function promptConfirmation($message)
		{
			$("#mdl_confirmation_msg").text($message);
			$("#prompt_confirmation").modal("show");
		}*/

	</script>
	@if(Session::has('success'))
		<script type="text/javascript">
			//promptMsg('success',"{{Session::get('success')}}");
			$("body").append('<div class="modal fade" tabindex="-1" role="dialog" id="alert_success">\
								  	<div class="modal-dialog">\
								    	<div class="alert alert-success alert-dismissible">\
							                <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>\
							                <h4><i class="icon fa fa-check"></i> Success!</h4>\
							                {{Session::get('success')}}\
							             </div>\
								  	</div>\
								</div>');
			$("#alert_success").modal("show");
		</script>
	@elseif (Session::has('fail'))
		<script type="text/javascript">
			//promptMsg('fail',"{{Session::get('fail')}}");
			$("body").append('<div class="modal fade" tabindex="-1" role="dialog" id="alert_success">\
								  	<div class="modal-dialog">\
								    	<div class="alert alert-danger alert-dismissible">\
							                <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>\
							                <h4><i class="icon fa fa-check"></i> Failed!</h4>\
							                {{Session::get('success')}}\
							             </div>\
								  	</div>\
								</div>');
			$("#alert_success").modal("show");
		</script>
	@endif
	@yield('content')
	
	
	<!-- ./wrapper -->
	<!-- daterangepicker -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="{{env('FILE_PATH_CUSTOM')}}plugins/daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="{{env('FILE_PATH_CUSTOM')}}plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Slimscroll -->
	<script src="{{env('FILE_PATH_CUSTOM')}}plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- AdminLTE App -->
	<script src="{{env('FILE_PATH_CUSTOM')}}dist/js/app.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{env('FILE_PATH_CUSTOM')}}dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="{{env('FILE_PATH_CUSTOM')}}plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="{{env('FILE_PATH_CUSTOM')}}plugins/datatables/dataTables.bootstrap.min.js"></script>
	<!-- Select2 -->
	<script src="{{env('FILE_PATH_CUSTOM')}}plugins/select2/select2.full.min.js"></script>

</body>
</html>