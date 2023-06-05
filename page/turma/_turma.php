  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
                    <div class="col-sm-6">
                        <h6>Dados Turma</h6>
                    </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="index.php?page=dados_estudante">Estudante</a></li>
                            <li class="breadcrumb-item active"><a href="index.php?page=dados_docente">Docentes</a></li>
                            <li class="breadcrumb-item active"><a href="index.php?page=dados_materia">Materia</a></li>
                            <li class="breadcrumb-item active"><a href="index.php?page=dados_turma">Turma</a></li>
                            <li class="breadcrumb-item active"><a href="index.php?page=dados_ano">Ano</a></li>
                            <li class="breadcrumb-item active"><a href="index.php?page=dados_status">Status</a></li>
                            </ol>
                        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
             
              
               <div class="card-body">

                <h5 class="btn btn-primary btn-sm" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" >+ Novo Turma</h5>
        
             
                 <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Turma</th>
                    <th>Asaun</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php 

                                        //Ida ne query Default. Bainhira la loke pertama aplikasi le mk query ida ne
                                        // $x =1; 
                                        // $fotihotudadus = mysqli_query($conn, "select e.*, s.status as st FROM t_estudante e join t_status s on e.id_status=s.id_status order by e.nre desc");


                                        // //Ida ne pada saat Klik Button Filter, maka variable $fotihotudadus troka fali ba kraik ne line 168
                                        // if(isset($_POST['filter_data'])){

                                        //         $hahu = $_POST['data_hahu'];
                                        //         $remata = $_POST['data_remata'];

                                        //         if($hahu!=null && $remata!=null){
                                                
                                        //             $fotihotudadus = mysqli_query($conn, "select t.*, s.naran as nrn FROM tbl_stama t join tbl_stok s on t.idsasan=s.idsasan
                                        //             where date_format(t.data,'%Y-%m-%d')  between '".$hahu."' AND '".$remata."' order by t.idtama desc");

                                        //         } 
                                               
                                        // }
                                           $x =1; 
                                        $fotihotudadus = mysqli_query($mysqli, "select * FROM t_turma order by id_turma desc");
                                        
                                        while($data = mysqli_fetch_array($fotihotudadus)){
          
                                            $id_turma =$data['id_turma'];
                                            $turma =$data['turma'];
                                            
                                            
                                           
                                       
                                        ?>                                   

                                        <tr>
                                           <td align="center"><?=$x++;?></td>
                                            <td align="center"><?=  $turma;?></td>
                                            
                                                
                                                 <td align="center">
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=  $nre;?>">
                                                Edit
                                              </button>
                                              <input type="hidden" name="idnehamos" value="<?=$ids;?>">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$nre;?>">
                                                Del
                                              </button>
                                            </td>

                                        
                                        </tr>
                                       <?php

                                        };
                                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
			  
			  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	
	<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Aumenta Tinan Akademia</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container mt-3">
          <h2>Form Iput Tinan Akademia</h2>
          <form action="index.php?page=aumenta_ano" method="post">
            <div class="mb-3 mt-3">
             <div class="mb-3">
              <label for="funs">Tinan Akademika:</label>
              <input type="year" class="form-control" id="anoak" placeholder="Aumenta tinan akademika" name="anoak">
            </div>
            
          <button type="submit" class="btn btn-primary" name="addak">Submit</button>
          </form>
        </div>
       </div>
	   </div>
	   </div>
	   </div>
	   </div>