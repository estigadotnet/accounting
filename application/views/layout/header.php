<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Accounting 1.00</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/accounting.css'); ?>">
		<style type="text/css">
			body, select, input {
				font-family: calibri;
			}

			a {
				text-decoration: none;
			}

			ul.ul_submenu {
				display: none;
			}
		</style>
		<script type="text/javascript" src="<?php echo base_url('js/jquery-3.4.1.min.js') ?>"></script>
	</head>
	<body>
		<h2>Accounting 1.00</h2>
		<ul>
			<li><a href="<?php echo site_url('home'); ?>"></a>HOME</li>
			<li class="submenu"><a href="#">SETUP</a>
				<ul class="ul_submenu">
					<li><a href="<?php echo site_url('grup'); ?>">GRUP</a></li>
					<li><a href="<?php echo site_url('subgrup'); ?>">SUB-GRUP</a></li>
					<li><a href="<?php echo site_url('matauang'); ?>">MATA UANG</a></li>
					<li><a href="<?php echo site_url('akun'); ?>">AKUN</a></li>
					<li><a href="<?php echo site_url('periode'); ?>">PERIODE</a></li>
					<li><a href="<?php echo site_url('saldoawal'); ?>">SALDO AWAL</a></li>
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
		</script>
	</body>
</html>