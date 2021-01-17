<?php 
require 'baglan.php';
$sql = "SELECT (adresler.ulke_ad) as ad, COUNT(siparisler.adet) as sayi FROM adresler, siparisler, musteri_adres,musteriler WHERE adresler.adres_id=musteri_adres.adres_id and musteri_adres.musteri_id=musteriler.musteri_id AND musteriler.musteri_id=siparisler.musteri_id GROUP BY adresler.ulke_ad";
$res = $baglan->query($sql);  
?>
<html>
<head></head>
<body>
<div id="chart_div" style=" margin-left:450px; margin-top: 100px; margin-bottom: 80px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['ülke', 'satış'],
          <?php
            while($row = $res->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["sayi"]."],";
            }
          ?>
        ]);
        var options = {
          title: 'Ülkelerde Satış Sayısı',
          pieHole: 0.4,
          height:400,
          width:800,
          backgroundColor:'white'
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
  </script>
 <div class="buttons">
  <a href="ulke.php"><button type="button"  style="color:000000; width: 220px; height: 40px; position:absolute; left: 650px; top: 600px;" class="btn btn-success btn-lg">ÜLKELER & SİPARİŞ SAYISI'na git</button></a>
</div>
</body>
</html>