<div class="col-md-3">
	<div class="col-md-12">
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand"><a href="#">Menu Pilihan</a></li>
				<li><a href="<?php echo site_url('pembelian_bahan_baku') ?>">Daftar Stok</a></li>
				<li><a href="<?php echo site_url('pembelian_bahan_baku/#') ?>">Daftar Roti</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="col-md-9">
	<?php form_hidden('id', '$edit->id'); ?>
	<?php echo form_open('bahan_baku/proses_edit/'.$edit->id, 'class="form-horizontal"','role="form"'); ?>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-10 nav">
				<div class="form-group">
					<label for="bahan" class="col-sm-2 control-label">Nama Bahan</label>
					<div class="col-sm-3">
							<input class="form-control" type="text" name="nama_bahan" required="true" value="<?php echo $edit->nama; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="stok" class="col-sm-2 control-label">Stok</label>
					<div class="col-sm-3">
						<input class="form-control" type="number" name="stok" required="true" value="<?php echo $edit->jumlah_stok; ?>">
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
</div>