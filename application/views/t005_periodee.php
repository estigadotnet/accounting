<h3>PERIODE - EDIT DATA</h3>
<form action="<?php echo site_url('t005_periode/update/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Mulai dari</td><td>:</td><td><input type="text" name="start" value="<?php echo date('d-m-Y', strtotime($r->start)); ?>"></td>
		</tr>
		<tr>
			<td>Sampai dengan</td><td>:</td><td><input type="text" name="end" value="<?php echo date('d-m-Y', strtotime($r->end)); ?>"></td>
		</tr>
		<tr>
			<td>Status</td><td>:</td><td><input type="radio" name="isaktif[]" value="1" <?php echo ($r->isaktif == 1) ? 'checked' : ''; ?>>Aktif</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>:</td><td><input type="radio" name="isaktif[]" value="0" <?php echo ($r->isaktif == 0) ? 'checked' : ''; ?>>Non-Aktif</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Update"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t005_periode'); ?>'"></td>
		</tr>
	</table>
</form>