    
    <br>
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                 <div class="card">  
             <div class="card-header">
    <h5 class="fw-bold card-title">Relatorio Estuandante Ativo no la Ativo</h5> 
              </div>    
             <div class="card-body">      
                  
<table id="example1" class="table table-hover">
<thead>
<tr>
                 <th>No</th>
                    <th>Materia</th>
                    <th>Credito</th>
                    <th>Docente</th>
                    <th>Semestre</th>
                    <th>Ano</th>
                    <th>Loron</th>
                    <th>Horas</th>
                    <th>Sala</th>
                    
  </tr></thead><tbody>
<?php
$admin=$mysqli->query("select * from t_aula e, t_ano a, t_materia m, t_semestre s, t_funs f, t_sala l where e.id_sala=l.id_sala and e.id_semestre=s.id_semestre and e.id_ano=a.id_ano and e.id_materia=m.id_materia and e.id_funs=f.id_funs");
$nu=1;
while($r=mysqli_fetch_array($admin)) {

echo "
<tr>
<td width=\"10\">$nu</td>
<td><a href='?page=detail_aula&idaula=$r[id_aula]'>$r[materia]</a></td>
<td class='text-center'>$r[sks]</td>
<td>$r[naran_funs]</td>
<td>$r[semestre]</td>
<td>$r[ano]</td>
<td>$r[loron]</td>
<td>$r[oras_hahu] - $r[oras_remata]</td>
<td>$r[numeru_sala] | $r[nome_sala]</td>
</tr> ";
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