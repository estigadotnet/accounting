<h3>TIPE JURNAL - TAMBAH DATA</h3>
<form action="<?php echo site_url('t007_tipejurnal/simpan'); ?>" method="post">
	<table>
		<tr>
			<td>Kode</td><td>:</td><td><input type="text" name="kode"></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Simpan"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t007_tipejurnal'); ?>'"></td>
		</tr>
	</table>
</form>