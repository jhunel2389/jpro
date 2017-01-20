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
              <h3 class="box-title">Product List</h3>
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
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{$user['user_id']}}</td>
                      <td>{{$user['first_name']}}</td>
                      <td>{{$user['last_name']}}</td>
                      <td>{{$user['email']}}</td>
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
	  	});

		var product_fields = '<form id="form_product" role="form" method="POST" action="{{ URL::Route('addProduct') }}" enctype ="multipart/form-data">\
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" >\
                              <div class="box-body">\
                                <div class="row">\
                                  <div class="col-md-12">\
                                    <div class="form-group">\
                                          <label>User Name</label>\
                                          <select class="form-control select2" style="width: 100%;" id="product_category" name="product_category" required>\
                                           	<option value="1">Staff</option>\
                                            <option value="2">Admin</option>\
                                            <option value="3">Super Admin</option>\
                                          </select>\
                                    </div>\
                                    <div class="form-group">\
                                          <label>Access Level</label>\
                                          <select class="form-control select2" style="width: 100%;" id="product_category" name="product_category" required>\
                                           	<option value="1">Staff</option>\
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
			$('body').append('<div class="modal fade product_info_add" role="dialog" data-keyboard="true" data-backdrop="static">\
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
				$(".product_info_add").find(".modal-body").append(product_fields);
				$('.product_info_add').modal('show');
				$(".select2").select2();
		});

		$(document).on("click",".btn_cancel_product",function(e){
			$('.product_info_add').modal('hide');
		});

		$(document).on("hidden.bs.modal",".product_info_add",function(){
			$(this).remove();
		});

		$(document).on("click",".btn_save",function(e){
			$(".product_info_add").find("form").find("button").click();
		});
	</script>
@endsection