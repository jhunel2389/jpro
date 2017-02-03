@extends('layouts.master')
@section('addHead')
  <title>Dashboard</title>
  <style type="text/css">
    .hover-cap-4col .thumbnail {
     position:relative;
     overflow:hidden; 
    }
    .caption {
     display: none;
     position: absolute;
     top: 0;
     left: 0;
     background: rgba(0,0,0,0.4);
     width: 100%;
     height: 100%;
     color:#fff !important;
    }
    .noHover{
        pointer-events: none;
    }
    .selected_img {
      border:solid 1px red;
      text-decoration:none;
    }
    .old_img {
      border:solid 1px blue;
    }
    .selected_img,.selected_img:hover,.selected_img:click, .selected_img:visited{
      border:none;
      outline:none;
      text-decoration:none;
      color:inherit;
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
	        Product List
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
              <table id="tbl_product" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Product name</th>
                  <th>Description</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($allProducts as $product)
                    <tr>
                      <td>{{$product['id']}}</td>
                      <td>{{$product['name']}}</td>
                      <td>{{$product['description']}}</td>
                      <td>{{($product['status'] == "1") ?  "Live" :  "Disabled"}}</td>
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
  
  </script>
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

      var product_fields = '<form id="form_product" role="form" method="POST" action="{{ URL::Route('addProduct') }}" enctype ="multipart/form-data">\
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" >\
                              <input type="hidden" id="product_id" name="product_id" value="" >\
                              <div class="box-body">\
                                <div class="row">\
                                  <div class="col-md-6">\
                                    <div class="form-group">\
                                      <label for="product_name">Product name</label>\
                                      <input type="text" class="form-control input-sm" id="product_name" name="product_name" placeholder="Enter product name" maxlength="25" required>\
                                    </div>\
                                    <div class="row">\
                                      <div class="col-md-6">\
                                        <div class="form-group ">\
                                          <label for="product_name">Add price</label>\
                                          <div class="input-group">\
                                            <input id="input_price" name="input_price" type="text" placeholder="enter ..." class="form-control" aria-label="..." maxlength="7" disabled>\
                                            <div class="input-group-btn">\
                                              <button style="height:34px;" type="button" data-id="" class="btn btn-default btn_addPrice" disabled>\
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
                                          <select class="form-control select2" style="width: 100%;" id="product_price" name="product_price" disabled required>\
                                          </select>\
                                        </div>\
                                        <div class="form-group">\
                                          <label>Status</label>\
                                          <select class="form-control select2" style="width: 100%;" id="status" name="status" disabled required>\
                                            <option value="1">Live</option>\
                                            <option value="0" selected>Disabled</option>\
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
                                      <input type="file" id="file" name="product_image[]" multiple="multiple" >\
                                    </div>\
                                    <div class="col-xs-12">\
                                      <div class="hover-cap-4col hover">\
                                        <div class="thumbnail">\
                                            <img class="product_image_view" src="{{env('FILE_PATH_CUSTOM')}}img/placeholder-image.png" alt="..." style="height:205px;">\
                                          </div>\
                                      </div>\
                                    </div>\
                                  </div>\
                                </div>\
                              </div>\
                              <button type="submit" hidden id="submit_form"></button>\
                            </form>';
      function modalForm()
      {
        $('body').append('<div class="modal fade product_info_add"  role="dialog" data-keyboard="false" data-backdrop="static">\
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
        $(".select2").select2(
        {
          minimumResultsForSearch: -1
        });
      });

      $(document).on("change","#file",function(e){
        $("div.new_div").remove();
        $('.hover').removeClass("noHover").addClass("hover-cap-4col");
        var count = $('.thumbnail').length;
        var set = 6 - parseInt(count);

        if (parseInt($(this).get(0).files.length) > set){
          $(this).wrap('<form>').closest('form').get(0).reset();
          $(this).unwrap();
          $(".product_info_add").find(".modal-body").prepend('<div class="alert alert-danger alert-dismissible">\
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>\
                                        You can only upload a maximum of 5 images. Need '+set+' more.\
                                      </div>');
        }
        else{
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
              '<div class="col-xs-4 new_div">'+
                '<a href="javascript:void(0)" class="thumbnail tn_small selected_img" data-img="'+e.target.result+'">'+
                  '<img src="'+e.target.result+'" alt="..." style="width: 40px;height: 40px;">'+
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
        }
      });

      $(document).on("click",".tn_small",function(e){
        var img = $(this).data("img")
        var filename = $(this).data("filename");
        if(!$(this).hasClass('selected_img')){
          $('.hover').find('.thumbnail').prepend('<div class="caption">\
                                                <h4>Do you want to remove this image?</h4>\
                                                <button type="button" data-img="test" class="btn btn-block btn-default btn-sm btn_delete_img" style="width:50px;display: block; margin: 0 auto;text-align: center;">Yes</button>\
                                            </div>');
          $(".product_image_view").attr("src",img);
          $('.btn_delete_img').data('img', filename);
        }
        else{
          $('.caption').remove();
        }
        
      });
      

      $(document).on("click",".btn_delete_img",function(e){
        var filename = $(this).data("img");
        var _token = $("input[name='_token']").val();
        $.ajax({
          type: "POST",
          url: 'http://jewerly.dev/admin/product/img_delete',
          dataType: "json",
          data: {'_token':_token,'filename':filename},
          success:function(data){
              $('.alert').fadeOut("slow",function(){ 
                                                          $(this).remove(); 
                                                       });
            $(".product_info_add").find(".modal-body").prepend('<div class="alert '+data.alert+' alert-dismissible">\
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>\
                                        '+data.message+'\
                                      </div>');


            $('[data-filename="'+filename+'"]').fadeOut("slow",function(){ 
                                                          $(this).closest('.col-xs-4').remove(); 
                                                       });
            var count = $('.thumbnail').length;
            $(".product_image_view").attr("src",'{{env('FILE_PATH_CUSTOM')}}img/placeholder-image.png');
            if(count == 2 ){
              $('.hover').removeClass("hover-cap-4col").addClass("noHover");
            }
          },
          error:function(){
          }
        });
      });

      $(document).on("click",".btn_cancel_product",function(e){
        $('.product_info_add').modal('hide');
      });

      $(document).on("hidden.bs.modal",".product_info_add",function(){
        $(this).remove();
      });

      $(document).on("click",".btn_save",function(e){
        var $fileUpload = $("#file");
        if (parseInt($fileUpload.get(0).files.length)>3){
          alert("You can only upload a maximum of 3 images");
        }
        else{
          $(".product_info_add").find("form").find("#submit_form").click();
        }
      });

      $(document).on("click",".btn_addPrice",function(){
        var amount = $('#input_price').val();
        var _token = $("input[name='_token']").val();
        var product_id = $("#product_id").val();

        if(amount != ''){
          $.ajax({
            type: "POST",
            url: "{{URL::Route('addPrice')}}",
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

      $(document).on("click","#editProduct",function(){
        var id = table.cell('.active', 0).data();
        modalForm();
        $('.product_info_add').modal('show');
        $(".product_info_add").find(".modal-body").append(product_fields);
        $(".btn_save").toggleClass('btn_save btn_edit').text('Update');
        $("#product_id").val(id);
        $(".select2").select2(
        {
          minimumResultsForSearch: -1
        });

        $.get('{{URL::Route('getProductInfo')}}',{ product: id}, function(data)
        {
          $("#product_name").val(data.name);
          $("#product_description").val(data.description);
          if(data.price.length != 0){
            for (var i = 0; i < data.price.length; i++) 
            {
              $('#product_price').append('<option  value="'+data.price[i].id+'">'+data.price[i].price+'</option>')
            }
            $('#product_price')
                      .val(data.current_price) //select option of select2
                      .trigger("change"); //apply to select2
            $('#status')
                      .val(data.status) //select option of select2
                      .trigger("change"); //apply to select2
          }

          if(data.product_image.length != 0)
          {
            for (var i = 0; i < data.product_image.length; i++) 
            {
              var template = 
                            '<div class="col-xs-4">'+
                              '<a href="javascript:void(0)" class="thumbnail tn_small old_img" data-img="{{env('FILE_PATH_CUSTOM')}}productThumbnail/'+data.product_image[i].thumbnail_img+'" data-filename="'+data.product_image[i].thumbnail_img+'">'+
                                '<img src="{{env('FILE_PATH_CUSTOM')}}productThumbnail/'+data.product_image[i].thumbnail_img+'" alt="..." style="width: 40px;height: 40px;">'+
                              '</a>'+
                            '</div>';
            if(i == 0){
                
                $('.hover').find('.thumbnail').prepend('<div class="caption">\
                                                <h4>Do you want to remove this image?</h4>\
                                                <button type="button" data-img="test" class="btn btn-block btn-default btn-sm btn_delete_img" style="width:50px;display: block; margin: 0 auto;text-align: center;">Yes</button>\
                                            </div>');
                $(".product_image_view").attr("src",'{{env('FILE_PATH_CUSTOM')}}productThumbnail/'+data.product_image[i].thumbnail_img+'');
                $('.btn_delete_img').data('img', data.product_image[i].thumbnail_img);
            }
            $('.product_image_list').append(template);
            }
            $('.hover').removeClass("noHover").addClass("hover-cap-4col");
          }
          else{
            $('.hover').removeClass("hover-cap-4col").addClass("noHover");
          }

          $('#product_price').prop("disabled", false);
          $('#input_price').prop("disabled", false);
          $('.btn_addPrice').prop("disabled", false);
          $('#status').prop("disabled", false);
        });
        
        $("[rel='tooltip']").tooltip(); 
        $('.hover-cap-4col').hover(
          function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
          },
          function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
          }
        ); 
      });

       $(document).on("click",".btn_edit",function(e){
        $(".product_info_add").find("form").find("#submit_form").click();
      });

      $(document).on("keydown","#input_price",function(e){
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
      });
		});
	</script>
@endsection