 <!--  delete estudante hahu --> 
<?php
   if(isset($_POST['hamostk'])){
    $idet = $_POST['idano'];
   
    $del = mysqli_query($mysqli,"delete from t_ano where id_ano='$idet'");
    if($del){
           echo "<script type='text/javascript'>document.location='index.php?page=dados_ano';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_ano');
        }
    }
?>;
