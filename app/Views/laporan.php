<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>

<div class="row">
    <div class="col-md-6">
        <h3>Laporan Pesanan</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>Tanggal</th>
                <th>No Meja</th>
                <th>Petugas</th>
                <th>Total Harga</th>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($laporan as $row):
                ?>
                    <td><?= $no?></td>
                    <td><?= $row['nama_pemesan']?></td>
                    <td><?= $row['tanggal']?></td>
                    <td><?= $row['no_meja']?></td>
                    <td><?= $row['user_id']?></td>
                    <td><?= $row['total_harga']?></td>
                </tr>
                <?php
                $no++;
                endforeach?>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h3>Laporan Detail Pesanan</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Pesanan</th>
                <th>Menu</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($detail as $row):
                ?>
                    <td><?= $no?></td>
                    <td><?= $row['pesanan_id']?></td>
                    <td><?= $row['menu_id']?></td>
                    <td><?= $row['jumlah']?></td>
                </tr>
                <?php
                $no++;
                endforeach?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection()?>