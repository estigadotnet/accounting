<h3>GRUP - TAMBAH DATA</h3>
<form action="<?php echo site_url('t001_grup/simpan'); ?>" method="post">
	<table>
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="name"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Simpan"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t001_grup'); ?>'"></td>
		</tr>
	</table>
</form>