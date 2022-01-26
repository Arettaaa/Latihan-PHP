<?php
//studi 1

//hitungmaju
for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>"; 
}

echo "<br>";

//hitungmundur
for ($o = 10; $o > 0; $o--) {
        echo "{$o} <br>";
}

echo "<br>";

//studi2
  
$list = ['RPL', 'Wajib', 'Ngulik'];

for ($h = 1; $h < count($list); $h++) {
    echo "{$list[$h]} <br>";
}

echo "<br>";

//studi3
# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      //continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      //break; # hentikan perulangan jika $i lebih dari 40
    }
}
//yang terjadi adalah jika break dihapus maka tidak ada batasan hetian perulangan jika melebihi dari 40 sementara jika continue dihapus tidak ada bilanagn yang bisa dibagi 10

echo "<br>";

//studi4
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $kunci => $l) {
    echo "[{$kunci}] Nama : {$l} <br>";
}

//ya, fungsinya akan tetap berjalan

?>

