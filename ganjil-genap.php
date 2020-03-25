<html>
    <head>
        <title>Bilangan Ganjil Genap</title>
    </head>
    <body>
    <h5>Tugas Algoritma [<a href="index.php">HOME</a>]</h5>
        <a href="gaji-bersih.php">1. Hitung Gaji Bersih</a> / <a href="predikat-lulusan.php">2. Predikat Lulusan</a> / <a href="ganjil-genap.php"><b>3. Ganjil Genap</b></a> / <a href="umur.php">4. Menentukan Umur</a> / <a href="tukar-nilai.php">5. Menukar Nilai</a>
        <h5>Bilangan Ganjil Genap</h5>
        <form method="POST" action="ganjil-genap.php">
            <table>
                <tr>
                    <td>Nilai Bilangan</td>
                    <td>:</td>
                    <td><input type="number" name="bilangan"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="proses"></td>
                </tr>
            </table>
        </form>
        <br><br>
        <?php
            if(isset($_POST['bilangan'])){
                $bilangan = $_POST['bilangan'];
                if($bilangan % 2 == 0){
                    echo "$bilangan Jenis Bilangan Genap<br>";
                }else{
                    echo "$bilangan Jenis Bilangan Ganjil<br>";
                }
            }
        ?>
    </body>
</html>