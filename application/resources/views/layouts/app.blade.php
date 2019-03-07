<!DOCTYPE html>
<html>

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    @yield('title')
@include('layouts.includes.style')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body class="body-color4" >
<!-- THE HEADER -->
@include('layouts.includes.header')
<!-- MAIN CONTENT -->
@yield('content')
<!-- THE FOOTER -->
@include('layouts.includes.footer')
@include('layouts.includes.login')
@include('layouts.includes.register')
@include('layouts.includes.utility')
<!-- SCRIPTS	 -->
@include('layouts.includes.script')
</body>

</html>
