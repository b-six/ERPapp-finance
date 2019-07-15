<?php 
require 'functions.php';

$finance = query("SELECT * FROM transaksi");

// cek submit udah ditekan ato belom
if (isset($_POST["submit"])) {
	// Cek apakah data berhasil ditambahkan atau enggak
	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'input-transaksi.php';
			</script>
		";
	} else {
		echo "data gagal ditambahkan";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- <link rel="stylesheet" href="node_modules\materialize-css\dist\css\materialize.css"> -->
	<link rel="stylesheet" href="css/style.css">

	<title>Finance</title>
</head>

<body style="background-color: teal; color: white">



	<div class="navbar-fixed">
		<nav class="no-shadow">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="input-transaksi.html">Input Transaksi</a></li>
					<li><a href="validasi.php">Validasi</a></li>
					<li><a href="laporan.php">Laporan</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="container">
		<!-- Form -->
		<div class="bg-input-form">
			<div class="row">
				<form action="" class="col s12"  method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="input-field col s6">
							<input type="text" class="datepicker validate" placeholder="Masukkan Tanggal" name="tanggal">
							<label for="tgl-transaksi">Tanggal Transaksi</label>
						</div>
						<div class="input-field col s6">
							<input placeholder="Masukkan Nominal" id="nominal" type="number" class="validate" name="nominal">
							<label for="nominal">Nominal</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Masukkan Akun Debit" id="akun-debit" type="text" class="validate" name="debit">
							<label for="akun-debit">Akun Debit</label>
						</div>
						<div class="input-field col s6">
							<input placeholder="Masukkan Keterangan" id="keterangan" type="text" class="validate"
								autocomplete="off" name="keterangan">
							<label for="keterangan">Keterangan</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Masukkan Akun Kredit" id="akun-kredit" type="text" class="validate" name="kredit">
							<label for="akun-kredit">Akun Kredit</label>
						</div>
						<div class="input-field col s6">
							<a href=""></a>
							<button class="btn waves-effect waves-light btn-form right" type="submit"
								name="submit">Submit
							</button>
						</div>

					</div>
				</form>
			</div>
		</div>

		<!-- Table -->
		<table>
			<thead>
				<tr>
					<th>Tanggal</th>
					<th>Debit</th>
					<th>Kredit</th>
					<th>Nominal</th>
					<th>Keterangan</th>
				</tr>
			</thead>

			<tbody>
			<?php foreach($finance as $row) :?>
				<tr>
					<td><?php echo $row["tanggal"]; ?></td>
					<td><?php echo $row["debit"]; ?></td>
					<td><?php echo $row["kredit"]; ?></td>
					<td><?php echo $row["nominal"]; ?></td>
					<td><?php echo $row["keterangan"]; ?></td>
				</tr>
			<?php endforeach; ?>
				
			</tbody>
		</table>
	</div>
	<script src="node_modules\materialize-css\dist\js\materialize.js">
	</script>
	<script src="js/index.js"></script>
</body>

</html>
