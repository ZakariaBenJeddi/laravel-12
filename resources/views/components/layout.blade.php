<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>
  <x-nav></x-nav>
  <div class=" container mx-auto">
    <div class="text-red-400">
      <div class="text-[80px] font-semibold text-center">
        {{$header2}}
      </div>
      {{$slot}}
    </div>
  </div>
</body>
</html>