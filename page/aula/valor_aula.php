<br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                <div class="card">  
             <div class="card-header">
    <h5 class="fw-bold card-title">  <a href="index.php?page=dados_aula">Gestao Aula</a> / Aula</h5> 
              </div>    
             <div class="card-body">      
<?php
$id=$_GET['idaula'];
					
$admin=$mysqli->query("select * from t_aula e, t_ano a, t_materia m, t_semestre s, t_funs f, t_sala l where e.id_sala=l.id_sala and e.id_semestre=s.id_semestre and e.id_ano=a.id_ano and e.id_materia=m.id_materia and e.id_funs=f.id_funs and id_aula=$id");
while($m=mysqli_fetch_array($admin)){
 ?>
                 
<text class="fw-semibold"> Materia :  </text><?php echo $m['materia'];?> | <?php echo $m['sks'];?> Credito <br>
 <text class="fw-semibold">Docente : </text><?php echo $m['naran_funs'];?> <br>
 <text class="fw-semibold">Ano : </text><?php echo $m['ano'];?> | <?php echo $m['semestre'];?> <br>
 <text class="fw-semibold">Loron / Horas : </text><?php echo $m['loron'];?> / <?php echo $m['oras_hahu'];?> - <?php echo $m['oras_hahu'];?> OTL<br>
 <text class="fw-semibold">Turma / Sala : </text><?php echo $m['turma'];?> / <?php echo $m['numeru_sala'];?> | <?php echo $m['nome_sala'];?><br>
 <?php } ?>

<text class="breadcrumb float-sm-right fw-semibold card-title">
<a href="#"><h6>+ Estudante</h6></a>  &nbsp;&nbsp;| &nbsp;&nbsp;
<a href="#"><h6>Input Valor</h6> </a> &nbsp;&nbsp;| &nbsp;&nbsp;
<a href="#"><h6>Imprime Lista</h6> </a>&nbsp;
</text>
                <table class="display table table-bordered table-hover">
                 
                  <thead>
                  <tr>
                    <th  class="text-center">No</th>
                    <th  class="text-center">NRE</th>
                    <th>Nome Estudante</th>
                    <th  class="text-center">Valor Numeru</th>
                    <th  class="text-center">Valor Alfabeto</th>
                    <th  class="text-center">Observasaun</th>
                     <th  class="text-center">Asaun</th>
                  </tr>
                  </thead>
                  <tbody>
 <?php 
$no = 0;
$admin=$mysqli->query("select * from t_aula e, t_valor m, t_estudante n where e.id_aula=m.id_aula and m.nre=n.nre and e.id_aula=$id");
while($v=mysqli_fetch_array($admin)){
$no++;
?>
                  <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td class="text-center"> <?php echo $v['nre'];?></td>
                    <td><?php echo $v['estudante'];?></td>      
                    <td class="text-center"><?php echo $v['valor_numeru'];?></td>
                    <td class="text-center"> <?php echo $v['valor_alfa'];?></td>
                    <td> <?php echo $v['obs'];?></td>
                    <td  class="text-center">
                        <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .60rem;">Edit</button>
                        <button type="button" class="btn btn-danger" style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .60rem;">Drop</button>
                     </td>
                  </tr>
						<?php } ?>
                  </tbody>
              
                </table>

</div>
</div>
</div>
</div>
</div>
</section>