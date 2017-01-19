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
	</script>
@endsection