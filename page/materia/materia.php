  <br>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
             <div class="card-header">
                <h5 class="fw-bold card-title">Dados Materia</h5>
              </div>    
             <div class="card-body">    
            
 
<a  data-bs-toggle="modal" data-bs-target="#myModal"><btn class="btn btn-primary btn-sm"> + Materia</btn></a>  
<a href="#"> <btn class="btn btn-primary btn-sm">Imprimi Materia</btn> </a>

<div><p></p></div>
 <table id="example1" class="table table-hover">
					<thead>
                  <tr>
                    <th>No</th>
                    <th>id</th>
                    <th>Materia</th>
                    <th>SKS</th>
                    <th>Plano</th>
                    <th>Asaun</th>
                  </tr>
                  </thead>
                  <tbody>
               <?php                                                                       
                     $x =1; 
                   $fotihotudadus = mysqli_query($mysqli, "select m.*, p.plano as pl FROM t_materia m join t_plano p on m.id_plano=p.id_plano order by id_materia desc");
                    
                    while($data = mysqli_fetch_array($fotihotudadus)){

                        $id_plano =$data['id_plano'];
                        $id_materia =$data['id_materia'];
                        $materia =$data['materia'];
                        $sks =$data['sks'];
                        $plano = $data['pl'];   
                   
                        ?>                                   

                          <tr>
                             <td><?=$x++;?></td>
                             <td><?=$id_materia;?></td>
                              <td><?=$materia;?></td>
                              <td><?=$sks;?></td>
                              <td><?=$plano;?></td>
                             
                                  
                                   <td>
                              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$id_materia;?>">
                                  Edit
                                </button>
                                <input type="hidden" name="idnehamos" value="<?=$id_materia;?>">
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$id_materia;?>">
                                  Del
                                </button>
                              </td>

                          
                          </tr>

                           <!-- Edit Modal -->
              <div class="modal fade" id="edit<?=$id_materia;?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                             <!-- Modal Header -->
                                <div class="modal-header">
                                      <h4 class="modal-title">form edit materia</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                        
                                <!-- Modal body -->
                                <form action="index.php?page=update_materia" method="post">
                                    <div class="modal-body">
                                           <!-- <form method="post"> -->
                                      <!-- <div class="modal-body"> -->
                                          <label for="materia">Materia:</label>
                                          <input type="text" id="materia_" name="nmateria" value="<?=$materia;?>" class="form-control"><br>
                                          <label for="sks">Sks:</label>
                                          <input type="number" id="sks_" name="sks" value="<?=$sks;?>" class="form-control"><br>
                                          <label for="idplanu">plano:</label>
                                         <select class="form-control select2 select2-danger" id="plnu" name="planu" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                          <?php 

                                              $plano = mysqli_query($mysqli, "select * FROM t_plano");
                                                            
                                              while($data = mysqli_fetch_array($plano)){
                                                echo "<option value='".$data['id_plano']."'>".$data['plano']."</option>";
                                              }
                                           
                                           ?>                      
                                        </select> <br>
                                           <input type="hidden" name="idmateria" value="<?=$id_materia;?>">
                                           <input type="hidden" name="idplano" value="<?=$id_plano;?>"> 
                                          <button type="submit" class="btn btn-primary" name="updatema">Update</button>

                                    <!-- </div> -->
                                  </div>
                                </form>                    
                        
                            </div>
                        </div>
                    </div>           

                </div> 
                <!-- delete Modal -->
                <div class="modal fade" id="delete<?=$id_materia;?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Materia</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                      
                              <!-- Modal body -->
                              <form method="post">
                                  <div class="modal-body">
                                   Ita atu hamos funsionario <?=$materia;?>?<br><br><br>
                                   <input type="hidden" name="idmateria" value="<?=$id_materia;?>">
                                   <button type="submit" class="btn btn-danger" name="hamomateria">Sim</button>

                                  </div>
                              </form>
                      
                      
                      
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
			   </div>
			</div>