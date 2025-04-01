<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>@yield('titile')</title>
</head>
<body>
  @include('components.nav')
  <main>
    @if (session()->has("success"))
        <x-alert color="blue">
          Operation Bien Effectuer
        </x-alert>
    @else (session()->has("success"))
        <x-alert color="red">
          Operation Non Effectuer
        </x-alert>
    @endif


    @yield('content')
  </main>
</body>
</html>