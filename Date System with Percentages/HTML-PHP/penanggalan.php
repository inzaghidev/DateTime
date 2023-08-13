<!DOCTYPE html>
<html>
<body>

<?php
    $thn = date("Y");
    $bln = date("n");
    $bul = date("F");
    $tgl = date("j");
    $hari = date("l");
    $harke = date("z")+1;
    $jam = date("H");
    $mnt = date("i");
    $dtk = date("s");
    
    if ($thn % 400 == 0){
        $leap = 366;
    }
    elseif ($thn % 100 == 0){
        $leap = 365;
    }
    elseif ($thn % 4 == 0){
        $leap = 366;
    }
    else {
        $leap = 365;
    }
      
    $dateCal = ($harke-1)+($jam/24)+($mnt/1440)+($dtk/86400);
    $persen = (float)(100*$dateCal/$leap);
    $harmun = 1+$leap-$harke;
    $permun = 100-$persen;

    echo "Tahun                    : ".$thn."<br>";
    echo "Bulan                    : ".$bln." (".$bul.")"."<br>";
    echo "Tanggal                  : ".$tgl."<br>";
    echo "Hari                     : ".$hari."<br>";
    echo "Hari ke (dalam Setahun)  : ".$harke."<br>";
    echo "Sisa Hari (Tahun depan)  : ".$harmun."<br>";
    echo "Persentase dalam Setahun : ".round($persen, 6)."% <br>";
    echo "Persentase Hitung Mundur : ".round($permun, 6)."% <br>";
    echo "Jam                      : ".$jam."<br>";
    echo "Menit                    : ".$mnt."\n"."<br>";
    echo "Detik                    : ".$dtk."\n"."<br>";
    
    echo "<br>";
    echo "\n".date("l, j F Y")."\n"."<br>";
    echo date("H:i:s")."<br>";
    echo "Day-".$harke." (".round($persen,4)."%)";
?>

</body>
</html>