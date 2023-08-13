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

    echo "Tahun                   : ".$thn."\n";
    echo "Bulan                   : ".$bln." (".$bul.")"."\n";
    echo "Tanggal                 : ".$tgl."\n";
    echo "Hari                    : ".$hari."\n";
    echo "Hari ke (dalam Setahun) : ".$harke."\n";
    echo "Jam                     : ".$jam."\n";
    echo "Menit                   : ".$mnt."\n";
    echo "Detik                   : ".$dtk."\n";
    
    echo "\n".date("l, j F Y")."\n";
    echo "Day-".$harke."\n";
    echo date("H:i:s");
?>