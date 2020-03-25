<html>
    <head>
        <title>Menukar Nilai</title>
    </head>
    <?php
        $a = 0;
        $b = 0;
        if(isset($_POST['nilai_a'])){
            $a = $_POST['nilai_b'];
            $b = $_POST['nilai_a'];
        }
    ?>
    <body>
    <h5>Tugas Algoritma [<a href="index.php">HOME</a>]</h5>
        <a href="gaji-bersih.php">1. Hitung Gaji Bersih</a> / <a href="predikat-lulusan.php">2. Predikat Lulusan</a> / <a href="ganjil-genap.php">3. Ganjil Genap</a> / <a href="umur.php">4. Menentukan Umur</a> / <a href="tukar-nilai.php"><b>5. Menukar Nilai</b></a>
        <h5>Menukar Nilai</h5>
        <form method="POST" action="tukar-nilai.php">
            <table>
                <tr>
                    <td>Nilai A</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_a" value="<?php echo $a; ?>"></td>
                </tr>
                <tr>
                    <td>Nilai B</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_b" value="<?php echo $b; ?>"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="proses"></td>
                </tr>
            </table>
        </form>        
    </body>
</html>