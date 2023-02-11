{{--<html lang="en">--}}
{{--	<head>--}}
{{--		<meta charset="utf-8">--}}
{{--		<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--		<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--		<title>Electro - HTML Ecommerce Template</title>--}}

{{--		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">--}}

{{--		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>--}}

{{--		<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>--}}
{{--		<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>--}}

{{--		<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>--}}

{{--		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">--}}

{{--		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>--}}




{{--    </head>--}}
{{--	<body>--}}
{{--        <x-header-view :categories="$categories" />--}}

{{--        <x-nav-view />--}}


{{--		<div class="section">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-md-12">--}}
{{--						<div class="section-title">--}}
{{--							<h3 class="title">New Products</h3>--}}
{{--							<div class="section-nav">--}}
{{--								<ul class="section-tab-nav tab-nav">--}}
{{--									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>--}}
{{--									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>--}}
{{--									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>--}}
{{--									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>--}}
{{--								</ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}

{{--        <x-newsletter-view />--}}

{{--        <x-footer-view />--}}
{{--		<script src="{{asset('js/jquery.min.js')}}"></script>--}}
{{--		<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
{{--		<script src="{{asset('js/slick.min.js')}}"></script>--}}
{{--		<script src="{{asset('js/nouislider.min.js')}}"></script>--}}
{{--		<script src="{{asset('js/jquery.zoom.min.js')}}"></script>--}}
{{--		<script src="{{asset('js/main.js')}}"></script>--}}
{{--        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--	</body>--}}




{{--</html>--}}















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<x-header-view :categories="$categories" />

{{-- <x-nav-view /> --}}
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Top selling</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            @foreach ($categories as $category)
                               
                          
                            {{-- <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab2">Cameras</a></li> --}}
                            <li><a data-toggle="tab" href="#tab2"> {{ $category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">

                                <x-card-product :products="$products" />

                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<x-newsletter-view />

<x-footer-view />
<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
