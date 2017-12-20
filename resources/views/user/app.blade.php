<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user/layout/head')
  </head>
  <body>
    @include('user/layout/header')

    @section('home')
      @show
    
    @include('user/layout/footer')
  </body>
</html>