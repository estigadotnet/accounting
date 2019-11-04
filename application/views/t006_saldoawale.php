<h3>SALDO AWAL - EDIT DATA</h3>
<form action="<?php echo site_url('t006_saldoawal/update/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Periode</td><td>:</td>
			<td>
				<select name="periode_id">
					<?php foreach ($rs_periode as $r_periode) { ?>
					<option value="<?php echo $r_periode->id; ?>" <?php echo ($r_periode->id == $r->periode_id) ? 'selected' : ''; ?>><?php echo date('d-m-Y', strtotime($r_periode->start)) . ' s.d. ' . date('d-m-Y', strtotime($r_periode->end)); ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Akun</td><td>:</td>
			<td>
				<select name="akun_id">
					<?php foreach ($rs_akun as $r_akun) { ?>
					<option value="<?php echo $r_akun->id; ?>" <?php echo ($r_akun->id == $r->akun_id) ? 'selected' : ''; ?>><?php echo $r_akun->nama; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Debet</td><td>:</td><td><input type="text" name="debet" value="<?php echo $r->debet; ?>"></td>
		</tr>
		<tr>
			<td>Kredit</td><td>:</td><td><input type="text" name="kredit" value="<?php echo $r->kredit; ?>"></td>
		</tr>
		<tr>
			<td>Saldo</td><td>:</td><td><input type="text" name="saldo" value="<?php echo $r->saldo; ?>"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Update"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t006_saldoawal'); ?>'"></td>
		</tr>
	</table>
</form>