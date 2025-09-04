<?php
class Kucing
{
    // properties atau attribute
    public $warna       = "merah";
    public $jumlah_kaki = 4;

    // method atau fungsi
    public function bersuara()
    {
        return "meong meong";
    }

    public function berburu()
    {
        return "Kucing berburu tikus";
    }
}

// inisiasi (pembuatan object)
$kucing1        = new Kucing();
$kucing1->warna = "hijau";
echo "Warna kucing 1: " . $kucing1->warna . "<br>";
echo "Jumlah kaki kucing 1: " . $kucing1->jumlah_kaki . "<br>";
echo "Suara kucing 1: " . $kucing1->bersuara() . "<br>";
