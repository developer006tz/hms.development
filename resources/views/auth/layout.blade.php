<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    @include('layouts.partials._meta')
	<title>Hospital Management System</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/mini.png')}}" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
      rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{asset('assets/images/mini.png')}}" style="max-height: 55px; max-width: 55px;" alt="logo"></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">@yield('heading')</h4>
                                    <form action="@yield('formRoute')" method="POST">
                                        @csrf
                                        @yield('content')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    @php
    $notyfOptions = [
        'dismissible' => true,
        'duration' => 5000,
        'position' => [
            'x' => 'right',
            'y' => 'top'
        ]
    ];
@endphp

@foreach (['success', 'error'] as $type)
    @if (session()->has($type))
        <script>
            var notyf = new Notyf(@json($notyfOptions));
            notyf.{{ $type }}('{{ session($type) }}');
        </script>
    @endif
@endforeach



<script>
    $(document).ready(function() {
        $('.alert').alert()
    })
</script>

</body>
</html>