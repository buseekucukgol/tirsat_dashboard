<?php include 'header.php'; ?>
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Üretilen Ürünler<small>kampüslere göre</small></h2>
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
      <th>Ürün ID</th>
      <th>Ürün Adı</th>
      <th>Ürün Fiyatı (₺)</th>
      <th>Üretildiği Kampüs Adı</th>
      <th>Bulunduğu Ülke</th>
    </tr>

<h5>Adapazarı Üretim Kampüsü</h5>
<?php 
$baglanti=mysqli_connect("localhost","root","","proje");
  $baglanti->set_charset("utf8");
  $baglanti->query('SET NAMES utf8');

$sorgu = $baglanti->query("SELECT * FROM urunler,urun_detay, uretim_kampus WHERE urunler.urun_id=urun_detay.urun_id 
and urun_detay.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=1 "); 

while ($sonuc = $sorgu->fetch_assoc()) {  
$id= $sonuc['urun_id'];
$ad = $sonuc['urun_ad']; 
$fiyat = $sonuc['fiyat'];
$kampus = $sonuc['kampus_ad']; 
$ulke= $sonuc['kampus_ulke'];

?>
    
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $ad; ?></td>
      <td><?php echo $fiyat; ?></td>
      <td><?php echo $kampus; ?></td>  
      <td><?php echo $ulke; ?></td>       
        
    </tr>
                <?php 
                  } 

                ?>

                    </table>
                    <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">

    <tr>
      <th>Ürün ID</th>
      <th>Ürün Adı</th>
      <th>Ürün Fiyatı (₺)</th>
      <th>Üretildiği Kampüs Adı</th>
      <th>Bulunduğu Ülke</th>
    </tr>

    <h5>Goch Üretim Kampüsü</h5>
<?php 
$baglanti=mysqli_connect("localhost","root","","proje");
  $baglanti->set_charset("utf8");
  $baglanti->query('SET NAMES utf8');

$sorgu = $baglanti->query("SELECT * FROM urunler,urun_detay, uretim_kampus WHERE urunler.urun_id=urun_detay.urun_id 
and urun_detay.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=2  "); 

while ($sonuc = $sorgu->fetch_assoc()) {  
$id= $sonuc['urun_id'];
$ad = $sonuc['urun_ad']; 
$fiyat = $sonuc['fiyat'];
$kampus = $sonuc['kampus_ad']; 
$ulke= $sonuc['kampus_ulke'];

?>
    
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $ad; ?></td>
      <td><?php echo $fiyat; ?></td>
      <td><?php echo $kampus; ?></td>  
      <td><?php echo $ulke; ?></td>       
        
    </tr>
                <?php 
                  } 

                ?>

                    </table>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">

    <tr>
      <th>Ürün ID</th>
      <th>Ürün Adı</th>
      <th>Ürün Fiyatı (₺)</th>
      <th>Üretildiği Kampüs Adı</th>
      <th>Bulunduğu Ülke</th>
    </tr>

    <h5>Ulm Üretim Kampüsü</h5>
<?php 
$baglanti=mysqli_connect("localhost","root","","proje");
  $baglanti->set_charset("utf8");
  $baglanti->query('SET NAMES utf8');

$sorgu = $baglanti->query("SELECT * FROM urunler,urun_detay, uretim_kampus WHERE urunler.urun_id=urun_detay.urun_id 
and urun_detay.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=3 "); 

while ($sonuc = $sorgu->fetch_assoc()) {  
$id= $sonuc['urun_id'];
$ad = $sonuc['urun_ad']; 
$fiyat = $sonuc['fiyat'];
$kampus = $sonuc['kampus_ad']; 
$ulke= $sonuc['kampus_ulke'];

?>
    
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $ad; ?></td>
      <td><?php echo $fiyat; ?></td>
      <td><?php echo $kampus; ?></td>  
      <td><?php echo $ulke; ?></td>       
    </tr>
                <?php 
                  } 

                ?>

                    </table>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">

    <tr>
      <th>Ürün ID</th>
      <th>Ürün Adı</th>
      <th>Ürün Fiyatı (₺)</th>
      <th>Üretildiği Kampüs Adı</th>
      <th>Bulunduğu Ülke</th>
    </tr>

    <h5>Tula Üretim Kampüsü</h5>
<?php 
$baglanti=mysqli_connect("localhost","root","","proje");
  $baglanti->set_charset("utf8");
  $baglanti->query('SET NAMES utf8');

$sorgu = $baglanti->query("SELECT * FROM urunler,urun_detay, uretim_kampus WHERE urunler.urun_id=urun_detay.urun_id 
and urun_detay.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=4"); 

while ($sonuc = $sorgu->fetch_assoc()) {  
$id= $sonuc['urun_id'];
$ad = $sonuc['urun_ad']; 
$fiyat = $sonuc['fiyat'];
$kampus = $sonuc['kampus_ad']; 
$ulke= $sonuc['kampus_ulke'];

?>
    
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $ad; ?></td>
      <td><?php echo $fiyat; ?></td>
      <td><?php echo $kampus; ?></td>  
      <td><?php echo $ulke; ?></td>       
    </tr>
                <?php 
                  } 

                ?>

                    </table>
                  </div>
                  </div>
                </div>
              </div>
              <!-- Bitiyor -->
        <!-- footer  -->
        <footer>
          <div class="pull-right">
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
    
