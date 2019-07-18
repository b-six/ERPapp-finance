<?php 
require_once __DIR__ . '/vendor/autoload.php';

require 'db_bukubesar.php';

$finance = query("SELECT * FROM transaksi");


$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Buku Besar</title>
	<link rel="stylesheet" href="css/print.css">
</head>
<body>
<h1> Buku Besar </h1>
<table border="1" cellpadding="30" cellspacing="0" width ="50">
	<tr>
		
		<th>Tanggal transaksi</th>
		<th>keterangan</th>
		<th>Debit</th>
		<th>Kredit</th>
	</tr>';
foreach ($finance as $row){
	$html .='<tr>
	<td>'. $row["tgl_transaksi"] .'</td>
	<td>'. $row["keterangan"] .'</td>
	<td>'. $row["kredit"] .'</td>
	<td>'. $row["debit"] .'</td>
	</tr>';
}

$html .='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('bukubesar.pdf', 'I');
 ?>