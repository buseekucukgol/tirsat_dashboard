<?php 
require 'baglan.php';
$sql = "SELECT urunler.urun_id, (urunler.urun_ad) as ad, SUM(siparisler.adet) as toplam FROM siparisler, urunler WHERE urunler.urun_id=siparisler.urun_id  GROUP BY urunler.urun_id ORDER BY urunler.urun_id";
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
          ['ürün', 'satış'],

          <?php
            while($row = $res->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["toplam"]."],";
            }
          ?>
        ]);

        var options = {
          title: 'ürünlerin toplam satış oranları',
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
  <a href="urun_siparis.php"><button type="button"  style="color:000000; width: 220px; height: 40px; position:absolute; left: 650px; top: 600px;" class="btn btn-success btn-lg">Ürün sayfasına git</button></a>
</div>
</body>
</html>