<h3>SALDO AWAL - TAMBAH DATA</h3>
<form action="<?php echo site_url('t006_saldoawal/simpan'); ?>" method="post">
	<input type="hidden" name="periode_id" value="<?php echo $r_periode->id; ?>">
	<table>
		<tr>
			<td>Periode</td><td>:</td><td><?php echo date('d-m-Y', strtotime($r_periode->start)) . ' s.d. ' . date('d-m-Y', strtotime($r_periode->end)); ?></td>
		</tr>
		<tr>
			<td>Akun</td><td>:</td>
			<td>
				<select name="akun_id">
					<?php foreach ($rs_akun as $r_akun) { ?>
					<option value="<?php echo $r_akun->id; ?>"><?php echo $r_akun->nama; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Debet</td><td>:</td><td><input type="text" name="debet"></td>
		</tr>
		<tr>
			<td>Kredit</td><td>:</td><td><input type="text" name="kredit"></td>
		</tr>
		<tr>
			<td>Saldo</td><td>:</td><td><input type="text" name="saldo"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Simpan"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t006_saldoawal'); ?>'"></td>
		</tr>
	</table>
</form>