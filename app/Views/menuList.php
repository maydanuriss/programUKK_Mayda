<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<?php
    if(session()->getFlashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade-show" role="alert">
    <?=session()->getFlashdata('success')?>
    <button class="close" type="button" data-dismiss="alert" data-label="Close">Succes</button>
</div>
<?php
    }
?>
<div class="container">
   <h3>Data Menu</h3>
   <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addMenu">Tambah Data</button>
   <table class="table table-bordered">
       <thead>
           <th>No</th>
           <th>Nama</th>
           <th>Harga</th>
           <th>Jenis</th>
           <th>Stok</th>
           <th>Option</th>
       </thead>
       <tbody>
           <?php
           $no=1;
           foreach($dmenu as $row):
           ?>
           <tr>
               <td><?= $no?></td>
               <td><?= $row['nama']?></td>
               <td><?= $row['harga']?></td>
               <td><?= $row['jenis']?></td>
               <td><?= $row['stok']?></td>
               <td>
                   <a class="btn btn-info btn-sm btn-edit" href="#" data-toggle="modal" data-target="#editMenu-<?= $row['id']?>">Edit</a>
                   <a class="btn btn-danger btn-sm btn-hapus" href="<?= base_url('MenuController/delete/'. $row['id'])?>" onclick="return confirm('Yakin Mau dihapus ?')">Hapus</a>
               </td>
           </tr>
           <form action="<?= base_url('/menu/edit/'. $row['id'])?>" method="post">
           <div class="modal fade" id="editMenu-<?= $row['id']?>" tabindex="-1" aria-labelledby="eampleModaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Update Menu</h5>
                    <button class="close" type="button" data-dismiss="modal" data-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="<?= base_url('menus')?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Menu" value="<?= $row['nama']?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga" value="<?= $row['harga']?>">
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="makanan" <?= $row['jenis']=="makanan"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault">Makanan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="minuman" <?= $row['jenis']=="minuman"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault">Minuman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="cemilan" <?= $row['jenis']=="cemilan"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault">Cemilan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" class="form-control" name="stok" placeholder="Stok" value="<?= $row['stok']?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
        </form>
           <?php
           $no++;
           endforeach?>
       </tbody>
   </table>
</div>

<div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="eampleModaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                    <button class="close" type="button" data-dismiss="modal" data-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="<?= base_url('menus')?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Menu">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga">
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="makanan">
                        <label class="form-check-label" for="flexRadioDefault">Makanan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="Minuman">
                        <label class="form-check-label" for="flexRadioDefault">Minuman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="cemilan">
                        <label class="form-check-label" for="flexRadioDefault">Cemilan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" class="form-control" name="stok" placeholder="Stok">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection()?>