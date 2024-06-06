<?php
require '../config.php';
?>

<html>

<head>
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="coba.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <div class="w3-dropdown-hover w3-right">
            <button class="w3-bar-item w3-large w3-button w3-indigo w3-large w3-hover-indigo">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </button>
            <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
                <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
            </div>
        </div>

        <div class="w3-indigo">
            <a href="admin_page.php" id="openNav" class="w3-button w3-indigo w3-xlarge w3-hover-indigo">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg>
                </svg></a>
        </div>
    </div>

    <?php
    if (isset($_GET['id'])) {
        $data_id = mysqli_real_escape_string($konek, $_GET['id']);
        $query = "SELECT * FROM user WHERE id='$data_id' ";
        $query_run = mysqli_query($konek, $query);

        if (mysqli_num_rows($query_run) > 0) {
            $data = mysqli_fetch_array($query_run);
            ?>

            <div class="container mt-3">
                <h2>Biodata</h2>
                <form method="POST">
                    <div class="mb-3 mt-3">
                    <input type="hidden" name="data_id" value="<?= $data['id']; ?>">
                    <div class="mb-3 mt-3">
                        <label for="nim">NIM</label>
                    <input type="nim" class="form-control" value="<?= $data['nim']; ?>" name="nim">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nama">Nama</label>
                        <input type="nama" class="form-control" value="<?= $data['nama']; ?>" name="nama">
                    </div>
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="<?= $data['email']; ?>" name="email">
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="username" class="form-control" value="<?= $data['username']; ?>" name="username">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="text" class="form-control" value="<?= $data['password']; ?>" name="password">
                    </div>
                    <div>
                        <label for="prodi">Program Studi</label>
                        <input type="text" class="form-control" value="<?= $data['prodi']; ?>" name="prodi">
                    </div>
                    <div>
                        <label for="notelp">Nomor Telepon</label>
                        <input type="text" class="form-control" value="<?= $data['notelp']; ?>" name="notelp">
                    </div>
                    <div class="mb-3 mt-3">
            <select name="level" class="form-select" aria-label="Default select example">
                <option selected>Jenis User</option>
                <option value="user">User</option>
                <option value="admin">admin</option>
            </select>
            </div>
                    <button type="submit" name="update_data" class="btn btn-primary">Submit</button>
                </form>
                <?php
        }
    } else {
        echo "<h5> Database Tidak Ditemukan </h5>";
    } ?>
    </div>
    </div>

</body>
<?php
if (isset($_POST['update_data'])) {
    $data_id = mysqli_real_escape_string($konek, $_POST['data_id']);

    $nim = mysqli_real_escape_string($konek, $_POST['nim']);
    $nama = mysqli_real_escape_string($konek, $_POST['nama']);
    $email = mysqli_real_escape_string($konek, $_POST['email']);
    $username = mysqli_real_escape_string($konek, $_POST['username']);
    $password = mysqli_real_escape_string($konek, $_POST['password']);
    $prodi = mysqli_real_escape_string($konek, $_POST['prodi']);
    $notelp = mysqli_real_escape_string($konek, $_POST['notelp']);
    $level = mysqli_real_escape_string($konek, $_POST['level']);

    $query = "UPDATE user SET nim='$nim', nama='$nama', email='$email', username='$username', password='$password', prodi='$prodi', notelp='$notelp', level='$level' WHERE id='$data_id'";
    $query_run = mysqli_query($konek, $query);


    if ($query_run) {
        echo '<script>alert("Update Berhasil!")</script>';
        echo ("<script>window.location = 'admin_page.php';</script>");
        exit;
    } else {
        header("Location: edit_user.php");
        exit;
    }
}
?>

</html>