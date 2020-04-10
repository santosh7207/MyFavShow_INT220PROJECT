
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="lstyles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
            body{
                background-image: url('bg.jpg');
                background-repeat: no-repeat;
	            background-attachment: fixed;
	            background-size: cover;
            }
        </style>
    </head>
    

<body>
    @include('header')
	
        @yield('content')

    
</body>
</html>
@include('footer')
