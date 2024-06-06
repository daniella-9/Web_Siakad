<?php
include "config.php";

if(isset($_POST['submit'])){
    $nim =  $_POST['nim'];
    $nama =  $_POST['nama'];
    $username =  $_POST['username'];
    $email    = trim(htmlspecialchars( $_POST['email']));
    $prodi = $_POST['prodi'];
    $notelp = $_POST['notelp'];
    $password = $_POST['password'];
    // $cpassword     = $_POST['password'];
    $level = $_POST['level'];

    $insert = "INSERT INTO user (id, nim, nama, email, username, prodi, notelp, password, level, google_id) VALUES (null, '$nim', '$nama' ,'$email', '$username', '$prodi' , '$notelp','$password', '$level', null)";

    $result = mysqli_query($konek, $insert);

    if($result){
        //jika berhasil
        header('location:login.php');
    } else{
        //jika gagal
        echo '<script>
                alert("Registrasi Gagal");
                window.location.href="register.php";
            </script>';
    }
}


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


      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                <form action="" method="POST">

                    <?php
                        if(isset($error)){
                            foreach($error as $err){
                                echo '<span class="error-msg">'.$err.'<span>';
                            }

                        }
                    ?>
                     
                  <div class="form-floating mb-3">
                    <label for="floatingInput">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM"
                      required>
                  </div>

                  <div class="form-floating mb-3">
                    <label for="floatingInput">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                      required>
                  </div>

                  <div class="form-floating mb-3">
                    <label for="floatingInput">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                      required>
                  </div>
                  <div class="form-floating mb-3">
                    <label for="floatingInput">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                      required>
                  </div>
                  <div class="form-floating mb-3">
                    <label for="floatingInput"> Prodi</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Prodi"
                      >
                  </div>
                  <div class="form-floating mb-3">
                    <label for="floatingInput"> Nomor Telepon</label>
                    <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telepon"
                      required>
                  </div>
                  <div class="form-floating mb-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                      required>
                  </div>
                  <!-- <div class="form-floating mb-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password"
                      required>
                  </div> -->

                  <div class="form-floating mb-3">
                    <label for="level">Level</label>
                    <select name="level" id="level" class="form-select" required>
                                    <option value="" selected>--Pilih Level--</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                    </select >
                  </div>



                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit"
                      name="submit">Register</button>
                  </div>
                </form>
                <p>Jika sudah memiliki akun, <br> silahkan klik <a href="login.php">Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </body>

  </html>