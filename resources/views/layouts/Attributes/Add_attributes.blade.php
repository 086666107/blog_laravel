@extends('Back_End.masster')
@section('content')

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Add Attributes</h3>
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
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/Admin_Add_Attribute',$productDetails->id)}}" method="post">{{csrf_field()}}



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
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Add attriute <span class="required">#</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <div class="field_wrapper">
                <div class="form-group">

                  <div style="display: flex;" >
                    <input type="text" name="sku[]" id="sku" class="form-control" placeholder="sku" style="margin:5px;" />
                    <input type="text" name="price[]" id="price" class="form-control" placeholder="price" style="margin:5px;" />
                    <input type="text" name="size[]" id="size" class="form-control" placeholder="size" style="margin:5px;" />
                    <input type="text" name="stock[]" id="stock" class="form-control" placeholder="stock" style="margin:5px;" />
                    <a href="javascript:void(0);" class="add_button" title="Add Field">Add</a>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success" value="Add Attribute">Add Attribute</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">

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
        <div class="clearfix">List Stock</div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">

              <table id="datatable" class="table table-striped table-bordered" style="width:100%">

                <form action="{{url('/Admin_Edit_Attribute/'.$productDetails->id)}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
                 
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category Id</th>
                      <th>SUK</th>
                      <th>Price</th>
                      <th>Size</th>
                      <th>Stock</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  @foreach ($productDetails['attributes'] as $attribute)

                  <tbody>
                    <tr class="even pointer">
                      <td style="display: none;"><input type="hidden" name="attr[]" value="{{$attribute->id}}">{{$attribute->id}}</td>
                      <td>{{$attribute->id}}</td>
                      <td>{{$attribute->product_id}}</td>
                      <td><input type="text" name="sku[]" value="{{$attribute->sku}}"></td>
                      <td><input type="text" name="price[]" value="{{$attribute->price}}"></td>
                      <td><input type="text" name="size[]" value="{{$attribute->size}}"></td>
                      <td><input type="text" name="stock[]" value="{{$attribute->stock}}"></td>


                      <td class=" last">
                       <input type="submit" value="update" class="btn btn-sm btn-success">

                        <a href="{{url('/Admin_Delete_Attribute',$attribute->id)}}" class="btn btn-raised btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>

                  </tbody>
                  @endforeach
              </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection