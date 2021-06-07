<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <title>Sticky Navigation</title>
  </head>
  <body>
    <nav class="nav">
      <div class="container">
        <h1 class="logo"><a href="/index.html">BIG-LIFE-ZOO</a></h1>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="{{ route('login') }}">login</a></li>
          <li><a href="#">register</a></li>

        </ul>
      </div>
    </nav>

    
    <script src="script.js"></script>
  </body>
</html>
