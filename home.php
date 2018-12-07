<!doctype html>
<html lang="en">
  <head>
    <title>Social Media Api</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Top navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
     <div class="jumbotron">
        <h1>FaceBook API</h1>
        <p class="lead">This example is a quick exercise to illustrate how the FaceBook API use.</p>
        <a href="login.php" class="btn btn-lg btn-primary">FaceBook </a>
      </div>

      <div class="jumbotron">
        <h1>Google + API</h1>
        <p class="lead">This example is a quick exercise to illustrate how the Google + API use.</p>
          <a href="google/login.php" class="btn btn-lg btn-danger">Google +</a>
      </div>

      <div class="jumbotron">
        <h1>Instagram API</h1>
        <p class="lead">This example is a quick exercise to illustrate how SMS API use.</p>
        <form action="sms.php" method="GET">
          <a href="login.php" class="btn btn-lg btn-info">Instagram </a>
        </form>
      </div>
    </main>


  </body>
</html>