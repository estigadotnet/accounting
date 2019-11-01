<h3>GRUP - EDIT DATA</h3>
<form action="<?php echo site_url('grup/update/'.$r['id']); ?>" method="post">
	<table>
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="name" value="<?php echo $r['name']; ?>"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Update"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('grup'); ?>'"></td>
		</tr>
	</table>
</form>