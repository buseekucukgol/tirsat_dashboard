<?php 
  include 'header.php'; 
?>
        <div class="right_col" role="main">
          <div class="">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Türkiye / Adapazarı Üretim Kampüsü</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
       			<table class="table">
                      <tr>
                          <th>Birim Kodu</th>
                          <th>Birim Adı</th>
                          <th>Personel Sayısı</th>
                      </tr>
                  <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT birimler.birim_kod,birimler.birim_ad ,COUNT(birimler.birim_kod) as sayi FROM birimler, personel, personel_kampus,uretim_kampus
								          WHERE birimler.birim_kod=personel.birim_kod AND personel.personel_no=personel_kampus.personel_no AND uretim_kampus.kampus_no=personel_kampus.kampus_no AND uretim_kampus.kampus_no=1
									        GROUP by birimler.birim_ad ORDER by birimler.birim_kod"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $kod = $sonuc['birim_kod']; 
                          $ad= $sonuc['birim_ad']; 
                          $sayi= $sonuc['sayi']; 

                        ?>
                    <tr>
                      <td><?php echo $kod; ?></td>
                      <td><?php echo $ad; ?></td>
                      <td><?php echo $sayi; ?></td>
                    </tr>

                <?php 
                  } 
                ?>
            </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Almanya / Goch Üretim Kampüsü</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
       
       			<table class="table">
                      <tr>
                          <th>Birim Kodu</th>
                          <th>Birim Adı</th>
                          <th>Personel Sayısı</th>
                      </tr>
                  <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT birimler.birim_kod,birimler.birim_ad ,COUNT(birimler.birim_kod) as sayi FROM birimler, personel, personel_kampus,uretim_kampus
								          WHERE birimler.birim_kod=personel.birim_kod AND personel.personel_no=personel_kampus.personel_no AND uretim_kampus.kampus_no=personel_kampus.kampus_no AND uretim_kampus.kampus_no=2
									        GROUP by birimler.birim_ad ORDER by birimler.birim_kod"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $kod = $sonuc['birim_kod']; 
                          $ad= $sonuc['birim_ad']; 
                          $sayi= $sonuc['sayi']; 

                  ?>
                    <tr>
                      <td><?php echo $kod; ?></td>
                      <td><?php echo $ad; ?></td>
                      <td><?php echo $sayi; ?></td>
                    </tr>

                <?php 
                  } 
                ?>

            </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Almanya / Tula Üretim Kampüsü</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
       
       			<table class="table">
                      <tr>
                          <th>Birim Kodu</th>
                          <th>Birim Adı</th>
                          <th>Personel Sayısı</th>
                      </tr>
                  <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT birimler.birim_kod,birimler.birim_ad ,COUNT(birimler.birim_kod) as sayi FROM birimler, personel, personel_kampus,uretim_kampus
								          WHERE birimler.birim_kod=personel.birim_kod AND personel.personel_no=personel_kampus.personel_no AND uretim_kampus.kampus_no=personel_kampus.kampus_no AND uretim_kampus.kampus_no=3
									        GROUP by birimler.birim_ad ORDER by birimler.birim_kod"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $kod = $sonuc['birim_kod']; 
                          $ad= $sonuc['birim_ad']; 
                          $sayi= $sonuc['sayi']; 

                  ?>
                    <tr>
                      <td><?php echo $kod; ?></td>
                      <td><?php echo $ad; ?></td>
                      <td><?php echo $sayi; ?></td>
                    </tr>

                <?php 
                  } 
                ?>

            </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Rusya / Ulm Üretim Kampüsü</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
       
       			<table class="table">
                      <tr>
                          <th>Birim Kodu</th>
                          <th>Birim Adı</th>
                          <th>Personel Sayısı</th>
                      </tr>
                  <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT birimler.birim_kod,birimler.birim_ad ,COUNT(birimler.birim_kod) as sayi FROM birimler, personel, personel_kampus,uretim_kampus
								          WHERE birimler.birim_kod=personel.birim_kod AND personel.personel_no=personel_kampus.personel_no AND uretim_kampus.kampus_no=personel_kampus.kampus_no AND uretim_kampus.kampus_no=4
									        GROUP by birimler.birim_ad ORDER by birimler.birim_kod"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $kod = $sonuc['birim_kod']; 
                          $ad= $sonuc['birim_ad']; 
                          $sayi= $sonuc['sayi']; 

                        ?>
                    <tr>
                      <td><?php echo $kod; ?></td>
                      <td><?php echo $ad; ?></td>
                      <td><?php echo $sayi; ?></td>
                    </tr>

                <?php 
                  } 
                ?>
            </table>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Tüm Üretim Kampüslerindeki Birimlerde Genel Personel Sayısı</h5>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <tr>
                      	<th>Birim Kodu</th>
                          <th>Birim Adı</th>
                          <th>Personel Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT birimler.birim_kod, birimler.birim_ad ,COUNT(birimler.birim_kod) as sayi FROM birimler, personel WHERE birimler.birim_kod=personel.birim_kod GROUP by birimler.birim_ad ORDER by birimler.birim_kod"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $kod = $sonuc['birim_kod']; 
                          $ad = $sonuc['birim_ad']; 
                          $persayi = $sonuc['sayi'];
                        ?>
                     <tr>
                     <td><?php echo $kod; ?></td>  
                      <td><?php echo $ad; ?></td>
                      <td><?php echo $persayi; ?></td> 
                         

        
                     </tr>

                <?php 
                  } 
                ?>
                    </table>
                  </div>
                </div>
              </div>

           
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Yönetim Biriminden Sonra En az Personeli olan Birim <br> <i style="color: #000000;">yakın zamanda personel alımı oluşturulsun..</i></h5>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <tr>
                      	<th>Birim Kodu</th>
                        <th>Birim Adı</th>
                        <th>Personel Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT birimler.birim_kod, birimler.birim_ad, COUNT(personel.personel_no) as calisan_sayisi FROM birimler, personel WHERE birimler.birim_kod=personel.birim_kod GROUP BY birimler.birim_ad HAVING calisan_sayisi<round((SELECT count(*)from personel)/(SELECT COUNT(*) from birimler),1) LIMIT 1,1"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $kod = $sonuc['birim_kod']; 
                          $ad = $sonuc['birim_ad']; 
                          $persayi = $sonuc['calisan_sayisi']; 
                           
                        ?>
                     <tr>
                      <td><?php echo $kod; ?></td> 
                      <td><?php echo $ad; ?></td>
                      <td><?php echo $persayi; ?></td>       
                     </tr>

                <?php 
                  } 
                ?>
                    </table>
                  </div>
                </div>
              </div>
            <div class="buttons">
              <a href="grafik_birim.php"><button type="button"  style="color:000000; width: 220px; height: 40px; position:absolute; left: 750px; top: 1700px;" class="btn btn-success btn-lg">Yüzdelik Grafikte gör .</button></a>
            </div>
        <!-- footer  -->
        <footer>
          <div class="pull-right" style=" margin-top:340px;padding-bottom:0.4em; color: white;" > <!-- footer için bu styleı kullan -->
          <strong>TIRSAT A.Ş. 2010-2020</strong>||<small>Tüm hakları saklıdır.</small>
          </div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip.min.js"></script>
    <script src="../vendors/pdfmake/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    
