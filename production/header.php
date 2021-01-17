<?php  
include 'loginx.php';
?>
<!DOCTYPE html>
<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tır | Sat</title>
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <link href="../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo $_SESSION['resim']; ?>"  class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldin,</span>
                <h2><?php  echo $_SESSION['ad'].' '.$_SESSION['soyad']; ?></h2>
              </div>
            </div>
            <br>
            <!--sidebar-->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i>Anasayfa</a></li>
                  <li><a><i class="fa fa-user"></i> Bana Özel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="takvim.php">Takvim</a></li>
                      <li><a href="todolist.php">Plan</a></li>
                      <li><a href="profile.php">Profilim</a></li>
                    </ul>
                  </li>
                  <li><a><i class=" fa fa-building"></i>Kampüs Bilgiler <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=kampus.php>Üretim Kampüsleri</a></li>
                      <li><a href="personel.php">Personel Bilgisi</a></li>
                      <li><a href="urun_kampus.php">Kampüslerde Üretilen Ürünler</a></li>
                      <li><a href="cinsiyet.php">Cinsiyet Dağılımı</a></li>
                      <li><a href="personel_birim.php">Birimlerdeki Personel </a></li>
                    </ul>
                  </li>
                </ul>
              </div>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-shopping-cart"></i> Sipariş Bilgileri <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="siparis.php">Siparişler</a></li>
                      <li><a href="musteriler.php">Müşteri Bilgileri</a></li>
                      <li><a href="urun_siparis.php">Yıllık Ürün Satışı</a></li>
                      <li><a href="ulke.php">Ülkelerden Alınan Sipariş Sayıları</a></li>
                      <li><a href="harita.php">Harita</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $_SESSION['resim']; ?>">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profil</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Çıkış Yap</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="img/dean.png" alt="Profile Image" /></span>
                        <span>
                          <span>Uygar Ercan</span>
                          <span class="time">10 dakika önce</span>
                        </span>
                        <span class="message">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad pariatur mollitia.....
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="img/jomes.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Lütfü Gürsoy</span>
                          <span class="time">2 saat önce</span>
                        </span>
                        <span class="message">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nemo eveniet doloremque, ...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="img/anna.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Beste Özcan</span>
                          <span class="time">5 saat önce</span>
                        </span>
                        <span class="message">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, est debitis ipsam suscipit,..
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Diğerlerini Gör..</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->