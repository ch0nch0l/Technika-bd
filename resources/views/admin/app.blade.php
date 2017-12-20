<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin/layout/head')
  </head>
  <body>
    @include('admin/layout/header')
    @include('admin/layout/sidebar')


    @section('content')
      @show
    
    @include('admin/layout/footer')
  </body>
</html>