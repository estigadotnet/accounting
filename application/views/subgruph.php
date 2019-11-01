<h3>SUB-GRUP - HAPUS DATA</h3>
<form action="<?php echo site_url('subgrup/hapus_data/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Grup</td><td>:</td><td><?php foreach ($rs_grup as $r_grup) { if ($r_grup->id == $r->grup_id) echo $r_grup->name; } ?></td>
		</tr>
		<tr>
			<td>Kode</td><td>:</td><td><?php echo $r->kode; ?></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td><td><?php echo $r->nama; ?></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Hapus"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('subgrup'); ?>'"></td>
		</tr>
	</table>
</form>