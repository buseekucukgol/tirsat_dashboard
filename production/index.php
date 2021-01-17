<?php 
    include 'header.php';
?>
        <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12">
              </div>
            </div>
        </div>
        <!--dolar değerleri çekilmesi-->
         <div class="col-sm-12 col-md-6" style=" position: absolute; left: 250px; top: 350px;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 3%; color: #000;">YILLIK VE AYLIK ENFLASYON ORANI</h4>
                    </div>
                    <div class="card text-left">
                        <?php
                            function getir($baslangic, $son, $cekilmek_istenen){
                            @preg_match_all('/' . preg_quote($baslangic, '/') .
                                '(.*?)'. preg_quote($son, '/').'/i', $cekilmek_istenen, $m);
                                    return @$m[1];
                            }
                            $url = "https://www.tcmb.gov.tr/wps/wcm/connect/TR/TCMB+TR/Main+Menu/Istatistikler/Enflasyon+Verileri/Tuketici+Fiyatlari";
                            $cekilen_veri = file_get_contents($url);
                            $ay = getir('<td style="height: 20px; width: 120px;">',"</td>",$cekilen_veri);
                             $yıl=getir('<td style="text-align: center; width: 140px;">',"</td>",$cekilen_veri);
                            $tufe=getir('<td style="text-align: center;">',"</td>",$cekilen_veri);
                                    echo "<table class='table'>";
                                    echo "<thead class='thead-dark'>";
                                    echo "<tr>";
                                    echo "<th scope='col'style='margin-left:10px;' >   <i class='far fa-calendar-alt'></i></th>";
                                    echo "<th scope='col' > YILLIK % DEĞİŞİM</th>";
                                    echo "<th scope='col'> AYLIK % DEĞİŞİM</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td > ".$ay[0]."</td>";
                                    echo "<td style='padding-left:60px;'> ".$yıl[0]."</td>";
                                    echo "<td style='padding-left:70px;'>"  .$tufe[0]."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td > ".$ay[1]."</td>";
                                    echo "<td style='padding-left:60px;'> ".$yıl[1]."</td>";
                                    echo "<td style='padding-left:70px;'>"  .$tufe[1]."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td > ".$ay[2]."</td>";
                                    echo "<td style='padding-left:60px;'> ".$yıl[2]."</td>";
                                    echo "<td style='padding-left:70px;'>"  .$tufe[2]."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td > ".$ay[3]."</td>";
                                    echo "<td style='padding-left:60px;'> ".$yıl[3]."</td>";
                                    echo "<td style='padding-left:70px;'>"  .$tufe[3]."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td > ".$ay[4]."</td>";
                                    echo "<td style='padding-left:60px;'> ".$yıl[4]."</td>";
                                    echo "<td style='padding-left:70px;'>"  .$tufe[4]."</td>";
                                    echo "</tr>";
                                    echo "</table>";
                        ?>
                    </div>
                </div>
        <!--enflasyon oranı çekilmesi-->
        <div class="col-sm-12 col-md-6" style=" position: absolute; left: 250px; top: 50px;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 3%; color: #000;">DÖVİZ KURLARI</h4>
                    </div>
                    <div class="card text-left">
                <?php
                             $connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
                            $usd_buying = $connect_web->Currency[0]->BanknoteBuying;
                            $usd_selling = $connect_web->Currency[0]->BanknoteSelling;
                            $euro_buying = $connect_web->Currency[3]->BanknoteBuying;
                            $euro_selling = $connect_web->Currency[3]->BanknoteSelling;
                            $str_buying = $connect_web->Currency[8]->BanknoteBuying;
                            $str_selling = $connect_web->Currency[8]->BanknoteSelling;
                            echo "<table class='table'>";
                            echo "<thead class='thead-dark'>";
                            echo "<tr>";
                            echo "<th scope='col' style='padding-left:16%;'><i class='fas fa-lira-sign'></i>ALIŞ</th>";
                            echo "<th scope='col'><i class='fas fa-lira-sign'></i>SATIŞ</th>";
                             echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            echo "<td ><i class='fas fa-euro-sign' ></i><span style ='color:#000; margin-right:17px;'> EURO :</span> <label> ".$euro_buying."</label></td>";
                            echo "<td>"  .$euro_selling."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><i class='fas fa-dollar-sign'></i><span style ='color:#000; margin-right:14px;'> DOLAR :</span> <label>".$usd_buying."</label></td>";
                            echo "<td>".$usd_selling."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><i class='fas fa-pound-sign'></i><span style ='color:#000; margin-right:14px;'> STERLİN :</span> <label>".$str_buying."</label></td>";
                            echo "<td>".$str_selling."</td>";
                            echo "</tr>";
                            echo "</table>";

                            ?>
                            </div>
                </div>
        <!-- footer -->
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
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>