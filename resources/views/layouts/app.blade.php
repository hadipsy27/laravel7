<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravshop'}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('head')
</head>
<body>
    @include('layouts.navigation')
    <div class="py-4">

        @include('alert')

        @yield('content')
        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
