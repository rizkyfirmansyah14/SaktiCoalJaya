	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
	    <!-- Mobile Specific Meta -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Favicon-->
	    <link rel="shortcut icon" href="img/fav.png">
	    <!-- Author Meta -->
	    <meta name="author" content="colorlib">
	    <!-- Meta Description -->
	    <meta name="description" content="">
	    <!-- Meta Keyword -->
	    <meta name="keywords" content="">
	    <!-- meta character set -->
	    <meta charset="UTF-8">
	    <!-- Site Title -->
	    <title>Sakti Coal Jaya</title>

		<link rel="icon" type="image/png" href="{{asset('assets/users/img/title.png')}}">

	    @include('partial.user.style')
	</head>

	<body>

	    <!-- start banner Area -->

	    <!-- start header -->
	     @include('partial.user.header')
	    <!-- end header -->

            <!-- content -->
            @yield('content')

	    <!-- start footer Area -->
	        @include('partial.user.footer')
	    <!-- End footer Area -->

	    @include('partial.user.script')
	</body>

	</html>