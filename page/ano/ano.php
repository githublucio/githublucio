  <br>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
             <div class="card-header">
                <h5 class="fw-bold card-title">Dados Ano</h5>
              </div>    
             <div class="card-body">    
            
 
<a  data-bs-toggle="modal" data-bs-target="#myModal"><btn class="btn btn-primary btn-sm"> + Ano</btn></a>  
<a href="#"> <btn class="btn btn-primary btn-sm">Imprimi Ano</btn> </a>

<div><p></p></div>
                <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Ano</th>
                    <th>Asaun</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php 
                   $x =1; 
              $fotihotudadus = mysqli_query($mysqli, "select * FROM t_ano order by id_ano desc");
              
              while($data = mysqli_fetch_array($fotihotudadus)){

                  $id_ano =$data['id_ano'];
                  $ano =$data['ano'];
              ?>                                   

                  <tr>
                     <td align="center"><?=$x++;?></td>
                     <td align="center"><?=$ano;?></td>                    
                     <td align="center">
                     <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$id_ano;?>">
                          Edit
                        </button>
                      <input type="hidden" name="idano" value="<?=$id_ano;?>">
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$id_ano;?>">
                          Del
                        </button>
                      </td>
                </tr>
                <!-- Edit Modal -->
                  <div class="modal fade" id="edit<?=$id_ano;?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                                 <!-- Modal Header -->
                                    <div class="modal-header">
                                          <h4 class="modal-title">Edit Tinan</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                            
                                    <!-- Modal body -->
                                    <form action="index.php?page=update_ano" method="post">
                                        <div class="modal-body">
                                           <label for="tinan">Tinan Akademika:</label>
                                                <!-- <select type="number"id="anoak" name="anoaka" class="form-control">           
                                                    <option value="hili" disabled selected>Hili Tinan akademika</option> 
                                                    <option value="ativo">2015</option> 
                                                    <option value="ativo">2016</option> 
                                                    <option value="ativo">2017</option> 
                                                    <option value="ativo">2018</option> 
                                                    <option value="ativo">2019</option> 
                                                    <option value="ativo">2020</option> 
                                                    <option value="ativo">2021</option> 
                                                    <option value="ativo">2022</option> 
                                                    <option value="ativo">2023</option> 
                                                    <option value="ativo">2024</option> 
                                                    <option value="ativo">2025</option> 
                                                     
                                                </select> -->
                                         <input type="year" name="anoaka" value="<?=$ano;?>">
                                         <input type="hidden" name="idanot" value="<?=$id_ano;?>">
                                         <button type="submit" class="btn btn-primary" name="updateta">Update</button>

                                        </div>
                                    </form>
                            
                            
                            
                                </div>
                            </div>
                        </div>
                  
                    </div>

                    <!-- delete Modal -->
                  <div class="modal fade" id="delete<?=$id_ano;?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Delete Tinan Akademika</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                        
                                <!-- Modal body -->
                                <form action="index.php?page=hamos_ano" method="post">
                                    <div class="modal-body">
                                     Ita atu hamos tinan  <?=$ano;?>?<br><br><br>
                                     <input type="hidden" name="anoak" value="<?=$ano;?>">
                                     <!-- <input type="hidden" name="idsasan" value="<?=$ids;?>"> -->
                                     <input type="hidden" name="idano" value="<?=$id_ano;?>">
                                     <button type="submit" class="btn btn-danger" name="hamostk">Sim</button>

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
	   </div>