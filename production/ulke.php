<?php include 'header.php'; ?>
        <div class="right_col" role="main">
          <div class="">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Ülkelere Yapılan Satış Sayıları</h4>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                          <th>Ülke Adı</th>
                          <th>Toplam Satış Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT adresler.ulke_ad, COUNT(siparisler.adet) as sayi FROM adresler, siparisler, musteri_adres,musteriler WHERE adresler.adres_id=musteri_adres.adres_id and musteri_adres.musteri_id=musteriler.musteri_id AND musteriler.musteri_id=siparisler.musteri_id GROUP BY adresler.ulke_ad "); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          
                          $ad= $sonuc['ulke_ad']; 
                          $sayi= $sonuc['sayi']; 

                        ?>
                    <tr>
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
                    <h5>Satış Sayısı En Fazla Olan 2 Ülke Sayısı<br>  <i style="color: #000000;">Yakın zamanda üretim kampüsleri değerlendirilip büyüme kararına varılsın..</i></h5>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                   
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">

                      <tr>
                        
                          <th>Ülke Adı</th>
                          <th>Satış Sayı</th>
                        </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT adresler.ulke_ad, COUNT(siparisler.adet) as sayi FROM adresler, siparisler, musteri_adres,musteriler WHERE adresler.adres_id=musteri_adres.adres_id and musteri_adres.musteri_id=musteriler.musteri_id AND musteriler.musteri_id=siparisler.musteri_id GROUP BY adresler.ulke_ad ORDER BY sayi DESC LIMIT 2"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $ad = $sonuc['ulke_ad']; 
                          $urunsayi = $sonuc['sayi']; 
                           
                        ?>
                     <tr>
                      <td><?php echo $ad; ?></td>
                      <td><?php echo $urunsayi; ?></td>       
                     </tr>
                <?php 
                  } 
                ?>
                    </table>
                  </div>
                </div>
              </div>
              <div class="buttons">
                <a href="grafik_ulke.php"><button type="button"  style="color:000000; width: 220px; height: 40px; position:absolute; left: 800px; top: 600px;" class="btn btn-success btn-lg">Yüzde olarak grafikte gör </button></a>
              </div>

              <footer>
          <div class="pull-right" style=" margin-top:540px;color: white; ">
          <strong>TIRSAT A.Ş. 2010-2020</strong>||<small>Tüm hakları saklıdır.</small>
          </div>
        </footer>
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