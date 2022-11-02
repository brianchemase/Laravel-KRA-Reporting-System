<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    {{-- {{ asset('')}} --}}
    <link rel="stylesheet" href="{{ asset('login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css')}}">

    <title>KRA Reporting System</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" data-tilt style="background-image: url('{{ asset('login/images/bg.jpg')}}');" ></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            
            <div class="form-block mx-auto" >
              <div class="gallery">
                <a>
                  <img src="{{ asset('login/images/KRA_Logo.png')}}" alt="KRA Logo" width="300" height="200">
                </a>
              </div>
              <div class="text-center mb-5">
              <h3>Login to <br><strong>KRA Reporting System</strong></h3>
              <p class="mb-4">Enter Password to log in</p>
              </div>
              <form action="dash" method="post" autocomplete="off">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="username"class="form-control" placeholder="T12345678" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                </div>
                <input type="submit" value="Log In" class="btn btn-block btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="{{ asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('login/js/popper.min.js')}}"></script>
    <script src="{{ asset('login/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('login/js/main.js')}}"></script>
    <script src="{{ asset('login/js/vanilla-tilt.js')}}"></script>
  </body>
</html>