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
<a href="#"> <btn class="btn btn-primary btn-sm">Dadus detaillo Docente</btn> </a>

<div><p></p></div>
            <table id="example1" class="table table-hover">
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
  
                                           <tr> <td>Naran :'.<?=  $ndocente;?>.' </td></tr>
                                            <tr> <td>Gelar :'.<?=  $gelar;?>.'</td></tr>
                                             <tr> <td>Kargu :'.<?=  $kargo;?>.'</td></tr>
                                              <tr> <td>Status Docente :'.<?=  $statudocente;?>.'</td></tr>
                                            <p></td>
                                            <p></td>
                                            <p></td>

</tr>

                                               
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
