<?php
include "config.php";

if (isset($_SESSION['access_token'])) {
  header('Location: index.php');
  exit();
}



$loginURL = $gClient->createAuthUrl();
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Google</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</head>

<body>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
              <form action="cek_login.php" method="POST">
                <div class="form-floating mb-3">
                  <label for="floatingInput">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-floating mb-3">
                  <label for="floatingPassword">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <div name="recaptcha_response" class="g-recaptcha"
                  data-sitekey="6LcEeBkpAAAAAKlZnMPdFpfNJ3cewEHADVbHQ66F"></div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit"
                    name="login">Signin</button>
                </div>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
              </form>

              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-google" viewBox="0 0 16 16">
                    <path
                      d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                  </svg>
                  <input type="button" name="login" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google"
                    class="btn btn-danger">
                </button>
              </div>
              <br>
              <p class="text-center">jika belum silahkan untuk <a href="register.php">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>