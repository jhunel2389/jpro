@extends('layouts.master')
@section('addHead')
  <title>Dashboard</title>
  <style type="text/css">
    @media screen and (min-width: 768px) {
  
      .category_info .modal-dialog  {width:300px;}

    }
  </style>
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
	        Product Category
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Products</li>
	      </ol>
	    </section>
	    
	    <!-- Main content -->
	    <section class="content">
	    	 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-tools pull-left">
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
              <table id="tbl_category" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>Slug</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($category as $categoryi)
                    <tr>
                      <td>{{$categoryi['id']}}</td>
                      <td>{{$categoryi['name']}}</td>
                      <td>{{$categoryi['description']}}</td>
                      <td>{{$categoryi['slug']}}</td>
                      <td>{{($categoryi['status'] == "1") ?  "active" :  "Disabled"}}</td>
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
  <script type="text/javascript">
  $(function () {
      var table = $('#tbl_category').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });

      $('#tbl_category tbody').on( 'click', 'tr', function () {
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
    
    var product_fields = '<form id="form_product" role="form" method="POST" action="{{ URL::Route('addCategory') }}" enctype ="multipart/form-data">\
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" >\
                              <input type="hidden" id="category_id" name="category_id" value="" >\
                              <div class="box-body">\
                                <p class="login-box-msg">Create category </p>\
                                <div class="row">\
                                  <div class="col-md-12">\
                                    <div class="form-group">\
                                      <label for="category_name">Category name</label>\
                                      <input type="text" class="form-control input-sm" id="category_name" name="category_name" placeholder="Enter category name" maxlength="25" required>\
                                    </div>\
                                    <div class="form-group">\
                                      <label for="category_description">Category Description</label>\
                                      <input type="text" class="form-control input-sm" id="category_description" name="category_description" placeholder="Enter category description" maxlength="25" required>\
                                    </div>\
                                    <div class="form-group">\
                                      <label for="category_slug">Category Slug</label>\
                                      <input type="text" class="form-control input-sm" id="category_slug" name="category_slug" placeholder="Enter category slug" maxlength="25" required>\
                                    </div>\
                                    <div class="form-group">\
                                          <label>Category Status</label>\
                                          <select class="form-control select2" style="width: 100%;" id="category_status" name="category_status" disabled required>\
                                            <option value="0">Disable</option>\
                                            <option value="1">Active</option>\
                                          </select>\
                                        </div>\
                                  </div>\
                                </div>\
                              </div>\
                              <button type="submit" hidden id="submit_form"></button>\
                            </form>';
    function modalForm()
    {
      $('body').append('<div class="modal fade category_info"  role="dialog" data-keyboard="false" data-backdrop="static">\
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
      $(".category_info").find(".modal-body").append(product_fields);
      $('.category_info').modal('show');
      $(".select2").select2(
      {
        minimumResultsForSearch: -1
      });
    });

    $(document).on("click",".btn_save",function(e){
      $(".category_info").find("form").find("#submit_form").click();
    });

    $(document).on("click",".btn_cancel_product",function(e){
      $('.category_info').modal('hide');
    });

    $(document).on("hidden.bs.modal",".category_info",function(){
      $(this).remove();
    });

    $(document).on("click","#editProduct",function(){
      var id = table.cell('.active', 0).data();
      modalForm();
      $('.category_info').modal('show');
      $(".category_info").find(".modal-body").append(product_fields);
      $(".btn_save").toggleClass('btn_save btn_edit').text('Update');
      $("#category_id").val(id);
      $('#category_status').prop("disabled", false);
      $.get('{{URL::Route('getCategoryInfo')}}',{ category: id}, function(data)
      {
          $("#category_name").val(data.name);
          $("#category_description").val(data.description);
          $("#category_slug").val(data.slug);
          $('#category_status')
                      .val(data.status) //select option of select2
                      .trigger("change"); 
      });
    });

    $(document).on("click",".btn_edit",function(e){
      $(".category_info").find("form").find("#submit_form").click();
    });
  });
  </script>
@endsection