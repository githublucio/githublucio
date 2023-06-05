<?php
require 'koneksaun.php';
// aumenta estudante hahu
if(isset($_POST['aumentas'])){
    // $status = $_POST['statuss'];
    $nu = $_POST['nre'];
    $estu = $_POST['estudante'];
    $sex = $_POST['sexo'];
    $munisipiu = $_POST['distrito'];
    $no = $_POST['kontak'];
    $anu = $_POST['ano'];
    $inan = $_POST['mae'];
    $aman = $_POST['pai'];
    $fmoris = $_POST['fmoris'];
    $dmoris = $_POST['dmoris'];
    $idstatus = $_POST['statuss'];

    $aumentadatatama = mysqli_query($mysqli, "INSERT INTO t_estudante(nre, estudante, sexo, munisipio, contacto,id_ano, inan, aman, fatin_moris, data_moris, id_status) values ('$nu', '$estu', '$sex', '$munisipiu', '$no', '$anu', '$inan', '$aman', '$idstatus')");
      if($aumentadatatama){
        //  header('location: index.php?page=dados_estudante');

        } else{
            // echo 'la konsege !';
            // header('location:index.php?page=dados_estudante');
             }          
}



// aumenta estudante remata


      // aumenta docen hahu
        if(isset($_POST['aumentad'])){
            $iddocen =$_POST['idfuns'];
            $narandocen = $_POST['funs'];
            $gelar = $_POST['nivels'];
            $posisaun =$_POST['kargu'];
    

            $aumentadatatama = mysqli_query( $mysqli, "INSERT INTO t_docente(id_docente, naran_docente, gelar, posisao) values ('$iddocen', '$narandocen', '$gelar', '$posisaun')");
              if($aumentadatatama){
                 header('location: index.php?page=dados_docente');

                } else{
                     echo 'la konsege !';
                            header('location:index.php?page=dados_docente');
                     }          
            }
    // edit docent hahu
    if(isset($_POST['updatedocen'])){
    $idf = $_POST['idfn'];
    $naranfuns = $_POST['naranfn'];
    $nivestudu = $_POST['gelarfn'];
    $cargod = $_POST['kargufn'];
    $statusf = $_POST['statusfn'];
    $update = mysqli_query($mysqli,"update t_funs set naran_funs='$naranfuns', nivel_estudo='$nivestudu', cargo='$cargod', status='$statusf' where id_funs ='$idf'");
    if($update){
        header('location:index.php?page=dados_docente');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_docente');
    }
}

// aumenta docen hahu
if(isset($_POST['aumentad'])){
    $idfuns =$_POST['idfuns'];
    $naranfuns = $_POST['funs'];
    $nivels = $_POST['nivels'];
    $kargo =$_POST['kargu'];
    $statusd =$_POST['statusd'];

    $aumentadatatama = mysqli_query($mysqli, "INSERT INTO t_funs(id_funs, naran_funs, nivel_estudo, cargo, status) values ('$idfuns', '$naranfuns', '$nivels', '$kargo', '$statusd')");
      if($aumentadatatama){

         header('location:index.php?page=dados_docente');

        } else{
             echo 'la konsege !';
                    header('index.php?page=dados_docente');
             }          
    }