<div class="col-md-8 col-md-offset-2">
	<div class="row">
		&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo anchor('users/tambah_users', 'Tambah User', 'class="btn btn-primary"'); ?>
		<?php echo anchor('login/logout', 'Logout'); ?>
		<!-- <a href="users/tambah_users" class="btn btn-primary">Tambah User</a> -->
		<div class="col-md-12">
				<table class="table table-hover">
					<br>
					<thead>
						<th>No</th>
						<th>Username</th>
						<th>Hak Akses</th>
						<th style="text-align=center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
					</thead>
					<tbody>
						<?php 
						foreach ($daftar_users->result() as $row) {
							?>
							<tr>
								<td></td>
								<td><?php echo $row->username; ?></td>
								<td><?php echo $row->akses; ?></td>
								<td><?php echo anchor('users/edit_users/'.$row->id.'', 'Edit', 'class="btn btn-info"').' '.anchor('users/hapus_users/'.$row->id.'', 'Hapus', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$row->username."?')",'class'=>"btn btn-danger")); ?>								
								</td>
							</tr>
							<?php 
						// $no++;	
						} ?>
					</tbody>
				</table>
			</div>	

		</div>
		<!-- end of div.row -->
	</div>
<!-- end of div.col-md-6-->