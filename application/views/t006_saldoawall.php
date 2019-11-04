<h3>SALDO AWAL - LIST</h3>
<p><a href="<?php echo site_url('t006_saldoawal/tambah'); ?>">Tambah Data</a></p>
<table class="paleBlueRows">
	<tr>
		<th>Periode</th>
		<th>Akun</th>
		<th>Debet</th>
		<th>Kredit</th>
		<th>Saldo</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach($rs as $r): ?>
	<tr>
		<td><?php echo $r->periode; ?></td>
		<td><?php echo $r->akun_nama; ?></td>
		<td align="right"><?php echo number_format($r->debet); ?></td>
		<td align="right"><?php echo number_format($r->kredit); ?></td>
		<td align="right"><?php echo number_format($r->saldo); ?></td>
		<td><a href="<?php echo site_url('t006_saldoawal/edit/'.$r->id); ?>">Edit</a> | <a href="<?php echo site_url('t006_saldoawal/hapus/'.$r->id); ?>">Hapus</a></td>
	</tr>
	<?php endforeach; ?>
</table>