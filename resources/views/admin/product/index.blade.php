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
                  <th>Id</th>
                  <th>Product name</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($allProducts as $product)
                    <tr>
                      <td>{{$product['id']}}</td>
                      <td>{{$product['name']}}</td>
                      <td>{{$product['description']}}</td>
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
			$('#tbl_product').DataTable({
			  "paging": true,
			  "lengthChange": false,
			  "searching": true,
			  "ordering": true,
			  "info": true,
			  "autoWidth": false
			});
      var product_fields = '<form role="form" method="POST" action="{{ URL::Route('addProduct') }}" enctype ="multipart/form-data">\
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" >\
                              <div class="box-body">\
                                <div class="row">\
                                  <div class="col-md-6">\
                                    <div class="form-group">\
                                      <label for="product_name">Product name</label>\
                                      <input type="text" class="form-control input-sm" id="product_name" name="product_name" placeholder="Enter product name" required>\
                                    </div>\
                                    <div class="row">\
                                      <div class="col-md-6">\
                                        <div class="form-group ">\
                                          <label for="product_name">Add price</label>\
                                          <div class="input-group">\
                                            <input id="input_price" name="input_price" type="text" placeholder="enter ..." class="form-control" aria-label="..." >\
                                            <div class="input-group-btn">\
                                              <button style="height:34px;" type="button" data-id="" class="btn btn-default btn_addPrice" >\
                                                <i class="fa fa-plus" aria-hidden="true"></i>\
                                              </button>\
                                            </div>\
                                          </div>\
                                        </div>\
                                        <div class="form-group">\
                                          <label>Category</label>\
                                          <select class="form-control select2" style="width: 100%;" id="product_category" name="product_category" required>\
                                            @foreach($category as $categoryi)\
                                            <option value="{{$categoryi['id']}}">{{$categoryi['name']}}</option>\
                                            @endforeach\
                                          </select>\
                                        </div>\
                                      </div>\
                                      <div class="col-md-6">\
                                        <div class="form-group">\
                                          <label>Choose price</label>\
                                          <select class="form-control select2" style="width: 100%;" id="product_price" name="product_price" required>\
                                          </select>\
                                        </div>\
                                      </div>\
                                    </div>\
                                    <div class="form-group">\
                                      <label for="product_description">Description</label>\
                                      <textarea class="form-control input-sm" rows="3" id="product_description" name="product_description" style=" resize: none;" required></textarea>\
                                    </div>\
                                  </div>\
                                  <div class="col-md-6 product_image_list" >\
                                    <div class="form-group col-xs-12">\
                                      <input type="file" id="file" name="product_image[]" multiple="multiple" required >\
                                    </div>\
                                    <div class="col-xs-12">\
                                      <a href="javascript:void(0)" class="thumbnail">\
                                        <img class="product_image_view" src="{{env('FILE_PATH_CUSTOM')}}img/placeholder-image.png" alt="...">\
                                      </a>\
                                    </div>\
                                  </div>\
                                </div>\
                              </div>\
                              <button type="submit" hidden></button>\
                            </form>';

      $(document).on("click",".add_product",function(){
        $('body').append('<div class="modal fade product_info_add" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">\
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
        $(".product_info_add").find(".modal-body").append(product_fields);
        $('.product_info_add').modal('show');
        $(".select2").select2(
        {
          minimumResultsForSearch: -1
        });
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
              '<a href="javascript:void(0)" class="thumbnail tn_small" data-img="'+e.target.result+'">'+
                '<img src="'+e.target.result+'" alt="..." style="width: 50px;height: 50px;">'+
              '</a>'+
            '</div>';
            if($x == 0){
              $(".product_image_view").attr("src",e.target.result);
            }
            $('.product_image_list').append(template);
            $x++;
          };
          $(".tn_small").focus();
        });
        
      });

      $(document).on("click",".thumbnail",function(e){
        var img = $(this).data("img")
        $(".product_image_view").attr("src",img);
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

      $(document).on("click",".btn_addPrice",function(){
        var amount = $('#input_price').val();
        var _token = $("input[name='_token']").val();
        var product_id = 0;
        if(amount != ''){
          $.ajax({
            type: "POST",
            url: 'http://jewerly.dev/admin/product/post_addPrice',
            dataType: "json",
            data: {'_token':_token,'amount':amount, 'id':product_id},
            success:function(data){
                console.log(data);
                $("#product_price").append('<option id="'+data.newAddId+'" value="'+data.newAddId+'">'+data.newAddPrice+'</option>');
                $('#input_price').val("");
                $('#product_price')
                    .val(data.newAddId) //select option of select2
                    .trigger("change");
            },
            error:function(){
            }
          });
        }else{
          $('#input_price').focus();
        }
      });

		});
	</script>
@endsection