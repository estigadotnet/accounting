<h3>AKUN - EDIT DATA</h3>
<form action="<?php echo site_url('t004_akun/update/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Sub-Grup</td><td>:</td>
			<td>
				<select name="subgrup_id">
					<?php foreach ($rs_subgrup as $r_subgrup) { ?>
					<option value="<?php echo $r_subgrup->id; ?>" <?php echo ($r_subgrup->id == $r->subgrup_id) ? 'selected' : ''; ?>><?php echo $r_subgrup->nama; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kode</td><td>:</td><td><input type="text" name="kode" value="<?php echo $r->kode; ?>"></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="nama" value="<?php echo $r->nama; ?>"></td>
		</tr>
		<tr>
			<td>Mata Uang</td><td>:</td>
			<td>
				<select name="matauang_id">
					<?php foreach ($rs_matauang as $r_matauang) { ?>
					<option value="<?php echo $r_matauang->id; ?>" <?php echo ($r_matauang->id == $r->matauang_id) ? 'selected' : ''; ?>><?php echo $r_matauang->nama; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Update"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t004_akun'); ?>'"></td>
		</tr>
	</table>
</form>