<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <title>GIPE 2022! @yield('title')</title>
</head>
<body>

    <div>
        @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
        @endif


        @yield('content')
    </div>

</body>
<footer>
    <div class="text-center">
        &copy; Global Intercultural Project Experience <script>document.write(new Date().getFullYear())</script>

    </div>
    <script src="{{asset('js/app.js')}}">

</footer>

</html>
