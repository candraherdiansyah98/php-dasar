<?php
class Kucing
{
    public $nama;
    public $warna;
    public $jenis;
    // method khusus yang akan di panggil pertama kali / di awal
    public function __construct($a, $b, $c)
    {
        $this->nama  = $a;
        $this->warna = $b;
        $this->jenis = $c;
    }

    public function makan()
    {
        return "Kucing sedang makan";
    }
}

$kucing1 = new Kucing("Luna", "Hitam", "Anggora");
echo "Nama kucing 1: " . $kucing1->nama . "<br>";
echo "Warna kucing 1: " . $kucing1->warna . "<br>";
echo "Jenis kucing 1: " . $kucing1->jenis . "<br>";

echo "<hr>";
// object ke 2
$leni = new Kucing("Leni", "Oren", "Garong");
echo "Nama kucing 1: " . $leni->nama . "<br>";
echo "Warna kucing 1: " . $leni->warna . "<br>";
echo "Jenis kucing 1: " . $leni->jenis . "<br>";
