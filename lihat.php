<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");
echo "<table border=1>";

while ($isi = fgets($fp,80)) {
    $pisah = explode("|",$isi);
    echo "<tr><td>NAMA </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>NIM </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>JENIS KELAMIN </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>PRODI </td><td>: $pisah[4]</td></tr>";
    echo "<tr><td>ALAMAT</<tr><td>: $pisah[5]</td></tr><tr><td>&nbsp;<hr></td></tr></hr>";
}

echo "</table>";
echo "<a href = index.php>Kembali ke menu utama</a>";
?>