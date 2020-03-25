<html>
    <head>
        <title>Menentukan Predikat Lulusan</title>
    </head>
    <body>
    <h5>Tugas Algoritma [<a href="index.php">HOME</a>]</h5>
        <a href="gaji-bersih.php">1. Hitung Gaji Bersih</a> / <a href="predikat-lulusan.php"><b>2. Predikat Lulusan</b></a> / <a href="ganjil-genap.php">3. Ganjil Genap</a> / <a href="umur.php">4. Menentukan Umur</a> / <a href="tukar-nilai.php">5. Menukar Nilai</a>
        <h5>Menentukan Predikat Lulusan</h5>
        <form method="POST" action="predikat-lulusan.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td><input type="number" name="nilai"></td>
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
                $nilai = $_POST['nilai'];
                
                if($nilai >= 80 && $nilai <= 100){
                    $predikat = "Sangat Baik";
                }else if($nilai >= 70 && $nilai < 80){
                    $predikat = "Baik";
                }else if($nilai >= 60 && $nilai < 70){
                    $predikat = "Cukup";
                }else if($nilai < 60 && $nilai > 0){
                    $predikat = "Kurang";
                }else{
                    $predikat = "Nilai Error";
                }
            }
        
            if(isset($_POST['nama'])){
                echo "<b>Nama :</b> ";
                echo $nama;
                echo " | ";
                echo "<b>Predikat :</b> ";
                echo $predikat;
            }
        ?>
    </body>
</html>