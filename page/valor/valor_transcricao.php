  <!-- Content Header (Page header) -->
   <br>
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                 <div class="card">  
             <div class="card-header">
    <h5 class="fw-bold card-title">Valor Transcricao</h5> 
              </div>    
             <div class="card-body">      
                <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                     <th>No</th>
                    <th>NRE</th>
                    <th>Nome Estudante</th>
                    <th>Sexo</th>
                    <th>Municipio</th>
                   
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
					$no = 0;
						$admin=$mysqli->query("SELECT * FROM t_estudante");
						while($m=mysqli_fetch_array($admin)){
							$no++;
				  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $m['nre'];?></td>      
                    <td><?php echo $m['estudante'];?></td>
                    <td> <?php echo $m['sexo'];?></td>
                    <td> <?php echo $m['munisipio'];?></td>
                    
                  </tr>
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