<html>
    <head>
        <title>Menghitung Gaji Bersih</title>
    </head>
    <body>
    <h5>Tugas Algoritma [<a href="index.php">HOME</a>]</h5>
        <a href="gaji-bersih.php">1<b>. Hitung Gaji Bersih</b></a> / <a href="predikat-lulusan.php">2. Predikat Lulusan</a> / <a href="ganjil-genap.php">3. Ganjil Genap</a> / <a href="umur.php">4. Menentukan Umur</a> / <a href="tukar-nilai.php">5. Menukar Nilai</a>
        <h5>Menghitung Gaji Bersih</h5>
        <form method="POST" action="gaji-bersih.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jumlah Bulan</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah_bulan"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="proses"></td>
                </tr>
            </table>
        </form>
        <br><br>
        <?php
            if(isset($_POST['nama'])){
                $nama = $_POST['nama'];
                $jumlah_bulan = $_POST['jumlah_bulan'];
                $gaji_pokok = 1500000;
                $tunjangan = 500000;
                $pajak = 0.05*($gaji_pokok+$tunjangan);
                $bpjs = 0.03*($gaji_pokok+$tunjangan);
    
                $gaji_bersih = ((($gaji_pokok+$tunjangan)-($pajak+$bpjs))*$jumlah_bulan);
            }
        
            if(isset($_POST['nama'])){
                echo "<b>Nama :</b> ";
                echo $nama;
                echo " | ";
                echo "<b>Gaji Bersih :</b> Rp.";
                echo number_format($gaji_bersih, 0, ',', '.');
            }
        ?>
    </body>
</html>