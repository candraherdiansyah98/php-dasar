<?php
    class Penggajian
    {
        public $nama, $no_id, $gp, $jabatan, $status_k, $status_kk;
        public $tj, $tt, $tm;

        public function __construct($a, $b, $c, $d, $e, $f)
        {
            $this->nama      = $a;
            $this->no_id     = $b;
            $this->gp        = $c;
            $this->jabatan   = $d;
            $this->status_k  = $e;
            $this->status_kk = $f;
        }

        public function tunjanganJabatan()
        {
            $jabatan = $this->jabatan;

            if ($jabatan == "Manager") {
                $this->tj = $this->gp * 0.2;
            } else if ($jabatan == "Supervisor") {
                $this->tj = $this->gp * 0.15;
            } else if ($jabatan == "Staff") {
                $this->tj = $this->gp * 0.15;
            } else {
                $this->tj = 0;
            }
            return $this->tj;
        }

        public function tunjanganTransport()
        {
            $status   = $this->status_k;
            $this->tt = 0;
            if ($status == "Tetap") {
                $this->tt = 500000;
            } else {
                $this->tt = 0;
            }
            return $this->tt;
        }

        public function tunjanganMenikah()
        {
            $statusKK = $this->status_kk;
            $this->tm = 0;
            if ($statusKK == "Menikah") {
                $this->tm = 300000;
            } else {
                $this->tm = 0;
            }
            return $this->tm;
        }

        public function gajiKotor()
        {
            $gajiKotor = $this->gp + $this->tunjanganJabatan() + $this->tunjanganTransport()
             + $this->tunjanganMenikah();
            return $gajiKotor;
        }

        public function pajak()
        {
            $pajak = $this->gajiKotor() * 0.05;
            return $pajak;
        }

        public function gajiBersih()
        {
            $gajiBersih = $this->gajiKotor() - $this->pajak();
            return $gajiBersih;
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penggajian</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        .card-header {
            border-radius: 15px 15px 0 0 !important;
        }
        .btn {
            border-radius: 25px;
            padding: 10px 30px;
        }
        .form-control, .form-select {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h2><i class="fas fa-calculator me-2"></i>Form Penggajian Karyawan</h2>
                    </div>
                    <div class="card-body p-4">
                        <form action="" method="post">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label"><i class="fas fa-user me-1"></i>Nama Karyawan</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><i class="fas fa-id-badge me-1"></i>No ID Karyawan</label>
                                    <input type="number" name="no_id" class="form-control" placeholder="Masukkan ID karyawan" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label"><i class="fas fa-money-bill me-1"></i>Gaji Pokok</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="gp" class="form-control" placeholder="0" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><i class="fas fa-briefcase me-1"></i>Jabatan</label>
                                    <select name="jabatan" class="form-select" required>
                                        <option value="">Pilih jabatan</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Staff">Staff</option>
                                        <option value="Karyawan">Karyawan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label"><i class="fas fa-user-tie me-1"></i>Status Karyawan</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="tetap" value="Tetap" required>
                                        <label class="form-check-label" for="tetap">
                                            <i class="fas fa-check-circle text-success me-1"></i>Tetap
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="kontrak" value="Kontrak">
                                        <label class="form-check-label" for="kontrak">
                                            <i class="fas fa-clock text-warning me-1"></i>Kontrak
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"><i class="fas fa-heart me-1"></i>Status Pernikahan</label>
                                    <select name="status_kk" class="form-select" required>
                                        <option value="">Pilih status</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="fas fa-calculator me-2"></i>Hitung Gaji
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
    <?php
        if
        ($_SERVER['REQUEST_METHOD'] == "POST") {
            $a = $_POST['nama'];
            $b = $_POST['no_id'];
            $c = $_POST['gp'];
            $d = $_POST['jabatan'];
            $e = $_POST['status'];
            $f = $_POST['status_kk'];

            $gaji = new Penggajian($a, $b, $c, $d, $e, $f);
        ?>
    <table border="1">
        <th>Nama</th>
        <th>NO ID</th>
        <th>Status Karyawan</th>
        <th>Gaji Pokok</th>
        <th>Jabatan</th>
        <th>Status Menikah</th>
        <tr>
            <td><?php echo $gaji->nama ?></td>
            <td><?php echo $gaji->no_id ?></td>
            <td><?php echo $gaji->status_k ?></td>
            <td>Rp.<?php echo number_format($gaji->gp, 0, ',', '.'); ?></td>
            <td><?php echo $gaji->jabatan ?></td>
            <td><?php echo $gaji->status_kk ?></td>
        </tr>
        <tr>
            <th>Tunjangan Jabatan</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->tunjanganJabatan(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>Tunjangan Transport</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->tunjanganTransport(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>Tunjangan Menikah</th>
            <td colspan = "5">
                Rp.<?php echo number_format($gaji->tunjanganMenikah(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>Gaji Kotor</th>
            <td colspan= "5">
                Rp.<?php echo number_format($gaji->gajiKotor(), 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <th>Pajak</th>
            <td colspan= "5">Rp.<?php echo number_format($gaji->pajak(), 0, ',', '.'); ?></td>
        </tr>
         <tr>
            <th>Gaji Bersih</th>
            <td colspan= "5">Rp.<?php echo number_format($gaji->gajiBersih(), 0, ',', '.'); ?></td>
        </tr>
    </table>
    <?php }?>
</body>
</html>
