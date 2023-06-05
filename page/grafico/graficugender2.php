    
    <br>
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                 <div class="card">  
             <div class="card-header">
    <h5 class="fw-bold card-title">Grafico Gender</h5> 
              </div>    

    <!-- <link rel="stylesheet" href="assets/stylecss/style.css">; -->
    <script src="assets/js/Chart.js"></script>

    <br>
    <h4>Cara Membuat Grafik (Chart) di PHP dengan Chart.js</h4>
    <canvas id="myChart"></canvas>
    <?php
    $kon = mysqli_connect("localhost","root","","akademi");
    //Query untuk menampilkan tabel mahasiswa1
        $nama_jurusan1= "";
        $jumlah1=null;

        $sql="select sexo,COUNT(*) as 'total' from t_estudante GROUP by sexo";

    $hasil=mysqli_query($kon,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        $jur1=$data['sexo'];
        $nama_jurusan1 .= "'$jur1'". ", ";

        $jum1=$data['total'];
        $jumlah1 .= "$jum1". ", ";
    }
   
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [<?php echo $nama_jurusan1; ?>],
            datasets: [{
                label:'Dadus total',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah1; ?>]
            },
            
                
            ]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>


</div>
</div>
</div>
</div>
</section>