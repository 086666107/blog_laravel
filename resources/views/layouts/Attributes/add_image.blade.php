@extends('Back_End.masster')
@section('content')




<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Image Product</h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5  form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <a href="" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Product</a>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="dropdown-item" href="#">Settings 1</a>
              </li>
              <li><a class="dropdown-item" href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">



        <p class="text-muted font-13 m-b-30">
          @if(Session::has('messageSMG'))
          <div class="alert alert-sm alert alert-primary alert-block" role=aler>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times</span>
            </button>
            <strong>{!!session('messageSMG')!!}</strong>
          </div>
          @endif
        </p>


        <br />

        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/Admin_image_Attribute/'.$productDetails->id)}}" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
        	<input type="hidden" name="product_id" value="{{$productDetails->id}}">


          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Name <span class="required">: {{$productDetails->name}}</span>
            </label>
            <div class="col-md-6 col-sm-6 ">

            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Color <span class="required">: {{$productDetails->color}}
            </label>
            <div class="col-md-6 col-sm-6 ">

            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Price <span class="required">: {{$productDetails->price}}</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
            </div>
          </div>


          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image<span class="required">#</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <div class="field_wrapper">
                <div class="form-group">

                <input type="file" name="image[]" id="image" multiple="multiple">
                   

                </div>
              </div>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success" value="Add iamge">Add image</button>
            </div>
          </div>
        </form>
     	 </div>
    	</div>
  		</div>
		</div>


    			<table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ID</th>
                          <th>Product Id</th>                        
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>                           
                        <tbody>
                        	@foreach ($productImage as $image_product )
	                      <tr class="even pointer">
                           <td>
                             #
                            </td>
                            <td>{{$image_product->id}}</td>
                            <td>{{$image_product->product_id}}</td>
                            
                            <td> <img src="{{asset('/uploads/products/'.$image_product->image)}}" width="100" height="120" class="rounded"/>
                           
                       
                            <td class=" last">
                          
                              <a href="{{url('Admin_imageDelete_Attribute',$image_product->id)}}" class="btn btn-raised btn btn-danger btn-xm" title="product delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                          </tr>
 						@endforeach
                        </tbody>
                        
                    </table>






@endsection