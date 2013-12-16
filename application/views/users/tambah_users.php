<div class="col-md-8 col-md-offset-2">
	<div class="row">
		<?php echo form_open('users/tambah_users', 'class="form-horizontal"','role="form"' ); ?>
		<!-- <form action="simpan_users" class="form-horizontal" method="post"> -->
		<div class="form-group">
			<label class="col-md-3 control-label" for="username">Username</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>">
				<?php echo form_error('username'); ?>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-3 control-label" for="password">Password</label>
			<div class="col-md-6">
				<input class="form-control" type="password" name="password"><?php echo form_error('password'); ?>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-3 control-label" for="">Akses</label>
			<div class="col-md-3">
				<select name="akses" id="" class="form-control">
					<option value="kasir">Kasir</option>
					<option value="gudang">Gudang</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-9 modal-footer">
				<input type="submit" class="col-md-3 col-md-offset-4 btn btn-primary">
				<input type="reset" class="col-md-3 btn btn-primary">
			</div>

			<?php echo form_close(); ?>
		</div>
	</div>