<?php include 'header.php'; ?>
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
                          <th>Çalıştığı Kampüs</th>
                          <th>Birim Adı</th>
                          <th>Adı</th>
                          <th>Soyadı</th>
                          <th>Doğum Tarihi</th>
                          <th>Telefon No</th>
                          <th>Cinsiyeti</th>
                        </tr>
                      <?php 
                        $baglanti=mysqli_connect("localhost","root","","proje");
                        $baglanti->set_charset("utf8");
                        $baglanti->query('SET NAMES utf8');

                          $sorgu = $baglanti->query("SELECT * FROM personel,birimler,cinsiyet,personel_kampus, uretim_kampus WHERE personel.birim_kod=birimler.birim_kod and personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel.personel_no=personel_kampus.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=1 ORDER BY uretim_kampus.kampus_no  "); 

                            while ($sonuc = $sorgu->fetch_assoc()) { 
                            $per_uretim = $sonuc['kampus_ad']; 
                            $per_birim = $sonuc['birim_ad']; 
                            $per_ad= $sonuc['per_ad'];
                            $per_soyad = $sonuc['per_soyad']; 
                            $per_tarih = $sonuc['dogum_tarih']; 
                            $per_no = $sonuc['per_tel_no']; 
                            $per_cins = $sonuc['cinsiyet_tur']; 
                        ?>
                    <tr>
                      <td><?php echo $per_uretim; ?></td>
                      <td><?php echo $per_birim; ?></td>
                      <td><?php echo $per_ad; ?></td>
                      <td><?php echo $per_soyad; ?></td>
                      <td><?php echo $per_tarih; ?></td>
                      <td><?php echo $per_no; ?></td>
                      <td><?php echo $per_cins; ?></td>      
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
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                       <tr>
                          <th>Çalıştığı Kampüs</th>
                          <th>Birim Adı</th>
                          <th>Adı</th>
                          <th>Soyadı</th>
                          <th>Doğum Tarihi</th>
                          <th>Telefon No</th>
                          <th>Cinsiyeti</th>
                        </tr>
                      <?php 
                        $baglanti=mysqli_connect("localhost","root","","proje");
                        $baglanti->set_charset("utf8");
                        $baglanti->query('SET NAMES utf8');

                    $sorgu = $baglanti->query("SELECT * FROM personel,birimler,cinsiyet,personel_kampus, uretim_kampus WHERE personel.birim_kod=birimler.birim_kod and personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel.personel_no=personel_kampus.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=2 ORDER BY uretim_kampus.kampus_no  "); 

                    while ($sonuc = $sorgu->fetch_assoc()) { 
                    $per_uretim = $sonuc['kampus_ad']; 
                    $per_birim = $sonuc['birim_ad']; 
                    $per_ad= $sonuc['per_ad'];
                    $per_soyad = $sonuc['per_soyad']; 
                    $per_tarih = $sonuc['dogum_tarih']; 
                    $per_no = $sonuc['per_tel_no']; 
                    $per_cins = $sonuc['cinsiyet_tur']; 

                    ?>
    
                    <tr>
                      <td><?php echo $per_uretim; ?></td>
                      <td><?php echo $per_birim; ?></td>
                      <td><?php echo $per_ad; ?></td>
                      <td><?php echo $per_soyad; ?></td>
                      <td><?php echo $per_tarih; ?></td>
                      <td><?php echo $per_no; ?></td>
                      <td><?php echo $per_cins; ?></td>      
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
                    <div class="clearfix"></div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                       <tr>
                          <th>Çalıştığı Kampüs</th>
                          <th>Birim Adı</th>
                          <th>Adı</th>
                          <th>Soyadı</th>
                          <th>Doğum Tarihi</th>
                          <th>Telefon No</th>
                          <th>Cinsiyeti</th>
                        </tr>
                      <?php 
                        $baglanti=mysqli_connect("localhost","root","","proje");
                        $baglanti->set_charset("utf8");
                        $baglanti->query('SET NAMES utf8');
                    $sorgu = $baglanti->query("SELECT * FROM personel,birimler,cinsiyet,personel_kampus, uretim_kampus WHERE personel.birim_kod=birimler.birim_kod and personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel.personel_no=personel_kampus.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=3 ORDER BY uretim_kampus.kampus_no  "); 

                    while ($sonuc = $sorgu->fetch_assoc()) { 
                    $per_uretim = $sonuc['kampus_ad']; 
                    $per_birim = $sonuc['birim_ad']; 
                    $per_ad= $sonuc['per_ad'];
                    $per_soyad = $sonuc['per_soyad']; 
                    $per_tarih = $sonuc['dogum_tarih']; 
                    $per_no = $sonuc['per_tel_no']; 
                    $per_cins = $sonuc['cinsiyet_tur']; 

                    ?>
    
                    <tr>
                      <td><?php echo $per_uretim; ?></td>
                      <td><?php echo $per_birim; ?></td>
                      <td><?php echo $per_ad; ?></td>
                      <td><?php echo $per_soyad; ?></td>
                      <td><?php echo $per_tarih; ?></td>
                      <td><?php echo $per_no; ?></td>
                      <td><?php echo $per_cins; ?></td>      
        
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
                    <div class="clearfix"></div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                       <tr>
                          <th>Çalıştığı Kampüs</th>
                          <th>Birim Adı</th>
                          <th>Adı</th>
                          <th>Soyadı</th>
                          <th>Doğum Tarihi</th>
                          <th>Telefon No</th>
                          <th>Cinsiyeti</th>
                        </tr>
                      <?php 
                        $baglanti=mysqli_connect("localhost","root","","proje");
                        $baglanti->set_charset("utf8");
                        $baglanti->query('SET NAMES utf8');
                    $sorgu = $baglanti->query("SELECT * FROM personel,birimler,cinsiyet,personel_kampus, uretim_kampus WHERE personel.birim_kod=birimler.birim_kod and personel.cinsiyet_id=cinsiyet.cinsiyet_id and personel.personel_no=personel_kampus.personel_no and personel_kampus.kampus_no=uretim_kampus.kampus_no and uretim_kampus.kampus_no=4 ORDER BY uretim_kampus.kampus_no  "); 

                    while ($sonuc = $sorgu->fetch_assoc()) { 
                    $per_uretim = $sonuc['kampus_ad']; 
                    $per_birim = $sonuc['birim_ad']; 
                    $per_ad= $sonuc['per_ad'];
                    $per_soyad = $sonuc['per_soyad']; 
                    $per_tarih = $sonuc['dogum_tarih']; 
                    $per_no = $sonuc['per_tel_no']; 
                    $per_cins = $sonuc['cinsiyet_tur']; 

                    ?>
    
                    <tr>
                      <td><?php echo $per_uretim; ?></td>
                      <td><?php echo $per_birim; ?></td>
                      <td><?php echo $per_ad; ?></td>
                      <td><?php echo $per_soyad; ?></td>
                      <td><?php echo $per_tarih; ?></td>
                      <td><?php echo $per_no; ?></td>
                      <td><?php echo $per_cins; ?></td>      
        
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
          <div class="pull-right">
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
