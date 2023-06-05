    <?php
    $kon = mysqli_connect("localhost","root","","akademi");

    ?>
    <br>
     <section class="content1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                 <div class="card">  
             <div class="card-header">
    <h5 class="fw-bold card-title">Grafico Gender</h5> 
              </div>    

    <!-- <link rel="stylesheet" href="assets/stylecss/style.css">; -->
    <html>
  <head>
    <style>
        #piechart{
            
            margin: 20px;
            position: absolute;
            left: 900px;
            top:120px;
            display: inline-block;
           
            
           
        }

        #curve_chart{
            width: 600px;
            height:300px;
            right: 7000px;
            
           
        }
      
    </style>
    <script type="text/javascript" src="assets/googlechr/chart.js"></script>
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {


        var data = google.visualization.arrayToDataTable([
          ['sexo', 'total'],
          <?php
    //Query untuk menampilkan tabel mahasiswa

        $sql="select sexo,COUNT(*) as 'total' from t_estudante GROUP by sexo";

    $hasil=mysqli_query($kon,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        echo"['".$data['sexo']."',".$data['total']."],";
    }
   
    ?>
        ]);

        var options = {
          title: 'total kada generu'
        };

        // var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));


        chart.draw(data, options);



        // grafik  segundu

       


        // grafiku terseiru
        var data3 = google.visualization.arrayToDataTable([
          ['sexo', 'total'],
          <?php
    //Query untuk menampilkan tabel mahasiswa

        $sql="select sexo,COUNT(*) as 'total' from t_estudante GROUP by sexo";

    $hasil=mysqli_query($kon,$sql);

    while ($data3 = mysqli_fetch_array($hasil)) {
        echo"['".$data3['sexo']."',".$data3['total']."],";
    }
   
    ?>
        ]);

        var options3 = {
          title: 'total kada generu'
        };

        var chart3 = new google.visualization.LineChart(document.getElementById('curve_chart'));
        // var chart = new google.visualization.PieChart(document.getElementById('piechart'));


        chart3.draw(data3, options3);


      };
    </script>
  </head>
  <body>
  <!-- <div id="curve_chart" style="width: 900px; height: 500px" class="text-center"></div> -->
  <div id="curve_chart"></div>
  <div id="piechart"></div>

  <?php
   $host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
    echo $host;
   ?> 
    <?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);
?> 
<!-- <script>

var browser = '';
var browserVersion = 0;

if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Opera';
} else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
    browser = 'MSIE';
} else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Netscape';
} else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Chrome';
} else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Safari';
    /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
    browserVersion = new Number(RegExp.$1);
} else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Firefox';
}
if(browserVersion === 0){
    browserVersion = parseFloat(new Number(RegExp.$1));
}
alert(browser + "*" + browserVersion);
</script> -->

  
  </body>
</html>



</div>
</div>
</div>
</div>
</section>