<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('pagetitle')
      | @lang('base.appname')
    </title>
    <meta name="robots" content="index,follow">
    <meta name="author" content="Oliver Jakoubek">
    <meta http-equiv="expires" content="3600">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <!--[if !IE 7]><style type="text/css">#sf-wrapper {display:table;height:100%}</style><![endif]-->
    <!-- <link rel="stylesheet/less" type="text/css" href="less/bootstrap.less"> -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/select2.css') }}
    {{ HTML::style('css/jquery.dataTables.css') }}
    {{ HTML::style('css/DT_bootstrap.css') }}
    {{ HTML::style('css/TableTools.css') }}
    {{ HTML::style('css/main.css') }}
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="30">

  <!-- Navbar
    ================================================== -->
  <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/">@lang('base.appname')</a>


      <div class="nav-collapse collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('Rm.title') <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>{{ link_to_action('AccountController@index', Lang::get('Rm.accounts_all')) }}</li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Logistik <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>{{ link_to_action('HomeController@index', 'Info') }}</li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Zustellerbetreuung <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>{{ link_to_action('HomeController@index', 'Info') }}</li>
            </ul>
          </li>

        </ul>

        <ul class="nav pull-right" id="main-menu-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Info <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>{{ link_to_action('HomeController@index', 'Info') }}</li>
              <li>{{ link_to_action('HomeController@index', 'Support-Informationen') }}</li>
            </ul>
          </li>

        </ul>


       @if (Auth::check())
        <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" title="Angemeldet als {{ Auth::user()->emailaddress }}">
              <i class="icon-user icon-large"></i> {{ Auth::user()->accountname }}
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>{{ HTML::link_to_route('profil', 'Benutzerprofil'); }}</li>
              <li class="divider"></li>
              <li>{{ HTML::link_to_route('logout', 'Abmelden'); }}</li>
            </ul>
          </div>
      @else
      <div class="pull-right">
        <ul class="nav">

        </ul>
      </div>
      @endif

       </div>
     </div>
   </div>
 </div>

<div class="container">

<div class="row">
  <div class="span12" id="breadcrumb">
    <ul class="breadcrumb">
      @yield('breadcrumb')
    </ul>
  </div>
</div>

<div class="row">
    <div class="span6">
      <h1>@yield('pagetitle')</h1>
      <p class="lead">@yield('pagesubtitle')</p>
    </div>
</div>

@yield('content')
</div><!-- End .container -->

  {{ HTML::script('js/jquery-1.10.1.min.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/select2.min.js') }}
  {{ HTML::script('js/less.min.js') }}
  {{ HTML::script('js/jquery.dataTables.min.js') }}
  {{ HTML::script('js/DT_bootstrap.js') }}
  {{ HTML::Script('js/TableTools.min.js') }}

  <div class="container">
    <footer id="footer">
    </footer>
  </div>

@yield('script')

</body>
</html>
