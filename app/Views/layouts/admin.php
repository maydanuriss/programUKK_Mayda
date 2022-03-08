<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device-widht, initial-scale=1, shrink-on-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Caffe Mayda Nuris</title>
        <link rel="stylesheet" href="<?=base_url('')?>/assets/vendor/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" 
            href="https://fonts.goggleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i,">
        <link rel="stylesheet" href="<?=base_url('assets/css/sb-admin-2.min.css')?>">
        <?=$this->renderSection('styles')?>
    </head>
    <body id="page-top">
        <div id="wrapper">
            <?= $this->include('layouts/components/sidebar')?>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?= $this->include('layouts/components/topbar')?>
                    <?= $this->renderSection('content')?>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                           <span>Copyright &copy; Codelapan <?=Date('Y')?></span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="eampleModaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave ?</h5>
                        <button class="close" type="button" data-dismiss="modal" data-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout">Logout</a>
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