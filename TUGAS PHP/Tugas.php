<html>
<body>
<?php
$NAMA = $NIM = KELAS ="";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["NAMA"]) && isset($_POST["NIM"])) {
$NAMA = $_POST["NAMA"];
$NIM = $_POST["NIM"];
$KELAS = $_POST["KELAS"];
}


?>
<h1>BELAJAR PHP </h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
		<tr>
			<td>Nama : <input type="text" name="NAMA"><br></td>
		</tr>
		<tr>
			<td>NIM : <input type="text" name="NIM"><br></td>
		</tr>
		<tr>
			<td>KELAS : <input type="text" name="KELAS"></td>td>
		</tr>			
	</table>
<input type="submit">
</form>
<?php
if(empty($NAMA) && empty($NIM) ){
echo "NAMA,NIM dan KELAS  Harus Di isi Dengan Lengkap :) ";
}
else if (!is_numeric($_POST["NIM"])){
	echo "NIM HARUS BERUPA ANGKA";
}
else if(strlen($_POST["NIM"])!=10){
	echo "PANJANG NIM 10 KARAKTER ";
}
else if(!empty($NAMA) && !empty($NIM) ){
echo "NAMA ANDA ADALAH ". $NAMA . " DAN " . "NIM ANDA ADALAH ". $NIM; . "KELAS ANDA ADALAH".$KELAS;
}
?>

</body></html>