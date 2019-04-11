<h3>DATA KONSULTASI NILAI</h3>
<?php echo anchor('nilai/add','ENTRY',
	array('class'=>'btn btn-danger btn-sm')); ?>
<table class="table table-bordered">
	<tr>
		<td>NO</td>
		<td>Kode</td>
		<td>Nim</td>
		<td>Mata Kuliah</td>
		<td>Kpkl</td>
		<td>Khs</td>
		<td>Dosen Pengampu</td>
		<td colspan="2">ACTION</td>
	</tr>
<?php
$no=1;
foreach ($nilais as $nilai){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$nilai->kode</td>
	<td>$nilai->nim</td>
	<td>$nilai->matakuliah</td>
	<td>$nilai->kpkl</td>
	<td>$nilai->khs</td>
	<td>$nilai->dosenp</td>
	<td width='20'>";
	echo anchor('nilai/edit/'.$nilai->id,'Edit',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	<td width='20'>";
	echo anchor('nilai/delete/'.$nilai->id,'Delete',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	</tr>";
	$no++;
}
?>
</table>
	