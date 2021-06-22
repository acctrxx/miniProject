<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('../layout.header')
  <title>Home</title>
</head>
<body>
  <div class="container">
    @include('pages.layout.nav')
    @include('pages.layout.content')
    @include('../layout.footer')
  </div>  
</body>
</html>