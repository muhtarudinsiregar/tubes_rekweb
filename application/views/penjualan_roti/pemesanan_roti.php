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
				<li><a href="#pesan" data-toggle="tab">Pesan</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="pesan">
					<?php echo form_open('users/tambah_bahan', 'class="form-inline"','role="form"'); ?>
					<div class="col-md-8">
						<div class="row" id="tambah">
							<div class="col-md-10" id="bahan_baku">
								<div class="form-group">
									<label for="namaroti" class="control-label">Roti</label>
								</div>
								&nbsp;&nbsp;&nbsp;
								<div class="form-group">
									<select name="roti" class="form-control">
										<option value="Biji">Biji</option>
										<option value="Kilogram">Kilogram</option>
										<option value="Gram">Gram</option>
										<option value="Liter">Liter</option>
										<option value="Botol">Botol</option>
									</select>
								</div>
								<div class="form-group">
									<input id="stok" type="number" name="jumlah" class="form-control" placeholder="Jumlah">
								</div>								
							</div>
							

						</div><!-- end div tambah row -->
							<div class="col-md-10">
								<div class="form-group col-sm-offset-1">
									<a href="" class="tambah_data">Tambah..</a>
								</div>
							</div>
							<br><br>
							<div class="col-md-10">
								<button class="btn btn-primary col-sm-offset-1">Submit</button>
							</div>
					</div><!-- end div tambah col-md-8 -->
					<?php echo form_close(); ?>
				</div><!-- end div tambah stok -->
			</div><!-- end div tab content -->
		</div><!-- end div col-md-12 -->
	</div><!-- end of div.row -->
</div><!--  end of div.col-md-6 -->
