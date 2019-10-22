<?php
require_once "konversi.php";
if (isset($_POST['submit'])) {
    $hasil = convertsuhu($_POST);
    $pilihan_suhu = $_POST['pilihan_suhu'];
}
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversi Suhu</title>
</head>
<body>
    <form action="" method = "post">
        <label for="valSuhu">Masukan Nilai</label>
        <input type="text" name="valSuhu" id="valSuhu">

        <div>
            <label for="reamur"><input type="radio" name="pilihan_suhu" id="reamur" value="reamur">Reamur</label>
            <label for="fahrenheit"><input type="radio" name="pilihan_suhu" id="fahrenheit" value="fahrenheit">Fahrenheit</label>
            <label for="kelvin"><input type="radio" name="pilihan_suhu" id="kelvin" value="kelvin">Kelvin</label>
        </div>
        <br>
        <button type="submit" name="submit">Convert</button>
    </form>
    <?php 
        if(isset($hasil)) :
    ?>
        <h3>
            Hasil Konversi ke <?=$pilihan_suhu;?> adalah <?=$hasil;?>
        </h3>
        <?php endif;?>
</body>
</html>