<?php include 'header.php'; ?>
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siparişler <small>ÖZET </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                    <tr>
                      <th>Müşteri Adı Soyadı</th>
                      
                      <th>Ürün Adı</th>
                      <th>Aldığı Adet</th>
                      <th>Ödeyeceği Fiyat</th>
                    </tr>
                <?php 
                $baglanti=mysqli_connect("localhost","root","","proje");
                 $baglanti->set_charset("utf8");
                 $baglanti->query('SET NAMES utf8');

                $sorgu = $baglanti->query("SELECT concat(musteriler.ad,' ',musteriler.soyad)as müşteri, urunler.urun_ad, siparisler.adet, (siparisler.adet*urunler.fiyat) as tutar FROM siparisler, urunler,musteriler WHERE siparisler.urun_id=urunler.urun_id AND musteriler.musteri_id=siparisler.musteri_id ");  
                  while ($sonuc = $sorgu->fetch_assoc()) {  

                  $ad = $sonuc['müşteri']; 
                  
                  $urun= $sonuc['urun_ad'];

                  $adet = $sonuc['adet'];
                  $top = $sonuc['tutar'];
              ?>
              <tr>
                <td><?php echo $ad; ?></td>
                <td><?php echo $urun; ?></td>
                <td><?php echo $adet; ?></td>
                <td><?php echo $top; ?></td>
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
          <div class="pull-right" style=" margin-top:340px;padding-bottom:0.4em"> <!-- footer için bu styleı kullan -->
          <strong>TIRSAT A.Ş. 2010-2020</strong>||<small>Tüm hakları saklıdır.</small>
          </div>
        </footer>
        <!-- /footer -->
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

    
