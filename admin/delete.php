<?php
require '../config.php';

if (isset($_GET['id'])) {
    $data_id = mysqli_real_escape_string($konek, $_GET['id']);
    $query = "SELECT * FROM user WHERE id='$data_id' ";
    $query_run = mysqli_query($konek, $query);
}
?>

<?php
$query = "DELETE FROM user WHERE id='$data_id' ";
$query_run = mysqli_query($konek, $query);
 
if($query_run)
    {
        header("Location: admin_page.php");
        exit;
    }
    else
    {
        header("Location: admin_.php");
        exit;
    }
?>