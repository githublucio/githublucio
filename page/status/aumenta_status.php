 <!--  Aumenta --> 
<?php
  if(isset($_POST['addak'])){
    $idanoak =$_POST['idanoak'];
    $anoak = $_POST['anoak'];
    $aumentadatatama = mysqli_query($mysqli, "INSERT INTO t_ano(ano) values ('$anoak')");
      if($aumentadatatama){
           echo "<script type='text/javascript'>document.location='index.php?page=dados_status';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_status');
        }
    }
?>;
