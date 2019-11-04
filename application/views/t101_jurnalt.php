<h3>JURNAL - TAMBAH DATA</h3>
<!-- <form action="<?php echo site_url('t101_jurnal/simpan'); ?>" method="post"> -->
	<form action="" method="post"></form>
	<input type="hidden" name="period_id" value="<?php echo $this->session->userdata('period_id'); ?>">
	<table>
		<tr>
			<td>Tipe Jurnal</td><td>:</td>
			<td>
				<select name="tipejurnal_id">
					<?php foreach ($rs_tipejurnal as $r_tipejurnal) { ?>
					<option value="<?php echo $r_tipejurnal->id; ?>"><?php echo $r_tipejurnal->nama; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Keterangan</td><td>:</td><td><input type="text" name="keterangan"></td>
		</tr>
		<tr>
			<td colspan="3">
				<table id="table-detail">
					<tbody>
					<tr>
						<td><select name="akun_id[]"></select></td><td><input type="text" name="debet[]"></td><td><input type="text" name="kredit[]"></td><td><button class="hapusBaris">Hapus Baris</button></td>
					</tr>
					</tbody>
					<tfoot>
					<tr>
						<td colspan="4"><input type="button" value="Tambah Detail" id="add-detail"></td>
					</tr>
					</tfoot>
				</table>
			</td>
		</tr>
		
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Simpan"> <input type="button" value="Selesai" onclick="window.location.href='<?php echo site_url('t101_jurnal'); ?>'"></td>
		</tr>
	</table>
</form>

<script type="text/javascript">
$(function() {

	$('#add-detail').on('click', addDetail);
	$('.hapusBaris').on('click', hapusBaris);

	function addDetail() {
		var html = '' +
		'<tr>' +
			'<td><select name="akun_id[]"></select></td><td><input type="text" name="debet[]"></td><td><input type="text" name="kredit[]"></td><td><button class="hapusBaris">Hapus Baris</button></td>' +
		'</tr>';
		$('#table-detail tbody').append(html);
		$('.hapusBaris').on('click', hapusBaris);
	}

	function hapusBaris() {
		var row = $(this).parents('tr').first(); //alert(row.length);
		if (row.length > 0) $(row[0]).remove();
	}
});
</script>