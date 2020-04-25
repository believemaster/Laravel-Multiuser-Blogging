<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('admin.layout.top')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   @include('admin.layout.header')
    
   @include('admin.layout.navigation')
   
    @yield('content')
    
<div class="control-sidebar-bg"></div>
</div>

@include('admin.layout.bottom')
</body>
</html>
