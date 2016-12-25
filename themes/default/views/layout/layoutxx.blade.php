<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title', app_name())</title>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('author', 'http://www.tmgproduction.com  Miki Maine Amdu')">
    <meta name="keywords" content="">
    @yield('meta')

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Font awesome -->
    <link href="{{ Theme::asset('default::css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ Theme::asset('default::css/bootstrap.css') }}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ Theme::asset('default::css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link href="{{ Theme::asset('default::css/theme-color/default-theme.css') }}" id="switcher" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="{{ Theme::asset('default::css/style.css') }}" rel="stylesheet">   
    @yield('before-styles-end')
    <!-- <link href="{{ Theme::asset('default::css/frontend.css') }}" rel="stylesheet"> -->
    @yield('after-styles-end')
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

<div class="container">

    @include('default::layout/header')
    <div class="grid-row">
        <br/><br/>
        @yield('body_title')

        <div class="composer">
            @include('default::includes/partials/messages')
        </div>
    </div><!-- /grid-row -->
    @yield('content')

    @include('default::layout/footer')

    <a href="#" id="scroll-top" class="scroll-top fa fa-angle-up"></a>

</div><!-- /container -->

<script src="{{ Theme::asset('default::js/frontend.js') }}"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ Theme::asset('default::js/bootstrap.js') }}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{ Theme::asset('default::js/jquery.smartmenus.js') }}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{ Theme::asset('default::js/jquery.smartmenus.bootstrap.js') }}"></script> 
@

<!--/ scripts -->

</body>
</html>