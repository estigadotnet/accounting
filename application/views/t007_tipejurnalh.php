<h3>TIPE JURNAL - HAPUS DATA</h3>
<form action="<?php echo site_url('t007_tipejurnal/hapus_data/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Kode</td><td>:</td><td><?php echo $r->kode; ?></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td><td><?php echo $r->nama; ?></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Hapus"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t007_tipejurnal'); ?>'"></td>
		</tr>
	</table>
</form>