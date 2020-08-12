<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Bootstrap -->
  <link href="/Back-end/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="/Back-end/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="/Back-end/vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="/Back-end/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Online Shope!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/Back-end/production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Seyha Nai</h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />


          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-picture-o"></i> Banner <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">

                    <li><a href="{{url('/Admin-bannser-view')}}">Banner</a></li>

                  </ul>

                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('Product')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a></li>
                    <li><a href="{{url('/admin/Product_View')}}"><i class="fa fa-eye" aria-hidden="true"></i> Product View</a></li>
                    <li><a href="{{url('/admin/Category')}}"></i><i class="fa fa-plus" aria-hidden="true"></i>Add Category</a></li>
                    <li><a href="{{url('/admin/Category-View')}}"><i class="fa fa-eye" aria-hidden="true"></i> Category View</a></li>



                  </ul>
                <li><a><i class="fa fa-gift"></i> Coupons <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">

                    <li><a href="{{url('/Admin/add-coupon')}}">Add Coupons</a></li>
                    <li><a href="{{url('/Admin/View-coupon')}}">View Coupons</a></li>

                  </ul>

                </li>
            </div>

          </div>
          <!-- /sidebar menu -->


          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{url('admin/logout')}}">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>

          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="/Back-end/production/images/img.jpg" alt="">Seyha Nai
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Help</a>
                  <a class="dropdown-item" href="{{url('admin/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="/Back-end/production/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="/Back-end/production/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="/Back-end/production/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="/Back-end/production/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="right_col" role="main">
        <div class="">

          @yield('content')
        </div>
      </div>
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../Back-end/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../Back-end/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../Back-end/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../Back-end/vendors/nprogress/nprogress.js"></script>

  <!-- ====================================== -->


  <!-- Chart.js -->
  <script src="../Back-end/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="../Back-end/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../Back-end/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../Back-end/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="../Back-end/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="../Back-end/vendors/Flot/jquery.flot.js"></script>
  <script src="../Back-end/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="../Back-end/vendors/Flot/jquery.flot.time.js"></script>
  <script src="../Back-end/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="../Back-end/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="../Back-end/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="../Back-end/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="../Back-end/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="../Back-end/vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="../Back-end/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="../Back-end/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../Back-end/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../Back-end/vendors/moment/min/moment.min.js"></script>
  <script src="../Back-end/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>


  <!-- ======================================= -->

  <!-- link boostrap========= -->



  <!-- Datatables -->
  <script src="../Back-end/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../Back-end/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../Back-end/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../Back-end/vendors/jszip/dist/jszip.min.js"></script>
  <script src="../Back-end/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../Back-end/vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js">

  <script type="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.min.js"></script>

  <script src="../Back-end/build/js/custom.min.js"></script>
  <!-- scrip add removefields dynamis -->
  <script type="text/javascript">
    $(document).ready(function() {
      var maxField = 10; //Input fields increment limitation
      var addButton = $('.add_button'); //Add button selector
      var wrapper = $('.field_wrapper'); //Input field wrapper
      var fieldHTML = '<div style="display:flex;" ><input type="text" name="sku[]" id="sku" class="form-control" placeholder="sku" style="margin: 5px;"/><input type="text" name="price[]" id="price" class="form-control" placeholder="price" style="margin: 5px;"/><input type="text" name="size[]" id="size" class="form-control" placeholder="size" style="margin: 5px;"/><input type="text" name="stock[]" id="stock" class="form-control" placeholder="stock"style="margin: 5px;"/><a href="javascript:void(0);" class="remove_button"> Remove</a></div>'; //New input field html 


      var x = 1; //Initial field counter is 1

      //Once add button is clicked
      $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapper).append(fieldHTML); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
      });
    });
  </script>



</body>

</html>