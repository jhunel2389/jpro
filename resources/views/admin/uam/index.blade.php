@extends('layouts.master')
@section('addHead')
  <title>Dashboard</title>
@endsection

@section('content')
	<div class="wrapper">
		@include('admin.includes.header')
		@include('admin.includes.mainNav')
		  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        User Account Management
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Dashboard</li>
	      </ol>
	    </section>
	    
	    <!-- Main content -->
	    <section class="content">
	    	 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-tools pull-right">
                  <button class="btn btn-primary btn-sm add_product" type="button">
                    <i class="fa fa-plus"></i>
                    Add
                  </button>
                  <button id="editProduct" class="btn btn-info btn-sm " type="button" disabled>
                    <i class="fa fa-edit"></i>
                    Edit
                  </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_product" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{$user['user_id']}}</td>
                      <td>{{$user['first_name']}}</td>
                      <td>{{$user['last_name']}}</td>
                      <td>{{$user['email']}}</td>
                      @if($user['isAdmin'] == 1)
                      	<td class="status" data-id="{{$user['isAdmin']}}">Visitor</td>
                      @elseif($user['isAdmin'] == 2)
                      	<td class="status" data-id="{{$user['isAdmin']}}">Admin</td>
                      @else
						<td class="status" data-id="{{$user['isAdmin']}}">Super admin</td>
                      @endif
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	    </section>
	    <!-- /.content -->
	  </div>
	</div>
	<!-- /.content-wrapper -->
	@include('admin.includes.footer')
	@include('admin.includes.settingSidebar')
	<script>
		$(function () {
				 var table = $('#tbl_product').DataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});

	      $('#tbl_product tbody').on( 'click', 'tr', function () {
	        if ( $(this).hasClass('active') ) {
	          $(this).removeClass('active');
	          $('#editProduct').prop("disabled", true);
	        }
	        else {
	          table.$('tr.active').removeClass('active');
	          $(this).addClass('active');
	          $('#editProduct').prop("disabled", false);
	        }
	      });

	      var product_fields = '<form id="form_product" role="form" method="POST" action="{{ URL::Route('updateUser') }}" enctype ="multipart/form-data">\
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" >\
                              <div class="box-body">\
                                <div class="row">\
                                  <div class="col-md-12">\
                                    <div class="form-group">\
                                          <label>User Name</label>\
                                          <select class="form-control select2" style="width: 100%;" id="user" name="user" required>\
                                           	@foreach($newUsers as $newUser)
                                           	<option value="{{$newUser['user_id']}}">{{$newUser['first_name']}}, {{$newUser['last_name']}}</option>\
                                           	@endforeach
                                          </select>\
                                    </div>\
                                    <div class="form-group">\
                                          <label>Access Level</label>\
                                          <select class="form-control select2" style="width: 100%;" id="status" name="status" required>\
                                           	<option value="1">Visitor</option>\
                                            <option value="2">Admin</option>\
                                            <option value="3">Super Admin</option>\
                                          </select>\
                                    </div>\
                                  </div>\
                                </div>\
                              </div>\
                              <button type="submit" hidden></button>\
                            </form>';

			function modalForm()
			{
				$('body').append('<div class="modal fade uam_info" role="dialog" data-keyboard="true" data-backdrop="static">\
				                    <div class="modal-dialog">\
				                      <div class="modal-content">\
				                        <div class="modal-body">\
				                        </div>\
				                        <div class="modal-footer">\
				                          <button type="button" class="btn btn-primary btn_save">Save</button>\
				                          <button type="button" class="btn btn-default pull-right btn_cancel_product">Cancel</button>\
				                        </div>\
				                      </div>\
				                    </div>\
				                  </div>');
			}

			$(document).on("click",".add_product",function(){
				modalForm();
					$(".uam_info").find(".modal-body").append(product_fields);
					$('.uam_info').modal('show');
					$(".select2").select2();
			});

			$(document).on("click",".btn_cancel_product",function(e){
				$('.uam_info').modal('hide');
			});

			$(document).on("hidden.bs.modal",".uam_info",function(){
				$(this).remove();
			});

			$(document).on("click",".btn_save ",function(e){
				$(".uam_info").find("form").find("button").click();
			});

			$(document).on("click","#editProduct",function(){
				var id = table.cell('.active', 0).data();
				var fname = table.cell('.active', 1).data();
				var lname = table.cell('.active', 2).data();
        		modalForm();
        		$('.uam_info').modal('show');
        		$(".uam_info").find(".modal-body").append(product_fields);
        		$(".btn_save").text('Update');
        		$("#user").append('<option value="'+id+'">'+fname+', '+lname+'</option>');
        		var status = $('#tbl_product tbody').find('.active').find('.status').data("id");
        		$('#status')
                      .val(status) //select option of select2
                      .trigger("change");
        		$(".select2").select2(
		        {
		          minimumResultsForSearch: -1
		        });
			});

	  	});

		

		
	</script>
@endsection