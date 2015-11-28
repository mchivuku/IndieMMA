<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js') }}
    <![endif]-->
    
     <!--link media="all" type="text/css" rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css"-->
     <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/bootstrap-formhelpers.min.css')}}">

     <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
     <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/app-theme.css')}}">


      <script src="http://code.jquery.com/jquery-latest.js"></script>


    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/apple-touch-icon-57-precomposed.png') }}">

      <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/bootstrap-formhelpers.js')}}"></script>

</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->


<div class="navbar-wrapper">
  <div class="container-fluid">
    <div class="navbar navbar-inverse">

        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="{{ URL::to('/') }}">IndieMMA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('about') }}">About</a></li>
            <li><a href="{{ URL::to('contact') }}">Contact</a></li>

		 </ul>
            <ul class="nav navbar-nav navbar-right">
                <li> <a href="{{ URL::to('/auth/login') }}">Sign in</a></li>
                <li><a href="{{ URL::to('/auth/register') }}">Register</a></li>
            </ul>


        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->



  @yield('content')




 <footer>
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
               </ul>
                <p>Copyright &copy; IndieMMA 2015</p>
          </div>
        </div>

      </footer>


</div><!-- /.container -->
 <!-- Script-->
       <script type="text/javascript" src="{{asset('js/main.js')}}"/>


    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <!-- end javascript -->
</body>
</html>