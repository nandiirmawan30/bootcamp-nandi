<?php
function print_deret_fibonacci($jumlah)
{
  $kahiji=0;
  $kadua=1;
  
  //simpan string angka awal
  $hasil = "$kahiji $kadua";
 
  for ($i=0; $i<$jumlah-2; $i++)
  {
    // hitung angka fibonacci
    $cetak = $kadua + $kahiji;
    // hasilnya ditambahkan ke string $hasil
    $hasil = $hasil." $cetak";
  
    //siapkan angka untuk perhitungan berikutnya
    $kahiji = $kadua;
    $kadua = $cetak;
  }
  return $hasil;
}
  
echo print_deret_fibonacci(12);
?>