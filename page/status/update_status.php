<?php // edit tinan hahu
   // edit status hahu
    if(isset($_POST['updatest'])){
    $ides = $_POST['idstatus'];
    $estatus = $_POST['statuses'];
    $update = mysqli_query($mysqli,"update t_status set status='$estatus' where id_status ='$ides'");
    if($update){
           echo "<script type='text/javascript'>document.location='index.php?page=dados_status';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_status');
        }
    }

?>