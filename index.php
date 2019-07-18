<?php 

require 'functions.php';
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="chartjs/Chart.js"></script>


	<title>Finance</title>
</head>

<body style="background-color: teal; color: white">

	<div class="navbar-fixed">
		<nav class="no-shadow">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="input-transaksi.php">Input Transaksi</a></li>
					<li><a href="validasi.php">Validasi</a></li>
					<li><a href="laporan.php">Laporan</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<script src="C:\xampp\htdocs\Erpapp\application\views\finance\node_modules\materialize-css\dist\js\materialize.js">
	</script>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Februari", "Maret", "April", "Mei", "Juni", "Juli"],
				datasets: [{
					label: '# Grafik Keuangan',
					data: [12, 19, 20, 23, 25, 30],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>

</html>
