<html>
    <head>
        <title>RESPONSI</title>
        <link rel="stylesheet" href="file.css">
    </head>
    <body>
        <div class="container">
            <h2 class="tes" align="center"><marquee width="50%" height="100%"><br>Hallo!! Selamat Datang...</marquee></h2>
            <?php
            $filecounter="new.txt";
            $fl=fopen($filecounter, "r+");
            $hit=fread($fl, filesize($filecounter));
            
            date_default_timezone_set('Asia/Jakarta');
            $date=new DateTime('now');
            echo ("<p align=center>");
            echo $date->format('d-m-Y | H:i:s');
            echo ("</p>");
            
            fwrite($fl, $hit, strlen($hit));
           fclose($fl);
            ?>
        <div align="center"><strong> <font size="6" face="Courier New, Courier,mono">BIODATA</font></strong></div>

    <form name="form1" method="post" action="proses.php">
        <table width="58%" border="0" align="center">
            <tr>
                <td>NAMA</td>
                <td><input name="nama" type="text" id="nama" /></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td><input name="nim" type="text" id="nim" /></td>
            </tr>

            <tr>
                <td>E-Mail</td>
                <td><input name="email" type="text" id="email" /></td>
            </tr>

            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input name="jenis" type="radio" id="laki" value="Laki-Laki">
                    <label for="laki">Laki-Laki</label>
                    <input name="jenis" type="radio" id="perempuan" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </td>

            <tr>
                <td>PRODI</td>
                <td><select name="prodi" id="prodi">
                    <option>INFORMATIKA</option>
                    <option>TEKNIK ELEKTRO</option>
                    <option>TEKNIK MESIN</option>
                    <option>TEKNOLOGI PANGAN</option>
                    </select></td>
            </tr>

            <tr>
                <td>ALAMAT</td>
                <td><textarea name="alamat" id="alamat"></textarea></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Kirim"><input type="reset"
                name="Submit2" value="Batal" />
                </td>
            </tr>
        </table>
    </form>
    <div align="center"><strong><a href="lihat.php">::Lihat Biodata:: 
</a></strong></div>

    <?php
        //megambil tanggal sistem
        $hari = date("d");
        //mengambil bulan sistem
        $bulan = date ("m");
        //mengambil tahun sistem
        $tahun = date("Y");
        //mencari jumlah hari bulan dan tahun ini
        $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
    ?>
        <br><br>

    <?php
        switch ($bulan){
            case 1 : $nmbulan = "Jan"; break;
            case 2 : $nmbulan = "Feb"; break;
            case 3 : $nmbulan = "Mar"; break;
            case 4 : $nmbulan = "Apr"; break;
            case 5 : $nmbulan = "Mei"; break;
            case 6 : $nmbulan = "Jun"; break;
            case 7 : $nmbulan = "Jul"; break;
            case 8 : $nmbulan = "Agu"; break;
            case 9 : $nmbulan = "Sep"; break;
            case 10 : $nmbulan = "Okt"; break;
            case 11 : $nmbulan = "Nop"; break;
            case 12 : $nmbulan = "Des"; break;
        }
        echo "<center><h1>$nmbulan $tahun</h1></center>";
    ?>
        <br>
        <table style="border:2px solid #1E90FF" align="center" cellpadding="10">
            <tr bgcolor="#ADD8E6">
            <td align="center"><font color="FF0000">Min</font></td>
            <td align="center">Sen</td>
            <td align="center">Sel</td>
            <td align="center">Rab</td>
            <td align="center">Kam</td>
            <td align="center">Jum</td>
            <td align="center">Sab</td>
            </tr>

    <?php 
        $s = date("w", mktime(0,0,0,$bulan,1,$tahun));
        for($ds=1; $ds<=$s; $ds++){
            echo "<td></td>";
        }

        for($d=1;$d<=$jumlahhari; $d++){
            //jika minggu ke 0, maka buat baris baru
            if(date("w", mktime(0,0,0,$bulan, $d, $tahun))==0){
                echo "<tr>";
            }
        $warna = "#000000";//warna default

        //jika hari minggu diberi warna merah
        if (date("l", mktime(0,0,0,$bulan,$d,$tahun))== "Sunday"){
            $warna = "#FF0000";
        }

        //beri warna default tanggal tiap harinya (selain hari minggu)
        echo "<td align=center valign=middle> <span style=\"color: $warna\">$d</span></td> ";

        //jika hari ke enam, akhiri baris
        if (date("w", mktime(0,0,0,$bulan,$d,$tahun))==6){
            echo "</tr>";
        }
        }
        echo '</table>';
    ?>
    <br>
   
    
    <P><SCRIPT language="JavaScript">
        function jumlah(){
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN (bil1))
                bil1=0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN (bil2))
                bil2=0.0;
            var hasil = bil1 + bil2;
            alert ("Hasil Penjumlahan = " + hasil);
            }
            function kurang(){
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN (bil1))
                bil1=0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN (bil2))
                bil2=0.0;
            var hasil = bil1 - bil2;
            alert ("Hasil Pengurangan = " + hasil);
            }
            function kali(){
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN (bil1))
                bil1=0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN (bil2))
                bil2=0.0;
            var hasil = bil1 * bil2;
            alert ("Hasil Perkalian = " + hasil);
            }
            function bagi(){
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN (bil1))
                bil1=0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN (bil2))
                bil2=0.0;
            var hasil = bil1 / bil2;
            alert ("Hasil Pembagian = " + hasil);
            }

    </SCRIPT></P>

        <FORM NAME ="fform">
        <H1 align="center"><BR>KALKULATOR SEDERHANA</H1>
        <PRE>
        Bilangan Pertama :<input type="text" size="11"name="bilangan1"> Bilangan Kedua :<input type="text" size="11"name="bilangan2">
        </PRE>

        <P>
        <INPUT TYPE="button" value="Jumlahkan" onclick="jumlah()">
        <INPUT TYPE="button" value="Kurangkan" onclick="kurang()">
        <INPUT TYPE="button" value="Kalikan" onclick="kali()">
        <INPUT TYPE="button" value="Bagikan" onclick="bagi()">

        <INPUT TYPE="reset" value="Ulang">
        </FORM>
    </body>
</html>