<?php
	echo "<head><title>My Guest Book</title></head>";
	$nama= $_POST['nama'];
	$nim= $_POST['nim'];
	$email= $_POST['email'];
	$jenis= $_POST['jenis'];
	$prodi= $_POST['prodi'];
	$alamat= $_POST['alamat'];
	$fp = fopen("guestbook.txt", "a+");
	fputs($fp, "$nama|$nim|$email|$jenis|$prodi|$alamat\n");
	fclose($fp);

	echo "Terimakasih Atas Partisipasi Anda<br>";
	echo "<a href=lihat.php> Lihat Biodata</a><br>";
?>