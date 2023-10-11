
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Hospital management | Error">
    <meta name="author" content="Jason Vision">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HMS | Error @yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/mini.png')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>