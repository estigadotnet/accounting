<h3>MATA UANG - LIST</h3>
<p><a href="<?php echo site_url('matauang/tambah'); ?>">Tambah Data</a></p>
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
		<td><a href="<?php echo site_url('matauang/edit/'.$r->id); ?>">Edit</a> | <a href="<?php echo site_url('matauang/hapus/'.$r->id); ?>">Hapus</a></td>
	</tr>
	<?php endforeach; ?>
</table>