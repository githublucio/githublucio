   <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
             <div class="card-header">
                 <h5 class="fw-bold card-title">  <a href="index.php?page=dados_aula">Gestao Aula</a> / Add Aula</h5> 
              </div>    
<!-- Card Header-->
<div class="card-body">     


<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

<div class="form-group">
	<label for="selector1" class="col-sm-3 control-label">Docente</label>
	<div class="col-sm-8">
	<select name="deocente" id="selector1" class="form-control1" required>
				<option  value="">- Hili Docente -</option>
				<?php
$admin=$mysqli->query("select * from t_funs where status='ativo'");
while($m=mysqli_fetch_array($admin)){
				echo"<option value='$m[id_funs]'>$m[naran_funs]</option>";
				}
				?>
	</select></div>
</div>
	

<div class="form-group">
	<label for="selector1" class="col-sm-3 control-label">Materia</label>
	<div class="col-sm-8">
	<select name="materia" id="selector1" class="form-control1" required>
				<option  value="">- Hili Materia -</option>
				<?php
$admin=$mysqli->query("select * from t_materia m, t_plano p where m.id_plano=p.id_plano order by materia asc");
while($m=mysqli_fetch_array($admin)){
				echo"<option value='$m[id_materia]'>$m[plano] | $m[materia]</option>";
				}
				?>
	</select></div>
	</div>   


<div class="form-group">
	<label for="selector1" class="col-sm-3 control-label">Ano</label>
	<div class="col-sm-8">
	<select name="ano" id="selector1" class="form-control1" required>
				<option  value="">- Hili Ano -</option>
				<?php
$admin=$mysqli->query("select * from t_ano order by id_ano desc");
while($m=mysqli_fetch_array($admin)){
				echo"<option value='$m[id_ano]'>$m[ano]</option>";
				}
				?>
	</select></div>
	</div>
	
<div class="form-group">
	<label for="selector1" class="col-sm-3 control-label">Semestre</label>
	<div class="col-sm-8">
	<select name="semestre" id="selector1" class="form-control1" required>
				<option  value="">- Hili semestre -</option>
				<?php
$admin=$mysqli->query("select * from t_semestre");
while($m=mysqli_fetch_array($admin)){
				echo"<option value='$m[id_semestre]'>$m[semestre]</option>";
				}
				?>
	</select></div>
	</div>
	

<div class="form-group">
	<label for="selector1" class="col-sm-3 control-label">Sala</label>
	<div class="col-sm-8">
	<select name="sala" id="selector1" class="form-control1" required>
				<option  value="">- Hili Sala -</option>
				<?php
$admin=$mysqli->query("select * from t_sala order by id_sala asc");
while($m=mysqli_fetch_array($admin)){
				echo"<option value='$m[id_sala]'>$m[numeru_sala] | $m[nome_sala]</option>";
				}
				?>
	</select></div>
	</div>

    	<div class="form-group">
	<label for="selector1" class="col-sm-3 control-label">Turma</label>
	<div class="col-sm-8">
	<select name="turma" id="selector1" class="form-control1" required>
	<option value="" selected>- Turma -</option>
	<option value="A">A</option>
	<option value="B">B</option>
    <option value="B">C</option>
    <option value="B">D</option>
    <option value="B">E</option>
	</select></div>
	</div>
	


	<div class="form-group">
	<label for="selector1" class="col-sm-3 control-label">Loron</label>
	<div class="col-sm-8">
	<select name="loron" id="selector1" class="form-control1" required>
	<option value="" selected>- Loron -</option>
	<option value="A">Segunda</option>
	<option value="B">Terca</option>
    <option value="B">Quarta</option>
    <option value="B">Quinta</option>
    <option value="B">Sexta</option>
	</select></div>
	</div>


    <div class="form-group">
	<label class="col-sm-3 control-label">Horas Comesa</label>
	<div class="col-sm-8">
	<input type="text" class="form-control1" name="comesa" id="focusedinput" maxlength='5' placeholder="00:00" required>
	</div>
	</div>

    <div class="form-group">
	<label class="col-sm-3 control-label">Horas Remata</label>
	<div class="col-sm-8">
	<input type="text" class="form-control1" name="remata" id="focusedinput" maxlength='5' placeholder="00:00" required>
	</div>
	</div>


	



	<!-- Butaun submit formulario -->
			<div class="control-group">
				<div class="controls"><center>
				<button name="submit" type="submit" class="btn btn-danger"><i class="icon-save icon-large"></i>&nbsp;<b>Cancel</button>
                <button name="submit" type="submit" class="btn btn-primary"><i class="icon-save icon-large"></i>&nbsp;<b>Guarda</button></center>
				</div>
			</div>
</form> </div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
           </div>



          
           
        </div> 
 </div> 
  </div> 
   </div> 
    </div> 
    </section>
