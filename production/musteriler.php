<?php 
  include 'header.php'; 
?>
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                <tr>
                      <th>Sipariş Tarihi</th>
                      <th>Adı</th>
                      <th>Soyadı</th>
                      <th>Telefon No</th>
                      <th>Bulunduğu Ülke</th>
                      <th>Bulunduğu Şehir</th>
                      <th>Adres</th>
                      <th>Sipariş edilen ürün</th>
                </tr>
                <?php 
                $baglanti=mysqli_connect("localhost","root","","proje");
                 $baglanti->set_charset("utf8");
                 $baglanti->query('SET NAMES utf8');

                $sorgu = $baglanti->query("SELECT * FROM  musteriler, adresler, musteri_adres, siparisler,urunler WHERE adresler.adres_id=musteri_adres.adres_id and musteri_adres.musteri_id=musteriler.musteri_id and musteriler.musteri_id=siparisler.musteri_id and urunler.urun_id=siparisler.urun_id ORDER BY siparisler.tarih "); 

                  while ($sonuc = $sorgu->fetch_assoc()) {  
                  $tarih= $sonuc['tarih'];
                  $ad = $sonuc['ad']; 
                  $soyad = $sonuc['soyad'];
                  $tel_no = $sonuc['tel_no']; 
                  $ulke= $sonuc['ulke_ad'];
                  $sehir = $sonuc['il_ad'];
                  $adres = $sonuc['adres_ad'];
                  $urun= $sonuc['urun_ad'];
              ?>
              <tr>
                <td><?php echo $tarih; ?></td>
                <td><?php echo $ad; ?></td>
                <td><?php echo $soyad; ?></td>
                <td><?php echo $tel_no; ?></td>  
                <td><?php echo $ulke; ?></td>
                <td><?php echo $sehir; ?></td>
                <td><?php echo $adres; ?></td>
                <td><?php echo $urun; ?></td>
              </tr> 
                <?php 
                  } 
                ?>

                    </table>
                  </div>
                </div>
              </div>
              <!-- Bitiyor -->
        <!-- footer  -->
        <footer>
          <div class="pull-right" style=" margin-top:340px;padding-bottom:0.4em"> <!-- footer için bu styleı kullan -->
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
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
    
