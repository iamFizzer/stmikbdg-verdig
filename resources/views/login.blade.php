<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; STMIK</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('temp')}}/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('temp')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('temp')}}/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="{{asset('temp')}}/assets/img/stmik2.jpeg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">SISTEM <span class="font-weight-bold"><p>VERIFIKASI TANDA TANGAN</p></span></h4>
            <form action="postlogin" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your Username
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>

              <!-- <div class="form-group text-right">
                
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4"><i class="fas fa-sign-in-alt"></i> 
                  Login
                </button>
              </div> -->
              <div class="row">
            <div class="col-7">
                <div class="icheck-primary" title="adminlte::adminlte.remember_me_hint">
                    <input type="checkbox" name="remember" id="remember">

                    <label for="remember">
                        Ingat Saya
                    </label>
                </div>
            </div>

            <div class="col-5">
                <button type="submit" class="btn btn-block btn-lg btn-icon btn-primary" tabindex="4">
                    <span class="fas fa-sign-in-alt"></span>
                    Login
                </button>
            </div>
        </div>

              
            </form>

            
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{asset('temp')}}/assets/img/unsplash/login.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">STMIK BANDUNG</h1>
                <h5 class="font-weight-normal text-muted-transparent">Cikutra, Bandung</h5>
                <strong>Copyright &copy; 2022-2023 <a href="http://adminlte.io">STMIK Bandung</a>.</strong> All rights
    reserved.
              </div>
            <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA"></a> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('temp')}}/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{asset('temp')}}/assets/js/scripts.js"></script>
  <script src="{{asset('temp')}}/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>