 <!-- // update docen hahu -->
<?php
 if(isset($_POST['updatedocen'])){
    $idf = $_POST['idfn'];
    $naranfuns = $_POST['naranfn'];
    $nivestudu = $_POST['gelarfn'];
    $cargod = $_POST['kargufn'];
    $statusf = $_POST['statusfn'];
    $update = mysqli_query($mysqli,"update t_funs set naran_funs='$naranfuns', nivel_estudo='$nivestudu', cargo='$cargod', status='$statusf' where id_funs ='$idf'");
    if($update){
    echo "<script type='text/javascript'>document.location='index.php?page=dados_docente';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_docente');
             }          
    }
?>