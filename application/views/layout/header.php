<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ACCOUNTING 1.00</title>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/accounting.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/select2.min.css'); ?>">
		<style type="text/css">
			body, select, input {
				font-family: calibri;
			}

			a {
				text-decoration: none;
			}

			ul.ul_submenu, ul.ul_submenu2 {
				display: none;
			}
		</style>
		
		<script type="text/javascript" src="<?php echo base_url('js/jquery-3.4.1.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/select2.min.js'); ?>"></script>
	</head>
	<body>
		<h2>ACCOUNTING 1.00</h2>
		<ul>
			<li><a href="<?php echo site_url('c001_home'); ?>">HOME</a></li>
			<li class="submenu"><a href="#">SETUP</a>
				<ul class="ul_submenu">
					<li><a href="<?php echo site_url('t001_grup'); ?>">GRUP</a></li>
					<li><a href="<?php echo site_url('t002_subgrup'); ?>">SUB-GRUP</a></li>
					<li><a href="<?php echo site_url('t003_matauang'); ?>">MATA UANG</a></li>
					<li><a href="<?php echo site_url('t004_akun'); ?>">AKUN</a></li>
					<li><a href="<?php echo site_url('t005_periode'); ?>">PERIODE</a></li>
					<li><a href="<?php echo site_url('t006_saldoawal'); ?>">SALDO AWAL</a></li>
					<li><a href="<?php echo site_url('t007_tipejurnal'); ?>">TIPE JURNAL</a></li>
				</ul>
			</li>
			<li class="submenu2"><a href="#">TRANSAKSI</a>
				<ul class="ul_submenu2">
					<li><a href="<?php echo site_url('t101_jurnal'); ?>">JURNAL</a></li>
				</ul>
			</li>
		</ul>

		<script type="text/javascript">
			$('li.submenu').on(
				'click',
				'a[href="#"]',
				function(e) {
					e.preventDefault();
					$('ul.ul_submenu').toggle();
				});
			$('li.submenu2').on(
				'click',
				'a[href="#"]',
				function(e) {
					e.preventDefault();
					$('ul.ul_submenu2').toggle();
				});
		</script>
	</body>
</html>