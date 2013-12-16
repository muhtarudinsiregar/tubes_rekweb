<div class="col-md-3">
	<div class="col-md-12">
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand"><a href="#">Menu Pilihan</a></li>
				<li><a href="<?php echo site_url('users/daftar_roti') ?>">Daftar Roti</a></li>
				<li><a href="<?php echo site_url('users/pemesanan') ?>">Pesanan</a></li>
				<li><a href="<?php echo site_url('users/bayar') ?>">Pembayaran</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="col-md-9">
	<div class="row">
		<div class="col-md-10">
			<ul class="nav nav-tabs" id="myTab">
				<li><a href="#stok_roti" data-toggle="tab">Stok</a></li>
				<li><a href="#tambah" data-toggle="tab">Tambah</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="stok_roti">
					<div class="col-md-12 nav">
						<div class="row">
							<div class="col-md-10">
								<table class="table table-hover">
									<thead>
										<th>No</th>
										<th>Tanggal</th>
										<th>Nama Bahan</th>
										<th>Stok</th>
										<th>Aksi</th>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>26 Agustus</td>
											<td>Roti Bola Bola</td>
											<td>5</td>
											<td><?php echo anchor('url', 'Edit'); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- end div stok -->

				<div class="tab-pane" id="tambah">
					<?php echo form_open('url', 'class="form-horizontal"','role="form"'); ?>
					<div class="col-md-12">
						<div class="row">
							<div class="form-group">
								<label for="nim" class="col-md-2 control-label">Nama Roti</label>
								<div class="col-sm-4">
									<select name="pilih_roti" class="form-control">
										<option value="kue">Na</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="nim" class="col-md-2 control-label">Stok Roti</label>
								<div class="col-sm-2">
									<input name="stok" type="number" class="form-control" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="stoksubmit" class="col-md-2 control-label"></label>
								<div class="col-sm-4">
									<button class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div><!-- end div tambah row-->
					</div><!-- end div tambah col-md-8 -->
					<?php echo form_close(); ?>
				</div><!-- end div tambah stok -->
			</div><!-- end div tab content -->
		</div><!-- end div col-md-12 -->
	</div><!-- end of div.row -->
</div><!--  end of div.col-md-6 -->
<?php 

// anchor('mahasiswa/edit_mahasiswa/'.$row->id.'', 'Edit','class="btn btn-info"').
' '
// .anchor('mahasiswa/hapus_mahasiswa/'.$row->id.'','Hapus',array('onClick' => "return confirm('Anda Yakin Ingin Menghapus ".$row->nama."?')",'class'=>"btn btn-danger"))
?>
