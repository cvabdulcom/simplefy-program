<html>
    <head>
        <title>Menentukan Umur</title>
    </head>
    <body>
    <h5>Tugas Algoritma [<a href="index.php">HOME</a>]</h5>
        <a href="gaji-bersih.php">1. Hitung Gaji Bersih</a> / <a href="predikat-lulusan.php">2. Predikat Lulusan</a> / <a href="ganjil-genap.php">3. Ganjil Genap</a> / <a href="umur.php"><b>4. Menentukan Umur</b></a> / <a href="tukar-nilai.php">5. Menukar Nilai</a>
        <h5>Menentukan Umur</h5>
        <form method="POST" action="umur.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type="number" name="umur"></td>
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
                $umur = $_POST['umur'];
                
                if($umur >= 0 && $umur <= 1){
                    $kategori = "Bayi";
                }else if($umur > 1 && $umur <= 3){
                    $kategori = "Batita";
                }else if($umur > 3 && $umur <= 5){
                    $kategori = "Balita";
                }else if($umur > 5 && $umur <= 12){
                    $kategori = "Anak-anak";
                }else if($umur > 12 && $umur <= 17){
                    $kategori = "Remaja";
                }else if($umur > 17 && $umur <= 30){
                    $kategori = "Pemuda";
                }else if($umur > 30 && $umur <= 60){
                    $kategori = "Dewasa";
                }else if($umur > 60 && $umur <= 100){
                    $kategori = "Lansia";
                }
            }
        
            if(isset($_POST['nama'])){
                echo "<b>Nama :</b> ";
                echo $nama;
                echo " | ";
                echo "<b>Umur :</b> ";
                echo $umur;
                echo " tahun";
                echo " | ";
                echo "<b>Kategori :</b> ";
                echo $kategori;
            }
        ?>
    </body>
</html>