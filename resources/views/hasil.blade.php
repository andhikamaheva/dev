<!DOCTYPE html>
<html lang="en" ng-app="admin">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Andhika Maheva Wicaksono">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Aplikasi Analisis Kepribadian</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/angular-block-ui.min.css') }}" >


    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-timepicker/compiled/timepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-datetimepicker/css/datetimepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/jquery-multi-select/css/multi-select.css')}}" />
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body class="login-body" ng-controller="registration">
<div class="container">
  <section class="wrapper site-min-height">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <section class="panel">
                  <header class="panel-heading">
                      <h1>Analisis Kepribadian</h1>
                      <hr>
                      <p>Aplikasi ini dapat membantu kamu guna melihat seperti apakah diri kamu meliputi emosional, kasih sayang, solidaritas, dan kepekaan. Melalui beberapa pertanyaan kamu akan dapat melihat hasilnya secara cepat dan tepat</p>
                          <p>Gunakan secara <strong>Gratis!</strong> :) dan bagikan melalui media sosialmu! :)</p>
                      </header>
                      <div class="panel-body">
                       <p style="font-size:15px">Halo <b>{{$nama}}</b></p>
                       <p style="font-size:15px">Kamu adalah seorang <b>{{$kelamin}}</b> yang lahir pada <b>{{$ttl}}</b>. {{$hasil}} </p>

              </div>
          </section>
      </div>
  </div>

</section>



</div>
<script>var base_url = "{{url()}}";</script>


<script src="{{asset('js/hmsiapps/angular.min.js')}}"></script>
<script src="{{asset('js/hmsiapps/ui-bootstrap-tpls-0.12.0.min.js')}}"></script>
<script src="{{asset('js/hmsiapps/angular-file-upload.min.js')}}"></script>
<script src="{{asset('js/hmsiapps/angular-file-upload-shim.min.js')}}"></script>
<script src="{{asset('js/hmsiapps/angular-block-ui.min.js')}}"></script>
<script src="{{asset('js/hmsiapps/admin.js')}}"></script>
<script src="{{asset('js/hmsiapps/controller/admin-registration.js')}}"></script>


<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('js/respond.min.js')}}" ></script>


<script src="{{asset('js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{asset('js/jquery.stepy.js')}}"></script>


<script src="{{asset('js/advanced-form-components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/fuelux/js/spinner.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/jquery-multi-select/js/jquery.quicksearch.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
<script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
<!-- sweet -->
@include('sweet::alert')
<script>

      //step wizard

      $(function() {
          $('#default').stepy({
              backLabel: 'Kembali',
              block: true,
              nextLabel: 'Lanjut',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });
  </script>
  <script src="{{asset('js/form-component.js')}}"></script>

</body>
</html>
