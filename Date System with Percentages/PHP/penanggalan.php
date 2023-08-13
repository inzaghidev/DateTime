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
    
    echo "Tahun                    : ".$thn."\n";
    echo "Bulan                    : ".$bln." (".$bul.")"."\n";
    echo "Tanggal                  : ".$tgl."\n";
    echo "Hari                     : ".$hari."\n";
    echo "Hari ke (dalam Setahun)  : ".$harke."\n";
    echo "Sisa Hari (Tahun depan)  : ".$harmun."\n";
    echo "Persentase dalam Setahun : ".round($persen,6)."% \n";
    echo "Persentase Hitung Mundur : ".round($permun,6)."% \n";
    echo "Jam                      : ".$jam."\n";
    echo "Menit                    : ".$mnt."\n";
    echo "Detik                    : ".$dtk."\n";
    
    echo "\n".date("l, j F Y")."\n";
    echo date("H:i:s")."\n";
    echo "Day-".$harke." (".round($persen,4)."%)";
?>