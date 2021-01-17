<?php include 'header.php'; ?>
        <div class="right_col" role="main">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>01-01-2020 | 30-06-2020 Arası Satış Rakamları</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                          <th>Ürün ID</th>
                          <th>Ürün Adı</th>
                          <th>Toplam Satış Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT urunler.urun_id, urunler.urun_ad, SUM(siparisler.adet) as toplam FROM siparisler, urunler WHERE urunler.urun_id=siparisler.urun_id and siparisler.tarih<='2020-06-30' GROUP BY urunler.urun_id ORDER BY urunler.urun_id"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $id = $sonuc['urun_id']; 
                          $ad= $sonuc['urun_ad']; 
                          $sayi= $sonuc['toplam']; 
                        ?>
                    <tr>
                      <td><?php echo $id; ?></td>
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
                    <h5>01-07-2020 | 31-12-2020 Arası Satış Rakamları</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                          <th>Ürün ID</th>
                          <th>Ürün Adı</th>
                          <th>Toplam Satış Sayısı</th>
                      </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT urunler.urun_id, urunler.urun_ad, SUM(siparisler.adet) as toplam FROM siparisler, urunler WHERE urunler.urun_id=siparisler.urun_id and siparisler.tarih>'2020-06-30' GROUP BY urunler.urun_id ORDER BY urunler.urun_id"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $id = $sonuc['urun_id']; 
                          $ad= $sonuc['urun_ad']; 
                          $sayi= $sonuc['toplam']; 
                        ?>
                    <tr>
                      <td><?php echo $id; ?></td>
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
<br><br>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5> Sipariş Sayısı en az olan ürün:<br> <i style="color: #000000;">Ürünlerin satışı için kampanya oluşturulsun ya da satış düşüklüğü sebepleri araştırılsın..</i></h5>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">

                      <tr>
                        <th>Ürün ID</th>
                          <th>Ürün Adı</th>
                          <th>Satış Sayı</th>
                        </tr>
                        <?php 
                          $baglanti=mysqli_connect("localhost","root","","proje");
                          $baglanti->set_charset("utf8");
                          $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT urunler.urun_id, urunler.urun_ad, COUNT(siparisler.urun_id) as urun FROM urunler,siparisler WHERE urunler.urun_id=siparisler.urun_id GROUP BY urunler.urun_id HAVING urun<round((SELECT count(*)from siparisler)/(SELECT COUNT(*) from urunler),1) LIMIT 1"); 

                          while ($sonuc = $sorgu->fetch_assoc()) { 
                          $kod = $sonuc['urun_id']; 
                          $ad = $sonuc['urun_ad']; 
                          $urunsayi = $sonuc['urun']; 
                        ?>
                    <tr>
                      <td><?php echo $kod; ?></td> 
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
                    <a href="urun_grafik.php"><button type="button"  style="color:000000; width: 220px; height: 40px; position:absolute; left: 750px; top: 1000px;" class="btn btn-success btn-lg">Yüzdelik Satışı gör</button></a>
              </div>
        <footer>
          <div class="pull-right" style=" margin-top:340px;color: white; ">
          <strong>TIRSAT A.Ş. 2010-2020</strong>||<small>Tüm hakları saklıdır.</small>
          </div>
        </footer>
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