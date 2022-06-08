<!DOCTYPE html>
<html>
<head>
    <title>Grafik</title>
 
    <?php
        foreach($data as $data){
            $tanggal_simpanan[] = $data->tanggal_simpanan;
            $jumlah_simpanan[] = $data->jumlah_simpanan;
        }
    ?>
</head>
<body>
        
    <h1>Grafik Simpanan per Tanggal Simpanan</h1>
    <canvas id="canvas" width="1000" height="280"></canvas>
 
    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/bower_components/chart.js/Chart.min.js'?>"></script>
    <script>
 
            var lineChartData = {
                labels : <?php echo json_encode($tanggal_simpanan);?>,
                datasets : [
                     
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jumlah_simpanan);?>
                    }
 
                ]
                 
            }
 
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
         
    </script>
</body>
</html>