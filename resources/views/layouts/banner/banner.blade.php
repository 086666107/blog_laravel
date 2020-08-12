@extends('Back_End.masster')
@section('content')
      <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Banner View</h3>
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
                     <a href="{{url('/Admin-Add-banner')}}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add Banner</a>
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
                          <th>Name</th>
                          <th>image</th>
                          <th>text_style</th>
                          <th>sort_order</th>
                          <th>content</th>
                          <th>link</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>

               

              
                        @foreach ($bannerDetails as $key => $value)
                          
                        

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td> <img src="{{asset('banner/'.$value->image)}}" width="100" height="90" class="rounded" /></td>
                            <td>{{$value->text_style}}</td>
                            <td>{{$value->sort_order}}</td>
                            <td>{{$value->content}}</td>
                             <td>{{$value->link}}</td>
                             <td>
                              @if($value->status==0)
                              <a href="{{url('/Admin-statusEnable-banner',$value->id)}}" class="btn btn-sm btn-success">Enable</a>
                              @else
                              <a href="{{url('/Admin-statusDisable-banner',$value->id)}}" class="btn btn-sm btn-warning">Disable</a>
                              @endif</td>
                            <td class=" last">
                              <a href="{{url('/Admin-Edit-banner',$value->id)}}"onclick ="return confirm('Are you sure?.  Do want Edit this iteam ?');"  class="btn btn-raised btn-primary btn-xm" >
                               <i class="fa fa-edit" aria-hidden="true"></i>
                              <a href="{{url('/Admin-Delete-banner',$value->id)}}" class="btn btn-raised btn btn-danger btn-xm"><i class="fa fa-trash" aria-hidden="true"> </i></a>
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