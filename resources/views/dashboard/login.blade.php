<!DOCTYPE html>
<html lang="en" ng-app="admin">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Andhika Maheva Wicaksono">
  <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Sistem Informasi HIMASI</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/angular-block-ui.min.css') }}"

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="login-body" ng-controller = "login" >
    <div class="container">
      <div class="login-logo"></div>
      <form class="form-signin" ng-submit="submit()" novalidate>

        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input class="form-control" style="color:black" name="nim" placeholder="Masukan NIM Anda" ng-model='data.nim' type="text" data-toggle="tooltip" data-placement="top" title="Masukan NIM Anda">
          <input class="form-control" style="color:black" name="password" placeholder="Masukkan Password Anda" ng-model='data.password' type="password" data-toggle="tooltip" data-placement="top" tite="Masukkan Password Anda">
          <label class="checkbox">
            <input type="checkbox" value="remember-me" ng-model='data.remember_me'> Remember me
            <span class="pull-right">
              <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
            </span>
          </label>
          <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)" ><% alert.msg %></alert>
          <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
          <div class="registration">
            Don't have an account yet?
            <a class="" href="{{ url('registration')}}">
              Create an account
            </a>
          </div>
        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Lupa Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Masukkan email untuk mereset akun Anda</p>
                <input type="text" name="email" placeholder="Email Anda" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-success" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->

      </form>
      <br>
      <div style="max-width:330px;align:center;background-color:#FFFFFF; margin:  auto ;border-radius:5px">
        <p style="text-align:center;">Himpunan Mahasiswa Sistem Informasi &copy; 2015 All Right Reserved </p>
      </div>

    </div>

    <script>var base_url = "{{url()}}";</script>
    <script src="{{asset('js/hmsiapps/angular.min.js')}}"></script>
    <script src="{{asset('js/hmsiapps/ui-bootstrap-tpls-0.12.0.min.js')}}"></script>
    <script src="{{asset('js/hmsiapps/angular-file-upload.min.js')}}"></script>
    <script src="{{asset('js/hmsiapps/angular-block-ui.min.js')}}"></script>
    <script src="{{asset('js/hmsiapps/admin.js')}}"></script>
    <script src="{{asset('js/hmsiapps/controller/login.js')}}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
    @include('sweet::alert')


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
  </html>
