<?php
     if(isset($_POST['updates'])){
        $id = $_POST['ide'];
        $nree = $_POST['nree'];
        $naran = $_POST['narane'];
        $sexo = $_POST['sexo'];
        $munisipiu = $_POST['distrito'];
        $kontak = $_POST['kontak'];
        $tinanakd = $_POST['tinanakd'];
        $inan = $_POST['inan'];
        $aman = $_POST['aman'];
        $fatinm = $_POST['fatinm'];
        $dmoris = date('Y-m-d', strtotime($_POST['dmoris']));
        $regim = $_POST['regim'];
        $status = $_POST['statuse'];

         

        //echo $nree." ".$naran." ".$sexo." ".$munisipiu." ".$kontak." ".$tinanakd." ".$inan." ".$aman." ".$fatinm." ".$dmoris." ".$regim." ".$status; return false;
        //NRE unik la presija update, karik salah hapus input foun deit
           
        $update = mysqli_query($mysqli,"update tbl_estudante2 set estudante='$naran', sexo='$sexo', munisipio='$munisipiu', contacto='$kontak', inan='$inan', aman='$aman', fatin_moris='$fatinm', data_moris='$dmoris', regime='$regim', id_ano='$tinanakd', id_status='$status' where id='$id'");
         if($update){
           echo "<script type='text/javascript'>document.location='index.php?page=dados_estudante';</script>";
        // header('location:');
    }else {
        echo 'la konsege';
        header('location:index.php?page=dados_estudante');
        }
    }

?>