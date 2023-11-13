<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/common.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">


  <script type="text/javascript" src="{{asset('assets/js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
</head>
<body>
 
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    @yield('script')
    <script src="https://cdn.tailwindcss.com/2.2.19/tailwind.min.js"></script>
</body>
</html>