   <br>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
             <div class="card-header">
                <h5 class="fw-bold card-title">Dados Estudante</h5>
              </div>    
             <div class="card-body">    
            
 
<a  data-bs-toggle="modal" data-bs-target="#myModal"><btn class="btn btn-primary btn-sm"> + Estudante</btn></a>  
<a href="#"> <btn class="btn btn-primary btn-sm">Imprimi Estudante</btn> </a>

<div><p></p></div>
                <table id="example1" class="table table-hover">
                 
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NRE</th>
                    <th>Nome Estudante</th>
                    <th>Sexo</th>
                    <th>Municipio</th>
                    <th>Contigente</th>
                    <th>Status</th>
                    <th>Asaunww</th>
					
                   
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
					$no = 0;
						$admin=$mysqli->query("select * from t_estudante e, t_ano a where e.id_ano=a.id_ano");
						while($m=mysqli_fetch_array($admin)){
							$no++;
				  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $m['nre'];?></td>      
                    <td><?php echo $m['estudante'];?></td>
                    <td> <?php echo $m['sexo'];?></td>
                    <td> <?php echo $m['munisipio'];?></td>
                    <td> <?php echo $m['ano'];?></td>
                    <td> <?php echo $m['status'];?></td>
                    <td>                            
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModaldetail<?=$id;?>">
                     Detail</button>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModaledit<?=$id;?>">
                     Edit</button>              
                    <input type="hidden" name="idnehamos" value="<?=$id;?>">
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$id;?>">
                     Del </button></td>
                    
                   
                  </tr>
                   <!-- The Modal -->
  <div class="modal fade" id="myModaldetail<?=$id_docente;?>">">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Dadus Detallu</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <p>Nre&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp <?=$m['nre'];?></p>
          <p>Naran Estudante&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp <?=$m['estudante'];?></p>
          <p>Sexo&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp    <?=$m['sexo'];?></p>
          <p>Munisipiu&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp    <?=$m['munisipio'];?></p>
          <p>Nu.Kontaktu&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp    <?=$statudocente;?></p>
          <p>Ano Akademika&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp<?=$m['ano'];?></p>
          <p>Inan&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp   <?=$m['munisipio'];?></p>
          <p>Aman&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp   <?=$m['munisipio'];?></p>
          <p>Fatin Moris&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp   <?=$m['munisipio'];?></p>
          <p>Data Moris&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp   <?=$m['munisipio'];?></p>
          <p>Regime&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp    <?=$m['munisipio'];?></p>
          <p>Status&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp    <?=$m['status'];?></p>
         
        </div>
       
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
						<?php } ?>
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