    <br>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
             <div class="card-header">
                <h5 class="fw-bold card-title">Dados Docente</h5>
              </div>    
             <div class="card-body">    
            
 
<a  data-bs-toggle="modal" data-bs-target="#myModal"><btn class="btn btn-primary btn-sm"> + Docente</btn></a>  
<a href="#"> <btn class="btn btn-primary btn-sm">Imprimi Docente</btn> </a>

<div><p></p></div>
            <table id="example1" class="table table-hover">
		  
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Naran Funsionariu</th>
                    <th>Nivel Estudu</th>
                    <th>Kargu</th>
                    <th>Status Funsionario</th>
                    <th>Asaun</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php 

                                                                        
                                         $x =1; 
                                        $fotihotudadus = mysqli_query($mysqli, "select * FROM t_funs order by id_funs desc");
                                        
                                        while($data = mysqli_fetch_array($fotihotudadus)){
          
                                            $id_docente =$data['id_funs'];
                                            $ndocente =$data['naran_funs'];
                                            $gelar =$data['nivel_estudo'];
                                            $kargo = $data['cargo'];
                                            $statudocente = $data['status'];
                                           
                                            
                                           
                                       
                                        ?>                                   

                                        <tr>
                                           <td align="center"><?=   $x++;?></td>
                                            <td align="center"><?=  $ndocente;?></td>
                                            <td align="center"><?=  $gelar;?></td>
                                            <td align="center"><?=  $kargo;?></td>
                                            <td align="center"><?=  $statudocente;?></td>
                                         
                                            
                                           
                                                
                                                 <td align="center">

                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detail<?=$id_docente;?>">
                                                Detail
                                              </button>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$id_docente;?>">
                                                Edit
                                              </button>
                                              <input type="hidden" name="idnehamos" value="<?=$ids;?>">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$id_docente;?>">
                                                Del
                                              </button>
                                            </td>

                                        
                                        </tr>
                                          <!-- Edit Modal -->
                                              <div class="modal fade" id="edit<?=$id_docente;?>">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                      
                                                             <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                      <h4 class="modal-title">Edit estudante</h4>
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                        
                                                                <!-- Modal body -->
                                                                <form action="index.php?page=update_docente" method="post">
                                                                    <div class="modal-body">
                                                                           <!-- <form method="post"> -->
                                                                      <!-- <div class="modal-body"> -->
                                                                          <input type="text" name="naranfn" value="<?=$ndocente;?>" class="form-control"><br>
                                                                          <input type="text" name="gelarfn" value="<?=$gelar;?>" class="form-control"><br>
                                                                           <input type="text" name="kargufn" value="<?=$kargo;?>" class="form-control"><br>
                                                                           <select type="text "id="statusd" name="statusfn" class="form-control">
                                                                              <option value="ativo">Ativo</option> 
                                                                              <option value="nao ativo">Nao Ativo</option> 
                                                                          </select><br>
                                                                           <input type="hidden" name="idfn" value="<?=$id_docente;?>">
                                                                          <button type="submit" class="btn btn-primary" name="updatedocen">Update</button>

                                                                    <!-- </div> -->
                                                                  </div>
                                                                </form>
                                                        
                                                        
                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                              
                                                </div>

                                                <!-- delete Modal -->
                                              <div class="modal fade" id="delete<?=$id_docente;?>">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                  
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                              <h4 class="modal-title">Delete Funsionario</h4>
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                    
                                                            <!-- Modal body -->
                                                            <form action="index.php?page=hamos_docente" method="post">
                                                                <div class="modal-body">
                                                                 Ita atu hamos funsionario <?=$ndocente;?>?<br><br><br>
                                                                 <input type="hidden" name="ndocente" value="<?=$ndocente;?>">
                                                                 <!-- <input type="hidden" name="idsasan" value="<?=$ids;?>"> -->
                                                                 <input type="hidden" name="idfuns" value="<?=$id_docente;?>">
                                                                 <button type="submit" class="btn btn-danger" name="hamosfun">Sim</button>

                                                                </div>
                                                            </form>
                                                    
                                                    
                                                    
                                                  </div>
                                                </div>
                                              </div>


                                                                                                                      
                                                
                                       

                                                <!-- The Modal -->
  <div class="modal fade" id="detail<?=$id_docente;?>">">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Dadus Detallu</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <p>Id Docente     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?=$id_docente;?></p>
          <p>Naran Docente  &nbsp&nbsp: <?=$ndocente;?></p>
          <p>Gelar Docente  &nbsp&nbsp&nbsp: <?=$gelar;?></p>
          <p>Kargu Docente  &nbsp&nbsp: <?=$kargo;?></p>
          <p>status Docente &nbsp&nbsp: <?=$statudocente;?></p>
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

                                       <?php

                                        };
                                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
   </div>
              <!-- /.card-body -->
            </div>


           <!-- //tabela remata -->

            </div>
          <!-- /.col-md-6 -->
         <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Aumenta dadus docente</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container mt-3">
          <h2>form iput docente</h2>
          <form action="index.php?page=aumenta_docente" method="post">
            <div class="mb-3 mt-3">
              <label for="idfuns">id_funs:</label>
              <input type="text" class="form-control" id="idfuns" placeholder="Hatama nre" name="idfuns">
            </div>
            <div class="mb-3">
              <label for="funs">funsionari:</label>
              <input type="text" class="form-control" id="funs" placeholder="hatama Naran docente" name="funs">
            </div>
            <div class="mb-3">
              <label for="nestudu">nivel estudu:</label>
              <input type="text" class="form-control" id="nivels" placeholder="hatama ita nia gelar" name="nivels">
            </div>
            <div class="mb-3">
              <label for="kargu">Kargu:</label>
              <input type="text" class="form-control" id="kargu" placeholder="hatama ita nia posisaun servisu" name="kargu">
            </div><div class="mb-3">
              <label for="statusd">status:</label>
              <select type="text "id="statusd" name="statusd" class="form-control">           
                  <option value="hili" disabled selected>hili status funsionario</option> 
                  <option value="ativo">Ativo</option> 
                  <option value="nao ativo">Nao Ativo</option> 
              </select>
            </div>
          <button type="submit" class="btn btn-primary" name="aumentad">Submit</button>
          </form>
        </div>
		</div>
		</div>
		</div>