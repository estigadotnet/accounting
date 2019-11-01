<h3>GRUP - HAPUS DATA</h3>
<form action="<?php echo site_url('grup/hapus_data/'.$r['id']); ?>" method="post">
	<table>
		<tr>
			<td>Nama</td><td>:</td><td><?php echo $r['name']; ?></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Hapus"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('grup'); ?>'"></td>
		</tr>
	</table>
</form>