@extends('Back_End.masster')
@section('content')
      <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product View</h3>
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
                    <a href="{{route('Product')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
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
                <p class="text-muted font-13 m-b-30">
                @if(Session::has('messageSMG2'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!!session('messageSMG2')!!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
                </div>
                 @endif
                </p>






                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">

                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ID</th>
                          <th>Catagory Id</th>
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Product Code</th>
                          <th>Product Color</th>
                          <th>Product Price</th>
                          <th>Product Descrition</th>
                          <th>Status</th>
                          <th>Fearurd Product</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    @foreach ($product as $key => $value)
                       <tbody>
                          <tr class="even pointer">
                            <td>
                             #
                            </td>
                            <td>{{$value->id}}</td>
                            <td>{{$value->category_id}}</td>
                            <td>{{$value->name}}</td>
                            <td> <img src="{{asset('/upload/'.$value->image)}}" width="80" height="90" class="rounded"/></td>
                            <td>{{$value->color}}</td>
                            <td>{{$value->code}}</td>
                            <td>${{$value->price}}</td>
                            <td>{{$value->description}}</td>
                            <td>
                      
                              @if($value->Status==0)
                              <a href="{{url('/Admin_UdateStatus',$value->id)}}" class="btn btn-sm btn-success">Enable</a>
                              @else
                              <a href="{{url('/Admin_StatusEnable',$value->id)}}" class="btn btn-sm btn-danger">Disable</a>
                              @endif

                             </td>
                              <td>
                      
                              @if($value->fealtured_products==0)
                              <a href="{{url('/Admin_feartur_product',$value->id)}}" class="btn btn-sm btn-success">Enable</a>
                              @else
                              <a href="{{url('/Admin_feartur_Disable',$value->id)}}" class="btn btn-sm btn-danger">Disable</a>
                              @endif

                             </td>
                            <td class=" last">

                              <a href="{{url('/Admin_Add_Attribute',$value->id)}}" class="btn btn-warning  btn-sm" title="list sku"><i class="fa fa-list" aria-hidden="true"></i></a>

                              <a href="{{url('/Admin_image_Attribute',$value->id)}}" class="btn btn-info  btn-sm" title="add image"><i class="fa fa-image" aria-hidden="true"></i></a>

                              <a href="{{url('/Admin_productEdit',$value->id)}}"onclick ="return confirm('Are you sure?.  Do want Edit this iteam ?');"  class="btn btn-raised btn-primary btn-sm" title="product edit">
                               <i class="fa fa-edit" aria-hidden="true"></i>
                              <a href="{{url('/Admin_ProductDelete',$value->id)}}" class="btn btn-raised btn btn-danger btn-sm" title="product delete"><i class="fa fa-trash" aria-hidden="true"></i></a>



                            </td>
                          </tr>
 
                        </tbody>
                        @endforeach
                    </table>
                  </div>
                  </div>
              </div>
            </div>
            </div>
              </div>
            </div>






@endsection