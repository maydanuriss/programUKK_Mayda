<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<div class="container">
    <h3>Data Detail Pesanan</h3>
    <br>
    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Id Pesanan</th>
            <th>Id Menu</th>
            <th>Jumlah</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($ddetail as $row):
            ?>
            <tr>
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

<?= $this->endSection()?>