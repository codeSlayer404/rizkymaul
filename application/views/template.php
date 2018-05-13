<!DOCTYPE html>
<html>
     <head>
          <title>Tugas CRUD</title>
          <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
     </head>
     <body>
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: blue;">
               <div class="container">
                    <a class="navbar-brand" href="#" style="color: white;"><b>CRUD</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                         <div class="navbar-nav">
                              <?php
                                   echo anchor('beranda','Beranda','class="nav-item nav-link btn btn-white" style="margin-right:5px;"');
                                   echo anchor('tentang','Tentang','class="nav-item nav-link btn btn-white" style="margin-right:5px;"');
                                   echo anchor('siswa','Siswa','class="nav-item nav-link btn btn-white"');
                              ?>
                         </div>
                    </div>
               </div>
          </nav>

          <div class="container">
               <?php $this->load->view($content); ?>
          </div>

          <center><small>&copy; 2018 - Rizki maulana_XI-rpl2</small></center>

          <script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/js/popper.1.14.0.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
     </body>
</html>
