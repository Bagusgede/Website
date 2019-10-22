<?php
 function convertSuhu($data)
 {
     $nilai_suhu = $data['valSuhu'];
     $pilihan = $data['pilihan_suhu'];

     switch ($pilihan) {
         case "reamur":
            $hasil = (4/5) * $nilai_suhu;
            break;
        case "fahrenheit":
            $hasil = (9/5) * $nilai_suhu + 32;
            break;
        case "kelvin":
            $hasil = $nilai_suhu + 273;
            break;
        default:
            $hasil = "NULL";
            break;

 }
 return $hasil;
}
?>
