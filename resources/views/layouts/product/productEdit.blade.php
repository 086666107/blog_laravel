@extends('Back_End.masster')
@section('content')


 <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product Edit <small>form</small></h2>
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
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/Admin_ProductUpdate',$product_edit[0]->id)}}" method="post" enctype="multipart/form-data">

                    	{{csrf_field()}}

                    	 @if(Session::has('messageSMG'))
                <div class="alert alert-sm alert alert-primary alert-block" role=aler>
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                  </button>
                  <strong>{!!session('messageSMG')!!}</strong>
                </div>
                @endif

                   <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Under Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                       <select name="category_id" id="category_id" class="form-control">
                        <option value="{{$product_edit[0]->category_id}}">---------Paren Category--------</option>
                        @foreach ($Category as $key => $va)
                        <option value="{{$va->id}}">{{$va->name}}</option>

                        @endforeach
                       </select>
                       </div>
                      </div>



                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="name" value="{{$product_edit[0]->name}}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Color <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="color" value="{{$product_edit[0]->color}}">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="code" value="{{$product_edit[0]->code}}">
                        </div>
                      </div>



                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        	<textarea  type="text" id="first-name" required="required" class="form-control" name="description">{{$product_edit[0]->description}} </textarea>

                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="price" value="{{$product_edit[0]->price}}">
                        </div>
                      </div>



                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           @foreach ($product_edit as $key => $value)
                         <!--  <img src="{{asset('/upload/'.$value->image)}}"  width="80" height="90" class="rounded"> -->
                             <img src="{{asset('/upload/'.$value->image)}}" style="width:150px;">
                           @endforeach

                          </div>


                      </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
                        </label>


                          <input type="file" name="image" value="{{$product_edit[0]->image}}">
                          <div class="col-md-6 col-sm-6 ">


                        </div>
                      </div>



                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>






@endsection
