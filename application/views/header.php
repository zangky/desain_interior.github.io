<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CITY Real Estate - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="<?php echo base_url();?>assets/js/modernizer.js"></script>

</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>assets/images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.html">Beranda</a></li>
                        <li><a href="service.html">Jenis Kategori</a></li>
                        <li><a href="gallery.html">Portofilio</a></li>
                        <li><a href="properties.html">Properties</a></li>
                        <li><a href="about.html">Tentang Kami </a></li>
                        <!-- <li><button type="button" class="btn btn-light btn-lg" >Masuk</button></li> -->
                        <li><a href="#" data-toggle="modal" data-target="#login" style="color: blue;">Masuk</a></li>
                        <li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modaldaftar">Daftar</button></li>
							<form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
								<input type="text" placeholder="Search....">
								<button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
					   </li> 
                    </ul>
                </div>
            </div>
        </nav>
    </header>
            <!-- Modal -->
        <div class="modal fade" id="modaldaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Form Daftar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url().'index.php/welcome/daftar'?>" method="POST">
                
                  <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="example@exp.com">
                </div>
                <div class="mb-3">
                  <label for="notlp" class="form-label">Nomor Telpon</label>
                  <input type="number" class="form-control" name="no_telp" id="notlp" placeholder="Nomor Telpon">
                </div>
                <div class="mb-3">
                  <label for="Alamat" class="form-label">Alamat</label>
                  <textarea class="form-control" name="alamat" id="Alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">User Name</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
               </form>
            </div>
        </div>
        </div>

         <!-- Modal Login -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Form Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="#" method="POST">
                
                  <div class="mb-3">
                  <label for="username" class="form-label">User Name</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="User name">
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="password">
                </div>
                <div class="mb-3">
                    <p>Anda belum terdaftar? Silahkan Klik</p>
                    <p></p>
                    <a href="#" style="color: blue;" data-toggle="modal" data-target="#modaldaftar" data-dismiss="modal">Daftar</a>
                </div>
                   
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
               </form>
            </div>
        </div>
        </div>