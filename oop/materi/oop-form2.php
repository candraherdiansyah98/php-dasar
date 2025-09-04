<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
</head>
<body>
    <fieldset>
    <legend>
        Biodata Siswa
    </legend>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" required> <br>
        <label for="">Kelas</label>
        <input type="text" name="kelas" required> <br>
        <label for="">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan
        <br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" required> <br>
        <label for="">Agama</label>
        <select name="agama" id="">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="konghucu">Konghucu</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
    </fieldset>
    <?php
        class Biodata
        {
            public $nama,
            $kelas,
            $jenis_kelamin,
            $tanggal_lahir,
                $agama;

            public function __construct($nama, $kelas, $jenis_kelamin, $tanggal_lahir, $agama)
            {
                $this->nama          = $nama;
                $this->kelas         = $kelas;
                $this->jenis_kelamin = $jenis_kelamin;
                $this->tanggal_lahir = $tanggal_lahir;
                $this->agama         = $agama;
            }

            public function tampilkanBiodata()
            {
                return "Nama: " . $this->nama . "<br>" .
                "Kelas: " . $this->kelas . "<br>" .
                "Jenis Kelamin: " . $this->jenis_kelamin . "<br>" .
                "Tanggal Lahir: " . $this->tanggal_lahir . "<br>" .
                "Agama: " . $this->agama . "<br>";
            }

        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['nama'];
            $b = $_POST['kelas'];
            $c = $_POST['jenis_kelamin'];
            $d = $_POST['tanggal_lahir'];
            $e = $_POST['agama'];

            $biodata = new Biodata($a, $b, $c, $d, $e);
            echo $biodata->tampilkanBiodata();
        }
    ?>
</body>
</html>
