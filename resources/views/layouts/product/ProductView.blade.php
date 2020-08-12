@extends('layouts.back_master')
@section('content')



          <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a>
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
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">

                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ID</th>
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Product Code</th>
                          <th>Product Color</th>
                          <th>Product Price</th>
                          <th>Product Descrition</th>
                          <th></th>
                        </tr>
                      </thead>


              
                        @foreach ($product as $key => $value)
                          
                        

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td> <img src="{{asset('/upload/'.$value->image)}}" width="80" height="90" class="rounded" /></td>
                            <td>{{$value->color}}</td>
                            <td>{{$value->code}}</td>
                            <td>{{$value->price}}</td>
                             <td>{{$value->description}}</td>
                            <td class=" last">
                              <a href="{{url('/Admin_productEdit',$value->id)}}"onclick ="return confirm('Are you sure?.  Do want Edit this iteam ?');"  class="btn btn-raised btn-primary btn-sm" >
                               <i class="fa fa-edit" aria-hidden="true"></i> Edit
                              <a href="{{url('/Admin_ProductDelete',$value->id)}}" class="btn btn-raised btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
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