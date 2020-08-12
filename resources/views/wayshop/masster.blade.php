<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="Fron-end/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('Fron-end/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Fron-end/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('Fron-end/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('Fron-end/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('Fron-end/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @include('wayshop.header')
    @yield('content')
    @include('wayshop.footer')





    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('Fron-end/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/popper.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('Fron-end/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('Fron-end/js/inewsticker.js')}}"></script>
    <script src="{{asset('Fron-end/js/bootsnav.js.')}}"></script>
    <script src="{{asset('Fron-end/js/images-loded.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/isotope.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/form-validator.min.js')}}"></script>
    <script src="{{asset('Fron-end/js/contact-form-script.js')}}"></script>
    <script src="{{asset('Fron-end/js/custom.js')}}"></script>


    <script>
        $(document).ready(function() {

            $("#selSize").change(function() {
                //alert ("test");

                var idSize = $(this).val();
                if (idSize == "") {
                    return false;
                }



                $.ajax({

                    type: 'get',
                    url: '/get-product-price',
                    data: {
                        idSize: idSize
                    },
                    success: function(resp) {
                        //alert(resp);
                        var arr = resp.split('#');
                        $("#getPrice").html("PSK"+arr[0]);
                        $("#price").val(arr[0]);
                    },
                    error:function() {
                        alert("Error");
                    }

                });

            });


        });
    </script>


</body>

</html>