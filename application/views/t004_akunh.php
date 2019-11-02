<h3>AKUN - HAPUS DATA</h3>
<form action="<?php echo site_url('t004_akun/hapus/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Sub-Grup</td><td>:</td><td><?php foreach ($rs_subgrup as $r_subgrup) { if ($r_subgrup->id == $r->subgrup_id) echo $r_subgrup->nama; } ?></td>
		</tr>
		<tr>
			<td>Kode</td><td>:</td><td><?php echo $r->kode; ?></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td><td><?php echo $r->nama; ?></td>
		</tr>
		<tr>
			<td>Mata Uang</td><td>:</td><td><?php foreach ($rs_matauang as $r_matauang) { if ($r_matauang->id == $r->matauang_id) echo $r_matauang->nama; }?></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Hapus"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t004_akun'); ?>'"></td>
		</tr>
	</table>
</form>