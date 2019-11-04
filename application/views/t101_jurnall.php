<h3>JURNAL - LIST</h3>
<p><a href="<?php echo site_url('t101_jurnal/tambah'); ?>">Tambah Data</a></p>
<table class="paleBlueRows">
	<tr>
		<th>Tanggal</th>
		<th>Keterangan</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach($rs as $r): ?>
	<tr>
		<td><?php echo $r->createon; ?></td>
		<td><?php echo $r->keterangan; ?></td>
		<td><a href="<?php echo site_url('t101_jurnal/edit/'.$r->id); ?>">Edit</a> | <a href="<?php echo site_url('t101_jurnal/hapus/'.$r->id); ?>">Hapus</a></td>
	</tr>
	<?php endforeach; ?>
</table>