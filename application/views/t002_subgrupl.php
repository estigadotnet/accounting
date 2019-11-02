<h3>SUB-GRUP - LIST</h3>
<p><a href="<?php echo site_url('t002_subgrup/tambah'); ?>">Tambah Data</a></p>
<table class="paleBlueRows">
	<tr>
		<th>Grup</th>
		<th colspan="2">Sub-Grup</th>
		<th>&nbsp;</th>
	</tr>
	<?php
	// nilai flag untuk checking grup_id
	$grup_id_flag = 0;
	foreach($rs as $r):

		// deklarasi nilai grup_id di record pertama
		if ($grup_id_flag == 0) {
			$grup_id = $r->grup_id;
		}

		// bandingkan nilai grup_id apakah masih sama dengan nilai grup_id yang sudah tersimpan sebelumnya,
		// jika sudah tidak sama maka nilai flag di-nol-kan lagi
		if ($grup_id != $r->grup_id) {
			$grup_id = $r->grup_id;
			$grup_id_flag = 0;
		}

		// periksa nilai grup_id dan tampilkan data grup
		if ($grup_id == $r->grup_id and $grup_id_flag == 0) {
			$grup_id_flag = 1;
			?>
			<tr>
				<td colspan="4">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="4"><?php echo $r->grup_name; ?></td>
			</tr>
			<?php
		}
	?>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo $r->kode; ?></td>
		<td><?php echo $r->nama; ?></td>
		<td><a href="<?php echo site_url('t002_subgrup/edit/'.$r->id); ?>">Edit</a> | <a href="<?php echo site_url('t002_subgrup/hapus/'.$r->id); ?>">Hapus</a></td>
	</tr>
	<?php
	endforeach;
	?>
</table>