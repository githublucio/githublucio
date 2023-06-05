  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dadus Geral</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dadus Geral</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabela 1 Dadus Geral INCT</h3><br>
              
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                <i class = "fa fa-add"> Aumenta Dadus </i>
                </button>
				 <a href="page/dadus_geral/export.php">
                <button type="button" class="btn btn-danger" >
                  <i class = "fa fa-print"> Export Data </i>
                </button>
                </a>
				<a href="index.php?page=form_import_dr">
                <button type="button" class="btn btn-success">
                <i class = "fa fa-save"> Import Data </i>
                </a>
                </button>
				</div>
              <!-- /.card-header -->
              <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Naran Kompletu</th>
                    <th>Posisaun</th>
                    <th>Instituisaun/Universidade</th>
					<th>No Telf.</th>
					<th>Email</th>
					<th>Asaun</th>
					<th class="rabus"></th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
					$no = 0;
						$admin=$mysqli->query("SELECT * FROM dadus");
						while($m=mysqli_fetch_array($admin)){
							$no++;
				  ?>
                  <tr> 
				  
                    <td><?php echo $no; ?></td>
                    <td><?php echo $m['naran'];?></td>      
                    <td><?php echo $m['posisaun'];?></td>
                    <td> <?php echo $m['instituisaun'];?></td>
					 <td><?php echo $m['telf'];?></td> 
					  <td><?php echo $m['email'];?></td> 
					<td>  <a href="index.php?page=edit_dadus&kode=<?php echo $m['id'];?>">
                          <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="index.php?page=delete_dadus&kode=<?php echo $m['id'];?>" onclick="return confirm('yakin akan menghapus data?')">
                          <button type="button" class="btn btn-danger"><i class="fa fa-edit"></i></button>
                   </td>
				    <td class="rabus">
                          <?php
                            $kode = "pt.adminlte/".$m['id']."/".$m['naran']."";
                            require_once('assets/qrcode/qrlib.php');
                            QRcode::png("$kode","kode".$no.".png","M", 2,2);
                          ?>
                         
                        </td>
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

<!-- modal form tambah data -->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Formulario Aumenta Dadus</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<div class="row">
            <div class="modal-body">
              <form role="form" method="post" action="index.php?user_act" enctype="multipart/form-data">
                <form action="user_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group">
				<label>Kontak :</label>
				<input type="number" class="form-control" placeholder="Masukkan Kontak" name="kontak" required="required">
			</div>
			<div class="form-group">
				<label>Alamat :</label>
				<textarea class="form-control" name="alamat" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
          </div>
          <!-- /.modal-content -->