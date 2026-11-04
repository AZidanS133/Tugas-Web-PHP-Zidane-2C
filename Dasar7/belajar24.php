<?php
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Rudy<br/>";
}

// membuat fungsi parameter dan return
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
 // function dengan menggunakan parameter
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
    echo "Umur saya adalah ". hitungUmur(1994, 2020) ." tahun";
}

//memanggil function salam
salam();

$siswa="Ani";
$dari="kediri";

//memanggil function kenalan
kenalan($siswa,$dari);

// memanggil function hitungUmur
echo "Umur saya adalah ". hitungUmur(1990, 2020) ." tahun";
?>