
<?php
include_once 'config.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirect_url, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	include 'config.php';


	$gpuserprofile = $google_oauthv2->userinfo->get();

	$nama = $gpuserprofile['given_name']." ".$gpuserprofile['family_name'];
	$email = $gpuserprofile['email']; 


	$sql = mysqli_query($konek, "SELECT id, username, nama FROM user WHERE email='".$email."'");
	$user = mysqli_fetch_array($sql); 

	if(empty($user)){ 
		$ex = explode('@', $email);
		$username = $ex[0];

		mysqli_query($konek, "INSERT INTO user(username, nama, email) VALUES('".$username."', '".$nama."', '".$email."')");

		$id = mysqli_insert_id($konek);
	}else{
		$id = $user['id'];
		$username = $user['username'];
		$nama = $user['nama'];
	}

	$_SESSION['id'] = $id;
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;

    header("location: index.php");
} else {
	$authUrl = $gClient->createAuthUrl();
	header("location: ".$authUrl);
}
?>
