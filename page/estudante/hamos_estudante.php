 <!--  delete estudante hahu --> 
<?php
    if(isset($_POST['hamosstudante'])){
        $ides = $_POST['ide'];
         // echo $ides."";  return false;
    
        $del = mysqli_query($mysqli,"delete from tbl_estudante2 where id='$ides'");
        if($del){
           echo "<script type='text/javascript'>document.location='index.php?page=dados_estudante';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_estudante');
        }
    }
?>;
