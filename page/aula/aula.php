  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Aula</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index.php?page=dados_estudante">Estudante</a></li>
              <li class="breadcrumb-item active"><a href="index.php?page=plano_estudante">Plano Estudante</a></li>
              <li class="breadcrumb-item active"><a href="index.php?page=plano2_estudante">Plano2 Estudante</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
              Aumenta aluno
            </button>
            
			  
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
               
                  <thead>
                  <tr>
                    <th>No</th>
                    <!-- <th>id</th> -->
                    <th>Nre</th>
                    <th>Naran</th>
                    <th>Sexo</th>
                    <th>Distrito</th>
                    <th>Nu. kontaktu</th>
                    <th>Tinan akademia</th>
                    <th>Mae</th>
                    <th>Pai</th>
                    <th>Fatin Moris</th>
                    <th>Data Moris</th>
                    <th>Regime</th>
                    <th>Status</th>
                    <th>Asaun</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php 

                      $x =1; 
                                        
                      $fotihotudadus = mysqli_query($mysqli, "select e.id, e.nre, e.estudante, e.sexo, e.munisipio, e.contacto, e.id_ano, a.ano, e.inan, e.aman, e.fatin_moris, e.data_moris, e.regime, e.id_status, s.status FROM tbl_estudante2 e JOIN tbl_tinanakademiku a ON e.id_ano=a.id_ano JOIN t_status s ON e.id_status=s.id_status order by e.id asc");
                      // tbl_tinanakademiku
                                        
                      while($data = mysqli_fetch_array($fotihotudadus)){
                          $id = $data['id'];
                          $nre = $data['nre'];
                          $idano = $data['id_ano'];
                          $naran = $data['estudante'];
                          $sexo = $data['sexo'];
                          $dist = $data['munisipio'];
                          $kontak = $data['contacto'];
                          $ano = $data['ano'];
                          $id_ano = $data['id_ano'];
                          $inan = $data['inan'];
                          $aman = $data['aman'];
                          $fmoris = $data['fatin_moris'];
                          $dmoris= $data['data_moris'];
                          $regime= $data['regime'];
                          $status= $data['status'];
                          $id_status=$data['id_status'];
                           // echo $id."";  return false;
                       
                       ?>                                   

                                        <tr>
                                           <td align="center"><?=$x++;?></td>
                                           <!-- <td align="center"><?=$id;?></td> -->
                                            <td align="center"><?=$nre;?></td>
                                            <td align="center"><?=$naran;?></td>
                                            <td align="center"><?=$sexo;?></td>
                                            <td align="center"><?=$dist;?></td>
                                            <td align="center"><?=$kontak;?></td>
                                            <td align="center"><?=$ano;?></td>
                                            <td align="center"><?=$inan;?></td>
                                            <td align="center"><?=$aman;?></td>
                                            <td align="center"><?=$fmoris;?></td>
                                            <td align="center"><?=$dmoris;?></td>
                                            <td align="center"><?=$regime;?></td>
                                            <td align="center"><?=$status;?></t>
                                                
                                                 <td align="center">
                                         
                                           <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModaledit<?=$id;?>">
                                            Edit
                                          </button>
                                                   
                                       <input type="hidden" name="idnehamos" value="<?=$id;?>">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$id;?>">
                                            Del
                                              </button>
                                            </td>

                                        
                                        </tr>

                                          <!-- delete hahu -->
     <div class="modal fade" id="delete<?=$id;?>">
  <div class="modal-dialog">
    <div class="modal-content">
    
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Delete Estudante</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      
              <!-- Modal body -->
              <form action="funtion.php" method="post">
                  <div class="modal-body">
                   <input type="hidden" id="ides" name="ide" value="<?=$id;?>">
                   Ita atu hamos estudante <?=$naran;?>? husi tabela<br><br><br>
                   <button type="submit" class="btn btn-danger" name="hamosstudante">Sim</button>

                  </div>
              </form>      
      
    </div>
  </div>
</div>

                                        <!-- edit estudante hahu -->
      <div class="modal fade" id="myModaledit<?=$id;?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <div class="card-title"><h4 >Edit Dadus Estudante</h4></div>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container mt-3">
              <form action="funtion.php" method="post">
                  <!-- SELECT2 EXAMPLE -->             
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <!-- <input type="hidden" id="id" name="id" readonly> --> 
                        <label for="nre">Nre:</label>
                        <input type="text" class="form-control" id="nre" name="nree" value="<?=$nre;?>"readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="narane">Naran:</label>
                        <input type="text" class="form-control" id="naran" name="narane" value="<?=$naran;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="sexo">hili sexo:</label>
                        <select class="form-control select2 select2-danger" id="sexu" name="sexo" value="<?=$sexo;?>"data-dropdown-css-class="select2-danger" style="width: 100%;">
                          <option value="Mane">Mane</option>
                          <option value="Feto">Feto</option>
                        </select>  
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="distrito">Hili Distrito:</label>
                        <select class="form-control select2 select2-danger" id="distritu" name="distrito" value="<?=$dist;?>" data-dropdown-css-class="select2-danger" style="width: 100%;">
                          <option value="lospalos">Lospalos</option>
                          <option value="baucau">Baucau</option>
                          <option value="manatutu">Manatutu</option>
                          <option value="viqueque">Viqueque</option>
                          <option value="dili">Dili</option>
                          <option value="ermera">Ermera</option>
                          <option value="liquica">Liquica</option>
                          <option value="suai">Suai</option>
                          <option value="manufahi">Manufahi</option>
                          <option value="aileu">Aileu</option>
                          <option value="ainaro">Ainaro</option>
                          <option value="bobonaro">Bobonaro</option>
                          <option value="foecusse">OE-cusse</option>
                          <option value="atauru">Atauru</option>                      
                        </select>  
                      </div>                                                                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="kontak">Nu. Kontaktu:</label>
                        <input type="text" class="form-control" id="kontaktu" name="kontak" value="<?=$kontak;?>"placeholder="prinse nu.kontaktu">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label for="tinanak">Tinan Akademiku:</label>
                          <select class="form-control select2 select2-danger" id="tinanakd_" name="tinanakd" value="<?=$ano;?>"data-dropdown-css-class="select2-danger" style="width: 100%;">
                            <?php 
               
                                $ano = mysqli_query($conn, "select * FROM tbl_tinanakademiku");
                                              
                                while($data = mysqli_fetch_array($ano)){
                                  echo "<option value='".$data['id_ano']."'>".$data['ano']."</option>";
                                }
                             
                             ?>                      
                          </select> 
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="inan">Mae:</label>
                        <input type="text" class="form-control" id="inan_" name="inan" value="<?=$inan;?>"placeholder="priese mae nia naran">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="pai">Pai:</label>
                        <input type="text" class="form-control" id="aman_" name="aman" value="<?=$aman;?>" placeholder="priese pai nia naran">
                      </div>
                    </div>                
                  </div>
                  <div class="row"> 
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="fmoris">Fatin Moris:</label>
                        <input type="text" class="form-control" id="fatinm_" name="fatinm" value="<?=$fmoris;?>"placeholder="priense fatin moris">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="data">Data Moris:</label>
                        <input type="date" class="form-control" id="dmoris_" name="dmoris" value="<?=$dmoris;?>"placeholder="priense data moris">
                      </div>   
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="regime">Regime:</label>
                        <input type="text" class="form-control" id="regim_" name="regim" value="<?=$regime;?>"placeholder="priense regime">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="statuse"> hili Status:</label>
                        <select class="form-control select2 select2-danger" id="status_" name="statuse" value="<?=$status;?>">
                            <?php 
               
                                $status = mysqli_query($conn, "select * FROM t_status");
                                              
                                while($data = mysqli_fetch_array($status)){
                                  echo "<option value='".$data['id_status']."'>".$data['status']."</option>";
                                } 
                             
                             ?>                      
                        </select>  
                      </div>      
                    </div>  
                  </div>
                  <input type="hidden" name="ide" value="<?=$id;?>">
                  <button type="submit" class="btn btn-primary" name="updates">update</button>
              </form>
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
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	
	 