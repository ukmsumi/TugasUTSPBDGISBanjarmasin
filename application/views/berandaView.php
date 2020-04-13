<?=content_open('MAPS BANJARMASIN')?>
<?=content_open('Kelompok 13')?>
<h1>Umi Khoiryatin M S 	21120117120005</h1>
<h1>Heni Nurul K 21120117120023</h1>
<h1>M. Gesit Alifandi 21120117120031</h1>   

<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>	

<?=content_close()?>

