<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Campuspedia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{[ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wave/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    	<div class="header-top-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	                    <div class="logo-area">
	                        <a href="#"><img src="{{ asset('img/logo/logo.png') }}" alt="" /></a>
	                    </div>
	                </div>
	                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	                    <div class="header-top-menu">
	                        
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

    @yield('content')

    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/data-table/data-table-act.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    <script type="text/javascript">

    $(document).ready(function() {
            var data_id;
            $(document).on('click', '.delete', function(){
                data_id = $(this).attr('id');
                $('#modalDelete').modal('show');
            });
            $("#delete_data").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type : "GET",
                    url : "/onlineclass/"+data_id+"/delete",
                });
                e.preventDefault();
            });

        });
    </script>

    <script type="text/javascript">
     $(document).ready(function () {
       $(".open_modal_edit").click(function(e) {
           var m = $(this).attr("id");
         $.ajax({
           url: "/onlineclass/modaledit",
           type: "GET",
           data : {id : m,},
           success: function (ajaxData){
           $("#ModalEdit").html(ajaxData);
           $("#ModalEdit").modal('show',{backdrop: 'true'});
          }
       });
            });
        });
    </script>

</body>
</html>