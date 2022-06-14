<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <!-- favicon -->
    <!-- estilos -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .active{
            color: red;
            font-weigth: bold;
        }
    </style>
</head>
<body>
    <!-- header -->
   @include('layouts.partials.header')

    <!-- nav -->
   
    @yield('content')
    <!-- footer -->
   @include('layouts.partials.footer')

    <!-- script -->
</body>
</html>