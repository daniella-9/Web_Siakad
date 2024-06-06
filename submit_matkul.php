<?php
require 'config.php';

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}


if (isset($_POST['tambah_matkul'])) {
    $username = $_SESSION['username'];
    $query = mysqli_query($konek, "SELECT * FROM user WHERE username = '$username'");
        $query_cek = mysqli_num_rows($query);
        if ($query_cek > 0) {

    // Check if checkboxes are submitted
    if (isset($_POST['matkul']) && is_array($_POST['matkul'])) {
        foreach ($_POST['matkul'] as $matkul) {
            // Insert selected courses into 'krs' table
            $result = mysqli_query($konek, "SELECT * FROM matkul WHERE matkul = '$matkul'");
            $matkul_data = mysqli_fetch_assoc($result);

            $dosen = $matkul_data['dosen'];
            $sks = $matkul_data['sks'];

            // Insert selected courses into 'krs' table
            $query = "INSERT INTO krs (username, matkul, dosen, sks) VALUES ('$username', '$matkul', '$dosen', '$sks')";
            mysqli_query($konek, $query);
        }
        
    }
}

    // Close the database connection
    mysqli_close($konek);
}

// Redirect back to the form page or any other page
header("Location: krs.php");
exit();
?>