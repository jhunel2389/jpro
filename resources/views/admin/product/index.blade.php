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
              <a class="btn btn-app add_product">
                <i class="fa fa-edit"></i> Add
              </a>
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
      var product_fields = '<form role="form">\
                              <div class="box-body">\
                                <div class="row">\
                                  <div class="col-md-6">\
                                    <div class="form-group">\
                                      <label for="product_name">Product name</label>\
                                      <input type="text" class="form-control input-sm" id="product_name" placeholder="Enter product name">\
                                    </div>\
                                    <div class="form-group">\
                                      <label for="product_category">Category</label>\
                                      <input type="text" class="form-control input-sm" id="product_category" placeholder="Enter product Category">\
                                    </div>\
                                    <div class="form-group">\
                                      <label for="product_price">Price</label>\
                                      <input type="text" class="form-control input-sm" id="product_price" placeholder="Enter product price">\
                                    </div>\
                                    <div class="form-group">\
                                      <label for="product_description">Description</label>\
                                      <textarea class="form-control input-sm" rows="3" id="product_description" style=" resize: none;"></textarea>\
                                    </div>\
                                  </div>\
                                  <div class="col-md-6 product_image_list" >\
                                    <div class="form-group col-xs-12">\
                                      <input type="file" id="file" multiple="multiple">\
                                    </div>\
                                    <div class="col-xs-12">\
                                      <a href="javascript:void(0)" class="thumbnail">\
                                        <img class="product_image_view" src="{{env('FILE_PATH_CUSTOM')}}img/placeholder-image.png" alt="...">\
                                      </a>\
                                    </div>\
                                  </div>\
                                </div>\
                              </div>\
                            </form>';

      $(document).on("click",".add_product",function(){
        //console.log('click');
        $('body').append('<div class="modal fade product_info_add" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">\
                            <div class="modal-dialog" style="width:645px;">\
                              <div class="modal-content">\
                                <div class="modal-body">\
                                </div>\
                                <div class="modal-footer">\
                                  <button type="submit" class="btn btn-primary">Save</button>\
                                  <button type="submit" class="btn btn-default pull-right">Cancel</button>\
                                </div>\
                              </div>\
                            </div>\
                          </div>');
        $(".product_info_add").find(".modal-body").append(product_fields);
        $('.product_info_add').modal('show');
      });

      $(document).on("change","#file",function(e){
        var fileCollection = new Array();
        var  files = e.target.files;
        $x = 0;
        $.each(files, function(i, file)
        {
          fileCollection.push(file);
          var reader = new FileReader();
          reader.readAsDataURL(file);
          reader.onload = function(e)
          {
            var template = 
            '<div class="col-xs-4">'+
              '<a href="javascript:void(0)" class="thumbnail">'+
                '<img src="'+e.target.result+'" alt="..." style="width: 120px;height: 60px;">'+
              '</a>'+
            '</div>';
            if($x == 0){
              $(".product_image_view").attr("src",e.target.result);
            }
            $('.product_image_list').append(template);
            $x++;
          };
        });
      });
		});
	</script>
@endsection