<h3>Edit DATA KONSULTASI NILAI</h3>
<?php echo form_open('nilai/edit'); ?>
<?php echo form_hidden('id', $nilai[0]->id);?>
<table class="table table-bordered">
	<tr>
		<td>Kode</td>
		<td><?php echo form_input('Kode',$nilai[0]->kode,
			"placeholder='Kode' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><?php echo form_input('Nim',$nilai[0]->nim,
			"placeholder='Nim' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Mata Kuliah</td>
		<td><?php echo form_input('Matakuliah',$nilai[0]->matakuliah,
			"placeholder='Mata Kuliah' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Kpkl</td>
		<td><?php echo form_input('Kpkl',$nilai[0]->kpkl,
			"placeholder='Kpkl' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Khs</td>
		<td><?php echo form_input('Khs',$nilai[0]->khs,
			"placeholder='Khs' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Dosen Pengampu</td>
		<td><?php echo form_input('Dosenp',$nilai[0]->dosenp,
			"placeholder='Dosen Pengampu' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php echo form_submit('submit','simpan',"class='btn btn-danger btn-sm'")?>
		<?php echo anchor('nilai','Kembali',array('class'=>'btn btn-danger btn-sm'));?>
		</td>
	</tr>
</table>
</form>