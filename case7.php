<?php

$nominal = 72500;
function explodeNominalIndonesia($nominal){
    $dataUangNominalDiIndonesia = [
        100_000,
        75_000,
        50_000,
        20_000,
        10_000,
        5000,
        2000,
        1000,
        500,
        200,
        100
    ];
    $dataPecahanNominal = [];
    $sisa_nilai = $nominal;
    foreach ($dataUangNominalDiIndonesia as $key => $value) {
        if (is_int($sisa_nilai - $value) && ($sisa_nilai - $value) >= 0) {
            $sisa_nilai -= $value;
            $dataPecahanNominal[] = $value;
        }
    }
    return $dataPecahanNominal;
}
var_dump(explodeNominalIndonesia($nominal));