<h3>MATA UANG - EDIT DATA</h3>
<form action="<?php echo site_url('matauang/update/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Kode</td><td>:</td><td><input type="text" name="kode" value="<?php echo $r->kode; ?>"></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="nama" value="<?php echo $r->nama; ?>"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Update"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('matauang'); ?>'"></td>
		</tr>
	</table>
</form>