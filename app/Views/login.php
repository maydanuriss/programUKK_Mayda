<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Caffe Mayda</title>

    <link rel="stylesheet" href="<?=base_url('')?>/assets/vendor/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" 
            href="https://fonts.goggleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i,">
    <link rel="stylesheet" href="<?=base_url('assets/css/sb-admin-2.min.css')?>">
    <?=$this->renderSection('styles')?>
</head>

<body class="bg-gradient-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b> Login In Here !</b></h1>
                                    </div>
                                    <?php if (session()->getFlashdata('msg')):?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                    <?php endif ;?>
                                    <form action="<?= base_url('login')?>" method="post">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" id="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-success">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js')?>"></script>
    <?= $this->renderSection('scripts')?>

</body>

</html>