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



function ubah($data){
	global $db;
	$id =($data["id"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$debit = htmlspecialchars($data["debit"]);
	$kredit = htmlspecialchars($data["kredit"]);
	$nominal = htmlspecialchars($data["nominal"]);
	$keterangan = htmlspecialchars($data["keterangan"]);

	$query = "UPDATE transaksi SET
				tanggal='$tanggal',
				debit='$debit',
				kredit='$kredit',
				nominal='$nominal',
				keterangan='$keterangan'
				WHERE id = $id
				";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}

function hapus($id){

	global $db;
	mysqli_query($db, "DELETE FROM transaksi WHERE id = $id");

	return mysqli_affected_rows($db);
}

 ?>