<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
  </head>
  <body>
      <div id="app">
          @yield('section')
      </div>
  </body>
</html>