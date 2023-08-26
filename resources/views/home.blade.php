<!doctype html>
<html lang="en">

<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="adminOld\assets\css\bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="login/css/style.css">

</head>

<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class=" d-flex align-items-center justify-content-center">
              <img src="login/images/01.png" style="width: 100px;" alt="">
            </div>
            <h3 class="text-center mb-4">Halaman Login</h3>
            <form action="/authentication" method="post" class="login-form">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control rounded-left" name="nomor_hp" placeholder="Nomor HP" required>
              </div>
              <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="login/js/jquery.min.js"></script>
  <script src="login/js/popper.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/main.js"></script>

</body>

</html>