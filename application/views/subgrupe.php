<h3>SUB-GRUP - EDIT DATA</h3>
<form action="<?php echo site_url('subgrup/update/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Grup</td><td>:</td>
			<td>
				<select name="grup_id">
					<?php foreach ($rs_grup as $r_grup) { ?>
					<option value="<?php echo $r_grup->id; ?>" <?php echo ($r_grup->id == $r->grup_id) ? 'selected' : ''; ?>><?php echo $r_grup->name; ?></option>
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
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Update"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('subgrup'); ?>'"></td>
		</tr>
	</table>
</form>