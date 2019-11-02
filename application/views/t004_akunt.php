<h3>AKUN - TAMBAH DATA</h3>
<form action="<?php echo site_url('t004_akun/simpan'); ?>" method="post">
	<table>
		<tr>
			<td>Sub-Grup</td><td>:</td>
			<td>
				<select name="subgrup_id">
					<?php foreach ($rs_subgrup as $r_subgrup) { ?>
					<option value="<?php echo $r_subgrup->id; ?>"><?php echo $r_subgrup->nama; ?></option>
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
		<tr>
			<td>Mata Uang</td><td>:</td>
			<td>
				<select name="matauang_id">
					<?php foreach ($rs_matauang as $r_matauang) { ?>
					<option value="<?php echo $r_matauang->id; ?>"><?php echo $r_matauang->nama; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Simpan"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t004_akun'); ?>'"></td>
		</tr>
	</table>
</form>