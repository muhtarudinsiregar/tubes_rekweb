<div class="col-md-3">
	<div class="col-md-12">
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand"><a href="#">Menu Pilihan</a></li>
				<li><a href="<?php echo site_url('pembelian_bahan_baku') ?>">Daftar Stok</a></li>
				<li><a href="<?php echo site_url('roti') ?>">Daftar Roti</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs" id="myTab">
				<li><a href="#panel_stok" data-toggle="tab">Stok Bahan</a></li>
				<li><a href="#panel_tambah" data-toggle="tab">Tambah Bahan</a></li>
				<li><a href="#panel_pembelian" data-toggle="tab">Pembelian Bahan</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="panel_stok">
					<div class="col-md-12 nav">
						<div class="row">
							<!-- <div class="col-md2 col-md-offset-10">
								
							</div> -->
							<div class="col-md-10">
								<?php if (isset($tampil_stok)) {

									?>
									<table class="table table-hover">
										<thead>
											<th>No</th>
											<th>Tanggal</th>
											<th>Nama Bahan</th>
											<th>Stok</th>
											<th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
										</thead>

										<tbody>
											<?php $no=$no+1; ?>
											
											<?php foreach ($tampil_stok->result() as $row) {

												?>
												<tr>
													<td><?php echo $no; ?></td>
													<td><?php echo $row->tanggal; ?></td>
													<td><?php echo $row->nama; ?></td>
													<td>
														<?php 
															echo $row->stok;
															 echo '&nbsp;';
															echo $row->satuan;
														?>
													</td>
													
													<td>
														<?php echo anchor('bahan_baku/edit_bahan_baku/'.$row->bahan_id.'', 'Edit','class="btn btn-info"'),'&nbsp;&nbsp;' ,anchor('bahan_baku/hapus_bahan_baku/'.$row->bahan_id.'','Hapus',array('onClick' => "return confirm('Anda Yakin Ingin Menghapus ".$row->nama."?')",'class'=>"btn btn-danger")); ?>
													</td>
														
												</tr>
												<?php $no++; } ?>	
											</tbody>
										</table>
										<?php } ?>
										<div class="">
											Halaman: <?php echo $link; ?>
										</div>
									</div>
								</div>
							</div>
				</div><!-- end div stok -->

				<div class="tab-pane" id="panel_tambah">
					<?php echo form_open('bahan_baku/tambah_nama_bahan', 'class="form-inline"','role="form"'); ?>
						<div class="col-md-12">
							<div class="row" id="tambah">
								<div class="col-md-10" id="bahan_baku">
									<div class="form-group">
										<label for="namabahan" class="control-label">Nama Bahan</label>
									</div>
									&nbsp;&nbsp;&nbsp;

									<div class="form-group">
										<input type="text" name="nama_bahan" class="form-control">
									</div>

									<div class="form-group">
										<input id="stok" type="number" name="jumlah" class="form-control" placeholder="Stok">
									</div>

									<!-- <div class="form-group">
										<select name="satuan" class="form-control">
											<option value="Biji">Biji</option>
											<option value="Kilogram">Kilogram</option>
											<option value="Gram">Gram</option>
											<option value="Liter">Liter</option>
											<option value="Botol">Botol</option>
										</select>
									</div> -->
								</div>


								</div><!-- end div tambah row -->
								<div class="col-md-10">
									<div class="form-group col-sm-offset-1">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
										<a href="" class="tambah_data">Tambah..</a>
									</div>
								</div>
								<br><br>
								<div class="col-md-10">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button class="btn btn-primary col-sm-offset-1">Submit</button>
								</div>
							</div><!-- end div tambah col-md-8 -->
							<?php echo form_close(); ?>
				</div><!-- end div tambah stok -->

				<div class="tab-pane" id="panel_pembelian">
					<?php echo form_open('pembelian_bahan_baku/tambah_bahan', 'class="form-horizontal"','role="form"'); ?>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-10 nav">
									<div class="form-group">
										<label for="bahan" class="col-sm-2 control-label">Nama Bahan</label>
										<div class="col-sm-3">
											<select name="id_bahan" class="form-control">
												<?php foreach ($bahan->result() as $row) {	
													?>
													<option value="<?php echo $row->id ?>"><?php echo $row->nama; ?></option>
												<?php }  ?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="stok" class="col-sm-2 control-label">Stok</label>
										<div class="col-sm-3">
											<input class="form-control" type="number" name="stok" required="true">
										</div>
									</div>

									<div class="form-group">
										<label for="stok" class="col-sm-2 control-label">Satuan</label>
										<div class="col-sm-2 	">
											<select name="satuan" class="form-control">
												<option value="Biji">Biji</option>
												<option value="Kilogram">Kilogram</option>
												<option value="Gram">Gram</option>
												<option value="Liter">Liter</option>
												<option value="Botol">Botol</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="stok" class="col-sm-2 control-label">Harga Beli Satuan</label>
										<div class="col-sm-3">
											<input class="form-control" type="number" name="harga" required="true">
										</div>
									</div>

									<div class="form-group">
										<label for="stok" class="col-sm-2 control-label">Tanggal Pembelian</label>
										<div class="col-sm-3">
											<input class="form-control" type="date" name="tanggal_pembelian" required="true">
										</div>
									</div>

									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary">Submit</button>	
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div><!-- end div tab panel -->
			</div><!-- end div tab content -->
		</div><!-- end div col-md-12 -->
	</div><!-- end of div.row -->
</div><!-- end of div.col-md-9-->









<!-- 	<div class="col-md-6">
		<form class="form-horizontal" role="form"  method="post" action="tambah_bahan_baku">
 					<legend>Halaman Login</legend>
					<div class="form-group" id="searchFields">
					    <div class="col-md-12">
					      <input type="text" class="form-control" id="regNr" placeholder="Username" value="<?php echo set_value('username') ?>"><br>
					    </div>
					</div>
					
					<span class=""><button type="submit" class="btn btn-primary">Simpan</button></span>

					<span class="addRegNr"><button type="button" class="btn btn-default">Tambah Bahan</button></span>

					
		</form>
	</div> -->
	

