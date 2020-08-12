@extends('Back_End.masster')
@section('content')
 <!-- page content -->
    


 <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Banner</a>
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
                       <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/Admin-Update-banner/'.$BannerEdit[0]->id)}}" method="post" enctype="multipart/form-data">
                      
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="name" value="{{$BannerEdit[0]->name}}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Text Style <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="text_style" value="{{$BannerEdit[0]->text_style}}">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sort Order<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="sort_order" value="{{$BannerEdit[0]->sort_order}}">
                        </div>
                      </div>
                    
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Link<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" required="required" class="form-control " name="link" value="{{$BannerEdit[0]->link}}">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea  type="text" id="first-name" required="required" class="form-control" name="content">{{$BannerEdit[0]->content}}</textarea>
                          
                        </div>
                      </div>


                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image<span class="required">*</span>
                        </label>
                        
                        <div class="col-md-6 col-sm-6 ">
                          <img src="{{asset('/banner/'.$BannerEdit[0]->image)}}" style="width:250px;">
                        </div>
                      </div>

                      <div class="item form-group ">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="image"> 
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