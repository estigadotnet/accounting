<h3>SUB-GRUP - TAMBAH DATA</h3>
<form action="<?php echo site_url('t002_subgrup/simpan'); ?>" method="post">
	<table>
		<tr>
			<td>Grup</td><td>:</td>
			<td>
				<select name="grup_id">
					<?php foreach ($rs_grup as $r_grup) { ?>
					<option value="<?php echo $r_grup->id; ?>"><?php echo $r_grup->name; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kode</td><td>:</td><td><input type="text" name="kode"></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Simpan"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t002_subgrup'); ?>'"></td>
		</tr>
	</table>
</form>