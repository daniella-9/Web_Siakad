<?php
require 'config.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="coba.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


<body>
    <div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
            <button onclick="w3_close()" class="w3-bar-item w3-large w3-text-indigo w3-hover-indigo">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-x-lg"
                    viewBox="0 0 16 16">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                </svg>
                Close
            </button>

            <a href="index.php" class="w3-bar-item w3-button w3-text-indigo w3-hover-indigo" style="height: 50px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path
                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                </svg>
                Home
            </a>

            <a href="biodata.php" class="w3-bar-item w3-button w3-text-indigo w3-hover-indigo" style="height: 50px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                Biodata
            </a>

            <a href="#" class="w3-bar-item w3-button w3-text-indigo w3-hover-indigo" style="height: 50px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                </svg>
                Kartu Rencana Studi
            </a>

            <a href="#" class="w3-bar-item w3-button w3-text-indigo w3-hover-indigo" style="height: 50px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-file-earmark-post-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1 0-1m0 3h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5" />
                </svg>
                Kartu Hasil Studi
            </a>
        </div>

        <div class="w3-dropdown-hover w3-right">
            <button class="w3-button w3-indigo w3-large w3-hover-indigo">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </button>
            <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
                <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
            </div>
        </div>

        <div class="w3-indigo">
            <button id="openNav" class="w3-button w3-indigo w3-xlarge w3-hover-indigo" onclick="w3_open()">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg></button>
        </div>
    </div>

    <div id="main">
        <h1 class="text-center fw-bold">Kartu Rencana Studi</h1>

        <div>
            <table class="table table-bordered">
                <thead>
                <tbody>
                <?php
                    $no = 1;
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM user WHERE username = '$username'";
                    $query_run = mysqli_query($konek, $query);

                    if (mysqli_fetch_assoc($query_run) > 0) {
                        foreach ($query_run as $data) { ?>
                            <tr>
                                <a type="hidden" <?= $data["id"]; ?>>
                                </a>
                            </tr>
                            <tr>
                                <td class="table-primary"><b> NIM </b></td>
                                <td>
                                    <?= $data["nim"]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-info"><b> Nama </b></td>
                                <td>
                                    <?= $data["nama"]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-primary"><b> Program Studi </b></td>
                                <td>
                                    <?= $data["prodi"]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-info"><b> Email </b></td>
                                <td>
                                    <?= $data["email"]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-primary"><b> Nomor Telepon </b></td>
                                <td>
                                    <?= $data["notelp"]; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<h5> Database Tidak Ditemukan </h5>";
                    } ?>
                </tbody>
                </thead>
            </table>

<br>

</div>
	<div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
		<a href="tambah_matkul.php" class="btn btn-outline-success" type="button">Tambah Matkul +</a>
	</div>

        </div>
                <table class="table table-striped">
                    <thead>
                        <tr><th colspan="7" class="text-center"> Kartu Rencana Studi</th></tr>
                        <tr>
                            <th>No</th>
                            <th>Matkul</th>
                            <th>Dosen</th>
                            <th>sks</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <?php
                   
                   $no = 1;
                   $username = $_SESSION['username'];
                   $query = "SELECT * FROM krs WHERE username = '$username'";
                   $query_run = mysqli_query($konek, $query);

                   if (mysqli_fetch_assoc($query_run) > 0) {
                       foreach ($query_run as $data) { ?>
                   
                            <tr>
                                <a type="hidden" <?= $data["id"]; ?>>
                                </a>
                                <a type="hidden"
                                    <?= $data["username"]; ?>>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $data["matkul"]; ?>
                                </td>
                                <td>
                                    <?= $data["dosen"]; ?>
                                </td>
                                <td>
                                    <?= $data["sks"]; ?>
                                </td>
                                <td>
							<a class="btn btn-outline-danger" href="delete.php?id=<?= $data['id']; ?>">Delete</a>
						</td>
                            </tr>

                            <?php
                        }
                    } else {
                        echo "<h5 class=text-center> Belum ada isi </h5>";
                    }
                    ?>
                </table>
            </div>

                </div>

</body>

</html>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "15%";
  document.getElementById("mySidebar").style.width = "15%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>