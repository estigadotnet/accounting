<h3>TIPE JURNAL - LIST</h3>
<p><a href="<?php echo site_url('t007_tipejurnal/tambah'); ?>">Tambah Data</a></p>
<table class="paleBlueRows">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach($rs as $r): ?>
	<tr>
		<td><?php echo $r->kode; ?></td>
		<td><?php echo $r->nama; ?></td>
		<td><a href="<?php echo site_url('t007_tipejurnal/edit/'.$r->id); ?>">Edit</a> | <a href="<?php echo site_url('t007_tipejurnal/hapus/'.$r->id); ?>">Hapus</a></td>
	</tr>
	<?php endforeach; ?>
</table>