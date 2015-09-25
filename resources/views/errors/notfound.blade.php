<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Halaman Tidak Ditemukan HMSI Apps</title>
  <meta name="description" content="IDMS | Information and Data Management System" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" cache="false" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js" cache="false"></script>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/excanvas.js" cache="false"></script>
  <![endif]-->
</head>
<body>
    <section id="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig">:(</h1>
          <h3 class="animated fadeInUpBig">Oooopppss... Sorry guys we don't found what you're looking for.</h3>
        </div>
        <div class="list-group m-b-sm bg-white m-b-lg animated fadeInUpBig">
          <a href="{{ URL::to('/') }}" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> Goto homepage
          </a>
          <a href="http://twitter.com/hmsi_stikom" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge">@hmsi_stikom</span>
            <i class="fa fa-fw fa-phone icon-muted"></i> Ask developer
          </a>
          <a href="mailto:hmsi_stikom@gmail.com" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge">hmsi_stikom@gmail.com</span>
            <i class="fa fa-fw fa-phone icon-muted"></i> Send us message
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix animated fadeInUpBig">
      <p>
        <small>HMSI Apps<br>
        Save The Code &copy; 2015</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <!-- App -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/app.plugin.js') }}"></script>
  <script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>

</body>
</html>
