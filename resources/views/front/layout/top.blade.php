
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $shareData['system_name'] }}</title>
    <meta name="title" content="{{ $shareData['meta_title'] }}">
    <meta name="keywords" content="{{ $shareData['meta_keyword'] }}">
    <meta name="description" content="{{ $shareData['meta_description'] }}">

    <meta property="og:url"           content="https://localhost:8000" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $shareData['meta_title'] }}" />
    <meta property="og:description"   content="{{ $shareData['meta_description'] }}" />
    <meta property="og:image"         content="{{ $shareData['front_logo'] }}" />

    <!-- favicon -->
    <link href="{{ asset('storage/others') }}/{{ $shareData['favicon'] }}" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{ asset('/front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{ asset('/front/fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Mobile Menu Style -->
    <link href="{{ asset('/front/css/mobile-menu.css') }}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{ asset('/front/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/front/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{ asset('/front/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

