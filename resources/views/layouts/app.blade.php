<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item {{(Route::current()->getName() == 'aadhaar') ? 'active' : null}}">
          <a class="nav-link" href="http://192.168.1.14/myaddress/public/aadhaar">Aadhaar</a>
        </li>
        <li class="nav-item {{(Route::current()->getName() == 'flname') ? 'active' : null}}">
          <a class="nav-link" href="http://192.168.1.14/myaddress/public/flname">Name search</a>
        </li>
        <li class="nav-item {{(Route::current()->getName() == 'address') ? 'active' : null}}">
        <a class="nav-link" href="http://192.168.1.14/myaddress/public/address">Address</a>
        </li>
        <li class="nav-item {{(Route::current()->getName() == 'haves') ? 'active' : null}}">
        <a class="nav-link" href="http://192.168.1.14/myaddress/public/haves">multiple No</a>
        </li>
      </ul>
      <form class="d-flex" action="numbers1" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="ad">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
