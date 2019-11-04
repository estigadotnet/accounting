<h3>HOME</h3>
<p>&nbsp;</p>
<table class="paleBlueRows">
	<tr>
		<th>Keterangan</th>
		<th>Status</th>
	</tr>
	<tr>
		<td>Periode Aktif</td>
		<td><?php echo $num_row; ?></td>
	</tr>
	<tr>
		<td>Periode</td>
		<td><?php echo date('d-m-Y', strtotime($r->start)) . ' s.d. ' . date('d-m-Y', strtotime($r->end)); ?></td>
	</tr>
</table>