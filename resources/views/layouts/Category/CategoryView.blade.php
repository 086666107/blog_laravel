@extends('Back_End.masster')
@section('content')

 <!-- page content -->
       
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Category View</h3>
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
                    <a href="{{url('/admin/Category')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
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
                          <th>Category Name</th>
                          <th>Category Id</th>
                          <th>Url</th>
                          <th>Description </th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>

                      @foreach ($category as $key => $ct)
                      	
                                    
                        <tbody>
                          <tr class="even pointer">
                          	<td>#</td>
                          	<td>{{$ct->id}}</td>
                          	<td>{{$ct->name}}</td>
                          	<td>{{$ct->paren_id}}</td>
                          	<td>{{$ct->url}}</td>
                          	<td>{{$ct->description}}</td>
                          	<td>
                          	  @if($ct->Status==0)
                              <a href="{{url('/Admin_UdateStatus_category',$ct->id)}}" class="btn btn-sm btn-success">Enable</a>
                              @else
                              <a href="{{url('/Admin_disable_category',$ct->id)}}" class="btn btn-sm btn-warning">Disable</a>
                              @endif
                            </td>
               	             
               	             <td class=" last">
                              <a href="{{url('/admin_Category_Edit',$ct->id)}}"onclick ="return confirm('Are you sure?.  Do want Edit this iteam ?');"  class="btn btn-raised btn-primary btn-sm" >
                               <i class="fa fa-edit" aria-hidden="true"></i> Edit
                              <a href="{{url('admin_Category_Delete',$ct->id)}}" class="btn btn-raised btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
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