<h3>Entry DATA KONSULTASI NILAI</h3>
<?php echo form_open('nilai/add'); ?>

<table class="table table-bordered">
	<tr>
		<td>Kode</td>
		<td><?php echo form_input('Kode','',
			"placeholder='kode' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><?php echo form_input('Nim','',
			"placeholder='nim' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Mata Kuliah</td>
		<td><?php echo form_input('Matakuliah','',
			"placeholder='mata kuliah' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Kpkl</td>
		<td><?php echo form_input('Kpkl','',
			"placeholder='kpkl' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Khs</td>
		<td><?php echo form_input('Khs','',
			"placeholder='khs' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Dosen Pengampu</td>
		<td><?php echo form_input('Dosenp','',
			"placeholder='Dosen Pengampu' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php echo form_submit('submit','simpan',"class='btn btn-danger btn-sm'") ?>
		</td>
	</tr>
</table>
</form>