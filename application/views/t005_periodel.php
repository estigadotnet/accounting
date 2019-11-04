<h3>PERIODE - LIST</h3>
<p><a href="<?php echo site_url('t005_periode/tambah'); ?>">Tambah Data</a></p>
<table class="paleBlueRows">
	<tr>
		<th colspan="2">Periode</th>
		<th>Status</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach($rs as $r): ?>
	<tr>
		<td><?php echo date('d-m-Y', strtotime($r->start)); ?></td>
		<td><?php echo date('d-m-Y', strtotime($r->end)); ?></td>
		<td><?php echo ($r->isaktif == 1) ? 'Aktif' : 'Non-Aktif'; ?></td>
		<td><a href="<?php echo site_url('t005_periode/edit/'.$r->id); ?>">Edit</a> | <a href="<?php echo site_url('t005_periode/hapus/'.$r->id); ?>">Hapus</a></td>
	</tr>
	<?php endforeach; ?>
</table>