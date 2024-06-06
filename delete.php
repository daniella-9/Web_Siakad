<?php
require 'config.php';

if (isset($_GET['id'])) {
    $data_id = mysqli_real_escape_string($konek, $_GET['id']);
    $query = "SELECT * FROM krs WHERE id='$data_id' ";
    $query_run = mysqli_query($konek, $query);
}
?>

<?php
$query = "DELETE FROM krs WHERE id='$data_id' ";
$query_run = mysqli_query($konek, $query);
 
if($query_run)
    {
        header("Location: krs.php");
        exit;
    }
    else
    {
        header("Location: krs.php");
        exit;
    }
?>