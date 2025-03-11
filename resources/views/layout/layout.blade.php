<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>@yield('titile')</title>
</head>
<body>
  @include('components.nav')
  <main>
    @yield('content')
  </main>
</body>
</html>