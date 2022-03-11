<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('storage/css/all.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('storage/css/doctor.css')}}">
    <link rel="icon" href="{{ url('storage/images/logo.png')}}">
    <script src="{{ url('storage/js/jquery.js') }}"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="nav" style="background-color: white">
                    <h5>CONTROL PANEL</h5>
                    <div class="unav">
                        <ul style="list-style-type: none;">
                            {{-- <li>
                                <a href="">REGISTER PATIENTS</a>
                            </li> --}}
                            {{-- <li>
                                <a href="">VIEW PATIENTS</a>
                            </li> --}}
                            <li>
                                <a href="/logout">LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="content">
                    @include('doctor.regform')
                    @include('doctor.patient')
                </div>
            </div>
        </div>
    </div>
</body>
</html>