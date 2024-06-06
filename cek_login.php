<?php
include "config.php";

if (isset($_SESSION['access_token'])) {
  header('Location: index.php');
  exit();
}

$loginURL = $gClient->createAuthUrl();
?>

  <?php
  if (isset($_POST['login'])) { //untuk captcha jika masih kosong
    if (empty($_POST['g-recaptcha-response'])) {
      echo '<script>alert("reCaptcha Empty")</script>';
      echo ("<script>window.location = 'login.php';</script>");
    } else //jika captcha terisi
    {
      $recaptcha = $_POST['g-recaptcha-response'];
      $secret_key = '6LcEeBkpAAAAAJo_IRm6hOxd-3hoXvmHjipyxTK8';
      $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
        . $secret_key . '&response=' . $recaptcha;
      $response = file_get_contents($url);
      $response = json_decode($response);

      $salahpassword = false;

      $username = $_POST["username"];
      $password = $_POST["password"];

      //jika respon captcha diterima
      if ($response->success = true) {
        $_SESSION['secured'] = "Secured";

        if ($password == $password)
          $query = mysqli_query($konek, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $query_cek = mysqli_num_rows($query);
        if ($query_cek > 0) {

            $data = mysqli_fetch_assoc($query);

            if($data['level']=="admin"){
 
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "admin";
                // alihkan ke halaman dashboard admin
                header("location:admin/admin_page.php");
         
            // cek jika user login sebagai pegawai
            }else if($data['level']=="user"){
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "user";
                // alihkan ke halaman dashboard pegawai
                header("location:index.php");
        } else {
          $salahpassword = true;
        }
      } else {
        echo '<script>alert("Error in Google reCAPTACHA")</script>';
        echo ("<script>window.location = 'login.php';</script>");
      }
    }
  }
}
  ?>

