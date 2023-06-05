  <br>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
             <div class="card-header">
                <h5 class="fw-bold card-title">Dados Status</h5>
              </div>    
             <div class="card-body">    
            
 
<a  data-bs-toggle="modal" data-bs-target="#myModal"><btn class="btn btn-primary btn-sm"> + Status</btn></a>  
<a href="#"> <btn class="btn btn-primary btn-sm">Imprimi Status</btn> </a>

<div><p></p></div>
                <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Estatus</th>
                    <th>Asaun</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                         $x =1; 
                      $fotihotudadus = mysqli_query($mysqli, "select * FROM t_status order by id_status desc");
                      
                      while($data = mysqli_fetch_array($fotihotudadus)){

                          $id_status =$data['id_status'];
                          $status =$data['status'];

                     
                      ?>                                   

                        <tr>
                          <td align="center"><?=$x++;?></td>
                          <td align="center"><?=  $status;?></td>                                         
                          <td align="center">
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$id_status;?>">
                                Edit
                            </button>
                              <input type="hidden" name="idstatus" value="<?=$id_status;?>">
                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$id_status;?>">
                                Del
                              </button>
                            </td>                                        
                        </tr>
						 <!-- delete Modal -->
                                              <div class="modal fade" id="delete<?=$id_status;?>">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                  
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                              <h4 class="modal-title">Delete Estatus</h4>
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                    
                                                            <!-- Modal body -->
                                                            <form action="index.php?page=hamos_status" method="post">
                                                                <div class="modal-body">
                                                                 Ita atu hamos Estatus <?=$status;?>?<br><br><br>
                                                                 <input type="hidden" name="idstatus" value="<?=$status;?>">
                                                                 <button type="submit" class="btn btn-danger" name="hamosstatus">Sim</button>

                                                                </div>
                                                            </form>
                                                    
                                                    
                                                    
                                                  </div>
                                                </div>
                                              </div>
						
                        <!-- Edit Modal -->
                        <div class="modal fade" id="edit<?=$id_status;?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                
                                       <!-- Modal Header -->
                                          <div class="modal-header">
                                                <h4 class="modal-title">Edit Status</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                  
                                          <!-- Modal body -->
                                          <form action="index.php?page=update_status" method="post">
                                              <div class="modal-body">
                                                <label for="statuses">status:</label>
                                                <select type="text "id="statuses" name="statuses" class="form-control">           
                                                    <option value="hili" disabled selected>hili status Estudante</option> 
                                                    <option value="ativo">Transferensia Tama</option> 
                                                    <option value="nao ativo">Tranferensia sai</option> 
                                                    <option value="nao ativo">Desistiu</option> 
                                                    <option value="nao ativo">Gradua</option> 
                                                    <option value="nao ativo">Ativo</option> 
                                                </select>
                                               <input type="hidden" name="idstatus" value="<?=$status;?>">
                                               <button type="submit" class="btn btn-primary" name="updatest">Update</button>

                                              </div>
                                          </form>
                                  
                                  
                                  
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


           <!-- //tabela remata -->

            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    
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