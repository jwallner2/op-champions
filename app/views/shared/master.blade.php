<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>op-champions.com</title>
    <!-- Bootstrap core CSS -->
    {{HTML::style('css/main.css')}}
  </head>
  <body role="document">
    
    @yield('Header') 

    <div class="container">
      @yield('pageContent')
    </div>
    
    {{HTML::script('js/jquery-1.11.3.min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
  </body>
</html>
