
<?php 
// delete Doente

if(isset($_POST['hamosfun'])){
    $idfu = $_POST['idfuns'];
   
    $del = mysqli_query($mysqli,"delete from t_funs where id_funs='$idfu'");
    if($del){
        echo "<script type='text/javascript'>document.location='index.php?page=dados_docente';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_docente');
    }
}

?>