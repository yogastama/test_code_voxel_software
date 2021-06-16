<?php
$dataNilai = [
    'rudi' => [
        'sejarah' => 8,
        'matematika' => 7,
        'sosiologi' => 6,
        'kewarganegaraan' => 9
    ],
    'ani' => [
        'sejarah' => 5,
        'matematika' => 8,
        'sosiologi' => 9,
        'kewarganegaraan' => 6
    ]
];
function perbandinganNilaiDuaSiswa($dataNilai){
    $namaSiswaPertama = array_key_first($dataNilai);
    $keunggulanNilaiDuaSiswa = [
        $namaSiswaPertama => 0
    ];
    foreach ($dataNilai as $nama_siswa => $kumpulan_nilai) {
        if ($namaSiswaPertama != $nama_siswa) {
            foreach ($kumpulan_nilai as $mapel => $nilai) {
                if ($dataNilai[$namaSiswaPertama][$mapel] > $nilai) {
                    $keunggulanNilaiDuaSiswa[$namaSiswaPertama] +=1;
                } else {
                    if (!array_key_exists($nama_siswa, $keunggulanNilaiDuaSiswa)) {
                        $keunggulanNilaiDuaSiswa[$nama_siswa] =1;
                    } else {
                        $keunggulanNilaiDuaSiswa[$nama_siswa] +=1;
                    }
                }
            }
        }
    }
    return $keunggulanNilaiDuaSiswa;
}
var_dump(perbandinganNilaiDuaSiswa($dataNilai));