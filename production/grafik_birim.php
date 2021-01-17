<?php 
require 'baglan.php';
$sql = "SELECT birimler.birim_kod, (birimler.birim_ad) birim ,COUNT(birimler.birim_kod) as sayi FROM birimler, personel WHERE birimler.birim_kod=personel.birim_kod GROUP by birimler.birim_ad ORDER by birimler.birim_kod";
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
                echo "['".$row["birim"]."',".$row["sayi"]."],";
            }
          ?>
        ]);
        var options = {
          title: 'Birimlerdeki Personel Sayısı Oranı',
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
  <a href="personel_birim.php"><button type="button"  style="color:000000; width: 220px; height: 40px; position:absolute; left: 650px; top: 600px;" class="btn btn-success btn-lg">Birimler & Personel Sayfasına git</button></a>
</div>
</body>
</html>