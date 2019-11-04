<h3>SALDO AWAL - HAPUS DATA</h3>
<form action="<?php echo site_url('t006_saldoawal/hapus_data/'.$r->id); ?>" method="post">
	<table>
		<tr>
			<td>Periode</td><td>:</td><td><?php foreach ($rs_periode as $r_periode) { if ($r_periode->id == $r->periode_id) echo date('d-m-Y', strtotime($r_periode->start)) . ' s.d. ' . date('d-m-Y', strtotime($r_periode->end)); } ?></td>
		</tr>
		<tr>
			<td>Akun</td><td>:</td><td><?php foreach ($rs_akun as $r_akun) { if ($r_akun->id == $r->akun_id) echo $r_akun->nama; } ?></td>
		</tr>
		<tr>
			<td>Debet</td><td>:</td><td><?php echo $r->debet; ?></td>
		</tr>
		<tr>
			<td>Kredit</td><td>:</td><td><?php echo $r->kredit; ?></td>
		</tr>
		<tr>
			<td>Saldo</td><td>:</td><td><?php echo $r->saldo; ?></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Hapus"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t006_saldoawal'); ?>'"></td>
		</tr>
	</table>
</form>