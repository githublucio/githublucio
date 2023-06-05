 <!--  delete estudante hahu --> 
<?php
   if(isset($_POST['hamosstatus'])){
    $idet = $_POST['idstatus'];
   
    $del = mysqli_query($mysqli,"delete from t_status where id_status='$idet'");
    if($del){
           echo "<script type='text/javascript'>document.location='index.php?page=dados_status';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_status');
        }
    }
?>;
