@extends('Back_End.masster')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Add Coupon</h3>
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
                <a href="{{url('/admin/Product_View')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Coupon</a>
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/Admin/add-coupon')}}" method="post" enctype="multipart/form-data">

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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">coupon_code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" required="required" class="form-control " name="coupon_code">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">amount<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" required="required" class="form-control " name="amount">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">amount_type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" required="required" class="form-control " name="amount_type">
                        </div>
                    </div>


                    <div class=" item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Expire Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">

                            <input class="form-control" class='date' type="date" name="Expire_Date" required='required'>
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Add Coupon</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>






@endsection