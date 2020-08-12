@extends('Back_End.masster')
@section('content')


 <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="" class="btn btn-success">Category Edit</a>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin_Category_Update',$Category_Edit[0]->id)}}" method="post">
                      
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">

                          <input type="text" id="first-name" required="required" class="form-control " name="name" value="{{$Category_Edit[0]->name}}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Paren Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                       <select name="paren_id" id="pararen_id" class="form-control">
                        <option value="0">---------Paren Category-------</option>
                        @foreach ($level as $key => $va)
                        <option value="{{$va->id}}" @if($va->id==$Category_Edit[0]->paren_id)selected @endif>{{$va->name}}</option>    
                        @endforeach
                       </select>
                       </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="url" value="{{$Category_Edit[0]->url}}">
                        </div>
                      </div>



                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea  type="text" id="first-name" required="required" class="form-control" name="description"  >{{$Category_Edit[0]->description}}</textarea>
                          
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