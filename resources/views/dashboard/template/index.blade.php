<!DOCTYPE html>
<html lang="en" ng-app="admin">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.png">
        <title>{{$title}}</title>

        <link rel="stylesheet" href="{{ asset('css/angular-block-ui.min.css') }}" >
        <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
        @section('css')

        @show
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >
        <section id="container" >
            @section('header')
            @include('dashboard.template.header', ['user' => Auth::user()])
            @show

            @section('sidebar')
            @include('dashboard.template.sidebar', ['user' => Auth::user()])
            @show

            @yield('content')

            @section('footer')
            @include('dashboard.template.footer')
            @show
        </section>
        <script>var base_url = "{{url()}}";</script>
        <script src="{{asset('js/hmsiapps/angular.min.js')}}"></script>
        <script src="{{asset('js/hmsiapps/ui-bootstrap-tpls-0.12.0.min.js')}}"></script>
        <script src="{{asset('js/hmsiapps/angular-block-ui.min.js')}}"></script>
        <script src="{{asset('js/hmsiapps/angular-file-upload.min.js')}}"></script>
        <script src="{{asset('js/hmsiapps/angular-file-upload-shim.min.js')}}"></script>
        <script src="{{asset('js/hmsiapps/admin.js')}}"></script>

        @section('js')

        @show

        <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
        <!-- sweet -->
        @include('sweet::alert')


    </body>
</html>
