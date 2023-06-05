<?php // edit tinan hahu
    if(isset($_POST['updateta'])){
    $idt = $_POST['idanot'];
    $tinanak = $_POST['anoaka'];
    $update = mysqli_query($mysqli,"update t_ano set ano='$tinanak' where id_ano='$idt'");
    if($update){
           echo "<script type='text/javascript'>document.location='index.php?page=dados_ano';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_ano');
        }
    }

?>