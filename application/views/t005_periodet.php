<h3>PERIODE - TAMBAH DATA</h3>
<form action="<?php echo site_url('t005_periode/simpan'); ?>" method="post">
	<table>
		<tr>
			<td>Mulai dari</td><td>:</td><td><input type="text" name="start"></td>
		</tr>
		<tr>
			<td>Sampai dengan</td><td>:</td><td><input type="text" name="end"></td>
		</tr>
		<tr>
			<td>Status</td><td>:</td><td><input type="radio" name="isaktif[]" value="1">Aktif</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>:</td><td><input type="radio" name="isaktif[]" value="0">Non-Aktif</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Simpan"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t005_periode'); ?>'"></td>
		</tr>
	</table>
</form>