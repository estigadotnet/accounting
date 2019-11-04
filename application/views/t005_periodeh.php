<h3>PERIODE - HAPUS DATA</h3>
<form action="<?php echo site_url('t005_periode/hapus_data/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Mulai dari</td><td>:</td><td><?php echo date('d-m-Y', strtotime($r->start)); ?></td>
		</tr>
		<tr>
			<td>Sampai dengan</td><td>:</td><td><?php echo date('d-m-Y', strtotime($r->end)); ?></td>
		</tr>
		<tr>
			<td>Status</td><td>:</td><td><?php echo ($r->isaktif == 1) ? 'Aktif' : 'Non-Aktif'; ?></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Hapus"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t005_periode'); ?>'"></td>
		</tr>
	</table>
</form>