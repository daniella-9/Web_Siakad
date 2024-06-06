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
			<button id="openNav" class="w3-button w3-indigo w3-xlarge w3-hover-indigo">
				<svg width="30" height="35" fill="w3-indigo" viewBox="0 0 16 16">
					<path fill-rule="evenodd">
				</svg></button>
		</div>
	</div>
	</div>
	<h1 class="text-center fw-bold">List Akun User</h1>
	<div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
		<a href="create_user.php" class="btn btn-outline-success" type="button">Create +</a>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Username</th>
				<th>Username</th>
				<th>Program Studi</th>
				<th>Jenis</th>
				<th colspan="2">Tindakan</th>
			</tr>
		</thead>
		<?php
		$no = 1;
		$query = "SELECT * FROM user";
		$query_run = mysqli_query($konek, $query);

		if (mysqli_num_rows($query_run) > 0) {
			foreach ($query_run as $data) { ?>
				<tr>
					<a type="hidden" <?= $data["id"]; ?>>
					</a>
					<td>
						<?= $no++ ?>
					</td>
					<td>
						<?= $data["nim"]; ?>
					</td>
					<td>
						<?= $data["nama"]; ?>
					</td>
					<td>
						<?= $data["email"]; ?>
					</td>
					<td>
						<?= $data["username"]; ?>
					</td>
					<td>
						<?= $data["prodi"]; ?>
					</td>
					<td>
						<?= $data["password"]; ?>
					</td>
					<td>
						<?= $data["level"]; ?>
					</td>
					<div>
						<td>
							<a class="btn btn-outline-danger" href="delete.php?id=<?= $data['id']; ?>">Delete</a>
						</td>
						<td>
							<a class="btn btn-outline-primary" href="edit_user.php?id=<?= $data['id']; ?>">Edit</a>
						</td>
					</div>
				</tr>

				<?php
			}
		} else {
			echo "<h5> Database Tidak Ditemukan </h5>";
		}
		?>
	</table>
	</div>

	</div>

</body>