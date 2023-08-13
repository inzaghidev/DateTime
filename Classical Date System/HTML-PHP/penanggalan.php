<!DOCTYPE html>
<html>
<body>

<?php
    $thn = date("Y");
    $bln = date("n");
    $bul = date("F");
    $tgl = date("j");
    $hari = date("l");
    $harke = date("z");
    $jam = date("H");
    $mnt = date("i");
    $dtk = date("s");
    
    echo "Tahun                   : ".$thn."<br>";
    echo "Bulan                   : ".$bln." (".$bul.")"."<br>";
    echo "Tanggal                 : ".$tgl."<br>";
    echo "Hari                    : ".$hari."<br>";
    echo "Hari ke (dalam Setahun) : ".$harke."<br>";
    echo "Jam                     : ".$jam."<br>";
    echo "Menit                   : ".$mnt."\n"."<br>";
    echo "Detik                   : ".$dtk."\n"."<br>";
    
    echo "<br>";
    echo "\n".date("l, j F Y")."\n"."<br>";
    echo "Day-".$harke."<br>";
    echo date("H:i:s");
?>

</body>
</html>