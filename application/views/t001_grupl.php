<h3>GRUP - LIST</h3>
<p><a href="<?php echo site_url('t001_grup/tambah'); ?>">Tambah Data</a></p>
<table class="paleBlueRows">
	<tr>
		<th>Grup</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach($rs as $r): ?>
	<tr>
		<td><?php echo $r->name; ?></td>
		<td><a href="<?php echo site_url('t001_grup/edit/'.$r->id); ?>">Edit</a> | <a href="<?php echo site_url('t001_grup/hapus/'.$r->id); ?>">Hapus</a></td>
	</tr>
	<?php endforeach; ?>
</table>