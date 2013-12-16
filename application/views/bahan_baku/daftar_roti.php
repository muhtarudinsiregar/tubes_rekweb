<div class="col-md-3">
	<div class="col-md-12">
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand"><a href="#">Menu Pilihan</a></li>
				<li><a href="<?php echo site_url('users') ?>">Daftar Stok</a></li>
				<li><a href="<?php echo site_url('#') ?>">Daftar Roti</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs" id="myTab">
				<li><a href="#panel_stok" data-toggle="tab">Stok Roti</a></li>
				<li><a href="#panel_tambah" data-toggle="tab">Tambah Roti</a></li>
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
											<th>Aksi</th>
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
													
													<td><?php echo anchor('url', 'Edit'); ?></td>
														
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
					<?php echo form_open('users/tambah_bahan', 'class="form-horizontal"','role="form"'); ?>
					<div class="col-md-12">
						<div class="row" id="tambah">
							<div class="col-md-10 nav" id="bahan_baku">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Nama Roti</label>
									<div class="col-sm-4">
										<input name="nama_roti" type="text" class="form-control" required="true">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Nama Bahan</label>
									<div class="col-sm-3">
										<select name="nama_bahan" id="" class="form-control">
											<option value=""></option>
										</select>

									</div>

									<div class="form-group">
										<div class="col-sm-2">
											<input type="text" class="form-control" placeholder="jumlah">
										</div>
										<button class="btn btn-primary">+</button>
									</div>
									
								</div>
								
								<div class="form-group">
									<div class="col-sm-2 col-sm-offset-2">
										<button class="btn btn-primary" type="submit">Submit</button>
									</div>
								</div>


							</div>
						</div><!-- end div tambah col-md-8 -->
					<?php echo form_close(); ?>
					</div><!-- end div tambah row -->
				</div><!-- end div tambah stok -->
			</div><!-- end div tab content -->
		</div><!-- end div col-md-12 -->
	</div><!-- end of div.row -->
</div><!-- end of div.col-md-9-->