<?php 

$db = mysqli_connect("localhost", "root", "", "finance");


function query($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}
function tambah($data){
	global $db;
	$tanggal = htmlspecialchars($data["tanggal"]);
	$debit = htmlspecialchars($data["debit"]);
	$kredit = htmlspecialchars($data["kredit"]);
	$nominal = htmlspecialchars($data["nominal"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	
	$query = "INSERT INTO transaksi
				VALUES
				('', '$tanggal', '$debit', '$kredit', '$nominal', '$keterangan')
				";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);


}
 ?>