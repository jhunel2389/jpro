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
	        Dashboard
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Dashboard</li>
	      </ol>
	    </section>
	    
	    <!-- Main content -->
	    <section class="content">
	    	 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_product" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
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
			$('#tbl_product').DataTable({
			  "paging": true,
			  "lengthChange": false,
			  "searching": true,
			  "ordering": true,
			  "info": true,
			  "autoWidth": false
			});
		});
	</script>
@endsection