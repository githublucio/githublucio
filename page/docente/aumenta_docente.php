 <!-- // aumenta docen hahu -->
<?php

if(isset($_POST['aumentad'])){
    $idfuns =$_POST['idfuns'];
    $naranfuns = $_POST['funs'];
    $nivels = $_POST['nivels'];
    $kargo =$_POST['kargu'];
    $statusd =$_POST['statusd'];

    $aumentadatatama = mysqli_query($mysqli, "INSERT INTO t_funs(id_funs, naran_funs, nivel_estudo, cargo, status) values ('$idfuns', '$naranfuns', '$nivels', '$kargo', '$statusd')");
      if($aumentadatatama){

        echo "<script type='text/javascript'>document.location='index.php?page=dados_docente';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_docente');
             }          
    }

?>