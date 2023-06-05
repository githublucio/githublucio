
    <br>
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
             <div class="card-header">
                <h5 class="fw-bold card-title">Gestao Aula</h5>
              </div>    
             <div class="card-body">    
            
 
<a href="index.php?page=add_aula"><btn class="btn btn-primary btn-sm"> + Aula</btn></a>  
<a href="#"> <btn class="btn btn-primary btn-sm">Imprimi Horario</btn> </a>

<div><p></p></div>



<!-- Button Excel - Start --------------
<div class="dt-buttons btn-group flex-wrap"> 
<button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button>
</div>
------------ Button Excel - End -->

<table id="example1" class="table table-hover">
<thead>
<tr>
                 <th>No</th>
                    <th>Materia</th>
                    <th class='text-center'>Credito</th>
                    <th>Docente</th>
                    <th class='text-center'>Semestre</th>
                    <th class='text-center'>Ano</th>
                    <th class='text-center'>Loron</th>
                    <th class='text-center'>Horas</th>
                    <th class='text-center'>Turma</th>
                    <th class='text-center'>Sala</th>
                    <th class='text-center'>Asaun</th>
  </tr></thead><tbody>
<?php
$admin=$mysqli->query("select * from t_aula e, t_ano a, t_materia m, t_semestre s, t_funs f, t_sala l where e.id_sala=l.id_sala and e.id_semestre=s.id_semestre and e.id_ano=a.id_ano and e.id_materia=m.id_materia and e.id_funs=f.id_funs");
$nu=1;
while($r=mysqli_fetch_array($admin)) {

echo "
<tr>
<td width=\"10\">$nu</td>
<td><a href='?page=valor_aula&idaula=$r[id_aula]'>$r[materia]</a></td>
<td class='text-center'>$r[sks]</td>
<td>$r[naran_funs]</td>
<td class='text-center'>$r[semestre]</td>
<td class='text-center'>$r[ano]</td>
<td>$r[loron]</td>
<td>$r[oras_hahu]-$r[oras_remata]</td>
<td class='text-center'>$r[turma]</td>
<td>$r[numeru_sala] | $r[nome_sala]</td>
";
?>
<td  class="text-center">
    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .60rem;">Edit</button>
    <button type="button" class="btn btn-danger" style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .60rem;">Del</button>
</td>

</tr> 
<?php
echo "
";
$nu++;
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>