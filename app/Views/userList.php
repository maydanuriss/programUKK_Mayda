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
   <h3>Data User</h3>
   <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addUser">Tambah Data</button>
   <table class="table table-bordered">
       <thead>
           <th>No</th>
           <th>Nama</th>
           <th>Username</th>
           <!-- <th>Password</th> -->
           <th>Role</th>
           <th>Option</th>
       </thead>
       <tbody>
           <?php
           $no=1;
           foreach($duser as $row):
           ?>
           <tr>
               <td><?= $no?></td>
               <td><?= $row['nama']?></td>
               <td><?= $row['username']?></td>
               <!-- <td><?= $row['password']?></td> -->
               <td><?= $row['role']?></td>
               <td>
                   <a class="btn btn-info btn-sm btn-edit" href="#" data-toggle="modal" data-target="#editUser-<?= $row['id']?>">Edit</a>
                   <a class="btn btn-danger btn-sm btn-hapus" href="<?= base_url('UserController/delete/'. $row['id'])?>" onclick="return confirm('Yakin Mau dihapus ?')">Hapus</a>
               </td>
           </tr>
           <form action="<?= base_url('/user/edit/'. $row['id'])?>" method="post">
           <div class="modal fade" id="editUser-<?= $row['id']?>" tabindex="-1" aria-labelledby="eampleModaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Update User</h5>
                    <button class="close" type="button" data-dismiss="modal" data-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="<?= base_url('users')?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama User" value="<?= $row['nama']?>">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $row['username']?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>User</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault" value="kasir" <?= $row['role']=="kasir"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault">Kasir</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault" value="manager" <?= $row['role']=="manager"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault">Manager</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault" value="admin" <?= $row['role']=="admin"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault">Admin</label>
                    </div>
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

<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="eampleModaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button class="close" type="button" data-dismiss="modal" data-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="<?= base_url('users')?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama User">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>User</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault" value="kasir">
                        <label class="form-check-label" for="flexRadioDefault">Kasir</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault" value="manager">
                        <label class="form-check-label" for="flexRadioDefault">Manager</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault" value="admin">
                        <label class="form-check-label" for="flexRadioDefault">Admin</label>
                    </div>
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