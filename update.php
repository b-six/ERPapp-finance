<?php 

require 'functions.php';

$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$abc = query("SELECT * FROM transaksi WHERE id = $id")[0];


// cek submit udah ditekan ato belom
if (isset($_POST["submit"])) {
	// Cek apakah data berhasil diubah atau enggak
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'input-transaksi.php';
			</script>
		";
	} else {
		echo "data gagal diubah";

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
					<li class="active"><a href="input-transaksi.php">Input Transaksi</a></li>
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
					<input type="hidden" name="id" value="<?php echo $abc["id"]; ?>">
						<div class="input-field col s6">
							<input type="text" class="datepicker validate" placeholder="Masukkan Tanggal" name="tanggal" value="<?php echo $abc["tanggal"]; ?>">
							<label for="tgl-transaksi">Tanggal Transaksi</label>
						</div>
						<div class="input-field col s6">
							<input placeholder="Masukkan Nominal" id="nominal" type="number" class="validate" name="nominal" value="<?php echo $abc["nominal"]; ?>">
							<label for="nominal">Nominal</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Masukkan Akun Debit" id="akun-debit" type="text" class="validate" name="debit" value="<?php echo $abc["debit"]; ?>">
							<label for="akun-debit">Akun Debit</label>
						</div>
						<div class="input-field col s6">
							<input placeholder="Masukkan Keterangan" id="keterangan" type="text" class="validate"
								autocomplete="off" name="keterangan" value="<?php echo $abc["keterangan"]; ?>">
							<label for="keterangan">Keterangan</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Masukkan Akun Kredit" id="akun-kredit" type="text" class="validate" name="kredit" value="<?php echo $abc["kredit"]; ?>">
							<label for="akun-kredit">Akun Kredit</label>
						</div>
						<div class="input-field col s6">
							<a href=""></a>
							<button class="btn waves-effect waves-light btn-form right" type="submit"
								name="submit">Edit
							</button>
						</div>

					</div>
				</form>
			</div>
		</div>
		<script src="node_modules\materialize-css\dist\js\materialize.js">
	</script>
	<script src="js/index.js"></script>

</body>
</html>