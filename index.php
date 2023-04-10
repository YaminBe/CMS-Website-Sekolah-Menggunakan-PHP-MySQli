<?php 
include 'inc/koneksi.php';
 ?>
<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title> Profil Sekolah SMAN 1 X Koto</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
   <link href="assets/pages/css/gallery.css" rel="stylesheet">   
     <link href="assets/pages/css/portfolio.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>Warna Tema</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <div class="pre-header" style="background-color: #212121;">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
             <!--          <img class="img-circle" src="assets/img/logo.png" style="width: 60px;border-radius: 40px;"> 
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                    </ul> -->
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="login.php" style="color: #fff;">Log In</a></li>
                       <!--  <li><a href="page-reg-page.html">Registration</a></li> -->
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header" style="background-color:#18ffff;">
      <div class="container">
        <?php 
        $sma = mysqli_query($con,"SELECT * FROM tb_setting WHERE status='Aktif' ");
        $nama = mysqli_fetch_array($sma);
         ?>
        <a class="site-logo" href=""> <span class="fa fa-graduation-cap"></span> <?php echo $nama['nm_sekolah']; ?> <!-- SMAN 1 X KOTO --></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="dropdown active">
              <a href="?page="> <span class="fa fa-home"></span> Home </a>
            </li>
            
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                <span class="fa fa-graduation-cap"></span> Profil Sekolah </a>
                
              <ul class="dropdown-menu">
                <?php 
                $result = mysqli_query($con,"SELECT * FROM tb_profil WHERE posisi='1' ORDER BY id_profil");
                while ($data= mysqli_fetch_array($result)) { ?>

                   <li>
                    <a href="?page=profil&id=<?php echo $data['id_profil']; ?> "> <span class="fa fa-angle-double-right"></span> <?php echo $data['judul_profil']; ?></a>
                  </li>

                  <?php } ?>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                <span class="fa fa-folder"></span> Berita </a>
                
              <ul class="dropdown-menu">
                <?php 
                $result = mysqli_query($con,"SELECT * FROM tb_kat_berita ORDER BY kategori");
                while ($data= mysqli_fetch_array($result)) { ?>

                   <li>
                    <a href="?page=berita&id=<?php echo $data['id_kategori']; ?> "> <?php echo $data['kategori']; ?></a>
                  </li>

                  <?php } ?>
              </ul>
            </li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                <span class="fa fa-info"></span> Informasi </a>
                
              <ul class="dropdown-menu">
                <li><a href="?page=list-agenda">Agenda</a></li>
                <li><a href="?page=pengumuman">Pengumuman</a></li>
                 <li><a href="?page=pengumuman">Program Tahunan</a></li>
                  <li><a href="?page=pengumuman">Kalender Akademik</a></li>
                
                
              </ul>
            </li>
            <li>
              <a href="?page=all-galeri">
                <span class="fa fa-photo"></span> Galeri Foto </a>
            </li> 
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                <span class="fa fa-user"></span> Warga Sekolah </a>
                
              <ul class="dropdown-menu">
                <?php 
                $result = mysqli_query($con,"SELECT * FROM tb_profil WHERE posisi='2' ORDER BY id_profil");
                while ($data= mysqli_fetch_array($result)) { ?>

                   <li>
                    <a href="?page=profil&id=<?php echo $data['id_profil']; ?> "> <span class="fa fa-angle-double-right"></span> <?php echo $data['judul_profil']; ?></a>
                  </li>

                  <?php } ?>
              </ul>
            </li>           
            
            <li><a href="?page=buku"> <span class="fa fa-comments-o"></span> Buku Tamu</a></li>


            <!-- BEGIN TOP SEARCH -->
         <!--    <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li> -->
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <div class="main">
      <div class="container">
      <!--   <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Blog Item</li>
        </ul> -->
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <?php 
        $sma1 = mysqli_query($con,"SELECT * FROM tb_setting WHERE status='Aktif' ");
        $tag = mysqli_fetch_array($sma1);
         ?>
            <h3> <?php echo $tag['tagline']; ?> <!-- WEBSITE PROFIL SEKOLAH SMAN 1 X KOTO --></h3>
           <!--  <h3 class="text-responsive" style="background-color: #fff;padding: 3px;text-align: center;border-bottom-left-radius: 50px;border-top-right-radius: 50px;">Website Profil SMAN 1 Koto X</h3> -->
            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-9 col-sm-9 blog-item">
                  <div class="blog-item-img">
                    <!-- BEGIN CAROUSEL -->            
                    <div class="front-carousel">
                      <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                          <div class="item">
                            <img src="assets/img/1.jpg" alt="">
                          </div>
                          <div class="item">
                            <!-- BEGIN VIDEO -->   
                            <img src="assets/img/2.jpg" alt="">
                            <!-- END VIDEO -->   
                          </div>
                          <div class="item active">
                             <img src="assets/img/3.jpg" alt="">
                          </div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                          <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>                
                    </div>
                    <!-- END CAROUSEL -->             
                  </div>
                  <hr>

              
                   <!-- ISI HALAMAN -->
                  <?php 
                  error_reporting();
                  $page=@$_GET['page'];
                  if ($page=='profil') {
                    include 'page/profil.php';
                    // berita
                  }elseif ($page=='berita') {
                   include 'page/berita.php';
                  }elseif ($page=='detail-berita') {
                    include 'page/detail-berita.php';
                    // agenda
                  }elseif ($page=='agenda') {
                   include 'page/agenda.php';
                  }elseif ($page=='list-agenda') {
                   include 'page/list-agenda.php';
                   // pengumuman
                  }elseif ($page=='pengumuman') {
                   include 'page/Pengumuman.php';
                   // buku tamu
                  }elseif ($page=='buku') {
                   include 'page/Buku-tamu.php';
                   // galeri foto
                  }elseif ($page=='galeri') {
                    include 'page/galeri.php';
                  }elseif ($page=='all-galeri') {
                    include 'page/galery-foto.php';
                  }elseif ($page=='') {
                    include 'page/home.php';
                  }else{
                    echo "Not Found";
                  }

                   ?>
                   <hr style="border: 1px dashed;">

                   <?php 
                   include 'page/galery-foto.php';

                    ?>
                 
            

                  <!-- END ISI HALAMAN -->
  


                </div>
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->            
                <div class="col-md-3 col-sm-3 blog-sidebar">
                   <?php 
        $sma2 = mysqli_query($con,"SELECT * FROM tb_setting WHERE status='Aktif' ");
        $logo = mysqli_fetch_array($sma2);
         ?>
                   <center><img src="assets/img/<?php echo $logo['logo'] ?>" class="img-responsive" width="150"></center>  
                   <br>                
                    <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #212121;">                       
                      <h3 class="panel-title" style="color: #fff;"> <span class="fa fa-calendar"></span> Agenda</h3>
                      </div>
                      <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                        <?php 
                        $no=1;
                        $result = mysqli_query($con,"SELECT * FROM tb_agenda INNER JOIN user ON tb_agenda.id_user=user.id_user ORDER BY tb_agenda.id_agenda");
                        while ($data1= mysqli_fetch_array($result)) { ?>
                          <li style="background-color: #18ffff;color: #fff;">
                            <a href="?page=agenda&id=<?php echo $data1['id_agenda']; ?>"> <span class="fa fa-th"></span> <?php echo $data1['judul']; ?></a> 
                          </li>

                        <?php } ?> 
                          
                          </ul>                     
                      </div>
                    </div

                    <!-- Pengumuan -->
                            <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #212121;">                       
                      <h3 class="panel-title" style="color: #fff;"> <span class="fa fa-info"></span> Pengumuman</h3>
                      </div>
                      <div class="panel-body">
                          <ul class="nav sidebar-categories">
                            <?php 
                            $no=1;
                            $result = mysqli_query($con,"SELECT * FROM tb_pengumuman INNER JOIN user ON tb_pengumuman.id_user=user.id_user ORDER BY tb_pengumuman.id_peng DESC LIMIT 1");
                            while ($data3= mysqli_fetch_array($result)) { ?>

                            <a href="?page=pengumuman"><b><?php echo $data3['judul_peng']; ?></b></a>
                            <p>Tanggal Posting : <b><?php echo $data3['tgl_post']; ?></b> <br>
                            Oleh : [ <?php echo $data3['nama_lengkap']; ?> ]</p>
                             <p><a class="more" href="?page=pengumuman">Read more</a></p>

                            <?php } ?>                  
                  </ul>
                      </div>
                    </div>

                  <!-- BEGIN RECENT NEWS -->                            
     <!--              <h2>Agenda Sekolah</h2>
                  <div class="recent-news margin-bottom-10">
                    <div class="row margin-bottom-10">
                     <div class="col-md-1">
                      </div> 
                      <div class="col-md-9 recent-news-inner">
                        <?php 
                        $no=1;
                        $result = mysqli_query($con,"SELECT * FROM tb_agenda INNER JOIN user ON tb_agenda.id_user=user.id_user ORDER BY tb_agenda.id_agenda");
                        while ($data1= mysqli_fetch_array($result)) { ?>
                         <h3>
                          <?php echo $no++; ?> .
                          <a href="?page=agenda&id=<?php echo $data1['id_agenda']; ?> "><?php echo $data1['judul']; ?></a>
                          <?php echo $data1['tgl_agenda']; ?>
                        </h3>
                           Tempat : <?php echo $data1['tempat']; ?> </p>

                        <?php } ?>
                      

                      
                      </div>                        
                    </div>
             
                  </div> -->
                  <!-- END RECENT NEWS -->   


                  <!-- CATEGORIES START -->
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #212121;">                       
                      <h3 class="panel-title" style="color: #fff;"> <span class="fa fa-folder-open"></span> Berita</h3>
                      </div>
                      <div class="panel-body">
                          <ul class="nav sidebar-categories margin-bottom-40">
                          <?php 
                        $no=1;
                        $result = mysqli_query($con,"SELECT * FROM tb_kat_berita ORDER BY id_kategori");
                        while ($data2= mysqli_fetch_array($result)) { ?>
                          
                           <li><a href="?page=berita&id=<?php echo $data2['id_kategori']; ?> "><?php echo $no++; ?> .<?php echo $data2['kategori']; ?> </a></li>

                        <?php } ?>

                  
                  </ul>
                      </div>
                    </div>
               

<!-- 
                  <h2 class="no-top-space">Kategori Berita</h2>
                  <ul class="nav sidebar-categories margin-bottom-40">
                          <?php 
                        $no=1;
                        $result = mysqli_query($con,"SELECT * FROM tb_kat_berita ORDER BY id_kategori");
                        while ($data2= mysqli_fetch_array($result)) { ?>
                          
                           <li><a href="?page=berita&id=<?php echo $data2['id_kategori']; ?> "><?php echo $no++; ?> .<?php echo $data2['kategori']; ?> </a></li>

                        <?php } ?>

                  
                  </ul> -->
                  <!-- CATEGORIES END -->
 <!-- Tampil pengumuman  -->
                   <!--        <div class="col-lg-4 col-md-4 col-xs-12">
                                     <div class="panel panel-default">
                              <div class="panel-heading"><span class="fa fa-info"></span> Pengumuman</div>
                                <div class="panel-body">
                                      <?php 
                                      $no=1;
                                      $result = mysqli_query($con,"SELECT * FROM tb_pengumuman INNER JOIN user ON tb_pengumuman.id_user=user.id_user ORDER BY tb_pengumuman.id_peng");
                                      while ($data3= mysqli_fetch_array($result)) { ?>

                                      <a href="" title=""><h4><span class="label label-info"><?php echo $data3['judul_peng']; ?> </span></h4></a>
                                      <p><?php echo $data3['isi_peng']; ?> <br>
                                      Tanggal Posting : <b><?php echo $data3['tgl_post']; ?></b> <br>
                                      Oleh : [ <?php echo $data3['nama_lengkap']; ?> ]</p>
                                      .................
                                       <p><a class="more" href="javascript:;">Read more</a></p>

                                      <?php } ?>

                                      
                                </div>
                              </div>
                            
                          </div>
                          <!-- end Pengumuan -->

                  <!-- BEGIN BLOG TALKS -->
                 <!--  <div class="blog-talks margin-bottom-30">
                    <h2>Pengumuman</h2>
                    <div class="tab-style-1">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Pengumuman Terbaru</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Documented</a></li> 
                      </ul>
                      <div class="tab-content">
                        <div id="tab-1" class="tab-pane row-fluid fade in active">
                                   <?php 
                        $no=1;
                        $result = mysqli_query($con,"SELECT * FROM tb_pengumuman INNER JOIN user ON tb_pengumuman.id_user=user.id_user ORDER BY tb_pengumuman.id_peng");
                        while ($data3= mysqli_fetch_array($result)) { ?>
                          
                           <a href="?page=pengumuman&id=<?php echo $data3['id_peng']; ?> "><?php echo $no++; ?> .</a> 
                         <a href="" title=""><h4><span class="label label-info"><?php echo $data3['judul_peng']; ?> </span></h4></a>
                         <p><?php echo $data3['isi_peng']; ?> <br>
                          Tanggal Posting : <b><?php echo $data3['tgl_post']; ?></b> <br>
                          Oleh : [ <?php echo $data3['nama_lengkap']; ?> ]</p>
                        .................

                        <?php } ?>
                         
                          <p><a class="more" href="javascript:;">Read more</a></p>
                        </div>
                        <div id="tab-2" class="tab-pane fade">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. aliquip jean shorts ullamco ad vinyl aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                        </div> -
                      </div>
                    </div>
                  </div>   -->                          
                  <!-- END BLOG TALKS -->

                  <!-- BEGIN BLOG PHOTOS STREAM -->
                  <div class="blog-photo-stream margin-bottom-20">
                    <h2>Galeri Foto</h2>
                    <ul class="list-unstyled">
                      <?php 
                      $sql = mysqli_query($con,"SELECT * FROM tb_galery");
                      while ($data= mysqli_fetch_array($sql)) { ?>

                        <li><a href="?page=galeri&id=<?php echo $data['id_galery'] ?>"><img alt="" src="assets/galery/<?php echo $data['foto'] ?>"></a></li>
                      <?php } ?>

                      <!-- 
                      <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img1.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img4-large.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img6.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/pages/img/pics/img1-large.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/pages/img/pics/img2-large.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img3.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img2-large.jpg"></a></li> -->
                    </ul>                    
                  </div>

                  <!-- END BLOG PHOTOS STREAM -->

                  <!-- BEGIN BLOG TAGS -->
           <!--        <div class="blog-tags margin-bottom-20">
                    <h2>Tags</h2>
                    <ul>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>OS</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Metronic</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Dell</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Conquer</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>MS</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Google</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Keenthemes</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Twitter</a></li>
                    </ul>
                  </div> -->
                  <!-- END BLOG TAGS -->
                </div>
                <!-- END RIGHT SIDEBAR -->            
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>



    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
                     <?php 
        $sma4 = mysqli_query($con,"SELECT * FROM tb_setting WHERE status='Aktif' ");
        $footer = mysqli_fetch_array($sma4);
         ?>
            <?php echo $footer['footer']; ?>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
     
            <p class="powered">Depelop by: <a href=""> Muhammad Arif Erwan</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->

    <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/portfolio.js" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
            Portfolio.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>