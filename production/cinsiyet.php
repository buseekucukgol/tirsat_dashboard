<?php include 'header.php'; ?>
        <div class="right_col" role="main">
          <div class="">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Türkiye / Adapazarı Üretim Kampüsündeki Sayılar</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                          <th>Cinsiyet Türü</th>
                          <th>Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT cinsiyet.cinsiyet_tur, COUNT(cinsiyet.cinsiyet_id) as sayi 
                          FROM personel,cinsiyet,uretim_kampus,personel_kampus
                          WHERE personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel_kampus.personel_no=personel.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=1
                          GROUP BY cinsiyet.cinsiyet_tur "); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $tur = $sonuc['cinsiyet_tur']; 
                          $sayi= $sonuc['sayi']; 
                        ?>
                    <tr>
                      <td><?php echo $tur; ?></td>
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
                    <h5>Almanya / Goch Üretim Kampüsündeki Sayılar</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                          <th>Cinsiyet Türü</th>
                          <th>Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT cinsiyet.cinsiyet_tur, COUNT(cinsiyet.cinsiyet_id) as sayi 
                          FROM personel,cinsiyet,uretim_kampus,personel_kampus
                          WHERE personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel_kampus.personel_no=personel.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=2
                          GROUP BY cinsiyet.cinsiyet_tur "); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $tur = $sonuc['cinsiyet_tur']; 
                          $sayi= $sonuc['sayi']; 
                        ?>
                    <tr>
                      <td><?php echo $tur; ?></td>
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
                    <h5>Almanya / Ulm Üretim Kampüsündeki Sayılar</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                          <th>Cinsiyet Türü</th>
                          <th>Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT cinsiyet.cinsiyet_tur, COUNT(cinsiyet.cinsiyet_id) as sayi 
                          FROM personel,cinsiyet,uretim_kampus,personel_kampus
                          WHERE personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel_kampus.personel_no=personel.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=3
                          GROUP BY cinsiyet.cinsiyet_tur "); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $tur = $sonuc['cinsiyet_tur']; 
                          $sayi= $sonuc['sayi']; 
                        ?>
                    <tr>
                      <td><?php echo $tur; ?></td>
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
                    <h5>Rusya / Tula Üretim Kampüsündeki Sayılar</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                          <th>Cinsiyet Türü</th>
                          <th>Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT cinsiyet.cinsiyet_tur, COUNT(cinsiyet.cinsiyet_id) as sayi 
                          FROM personel,cinsiyet,uretim_kampus,personel_kampus
                          WHERE personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel_kampus.personel_no=personel.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=4
                          GROUP BY cinsiyet.cinsiyet_tur "); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $tur = $sonuc['cinsiyet_tur']; 
                          $sayi= $sonuc['sayi']; 
                        ?>
                    <tr>
                      <td><?php echo $tur; ?></td>
                      <td><?php echo $sayi; ?></td>
                    </tr>
                <?php 
                  } 
                ?>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Bitiyor -->
        <!-- footer -->
        <footer>
          <div class="pull-right" style=" margin-top:440px;padding-bottom:10px; color: white;"> <!-- footer için bu styleı kullan -->
          <strong>TIRSAT A.Ş. 2010-2020</strong>||<small>Tüm hakları saklıdır.</small>
          </div>
        </footer>
        <!-- /footer  -->
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
    
