<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("Layout/Header.php") ?>  

<body>
  
<?php $this->load->view('Layout/Navbar.php')?>
<p>                </p>
<div class="container">
	<div class="container text-center">
		<div id="content-wrapper">
			<div class="container-fluid">
				<img src="<?php echo base_url('assets/img/CEM.png')?>" class="rounded" width="300px">
				<img src="<?php echo base_url('assets/img/GMCSM.jpg')?>" class="rounded" width="300px">
				<img src="<?php echo base_url('assets/img/HOS.jpg')?>" class="rounded" width="300px">
				<img src="<?php echo base_url('assets/img/MTIB.jpg')?>" class="rounded" width="300px">
				<img src="<?php echo base_url('assets/img/WA1.jpg')?>" class="rounded" width="300px">
				<img src="<?php echo base_url('assets/img/WA2.jpg')?>" class="rounded" width="300px">
				<img src="<?php echo base_url('assets/img/WA3.jpg')?>" class="rounded" width="300px">
			</div>
		</div>
	</div>
</div>	

<?php $this->load->view('Layout/Contac.php')?>
<?php $this->load->view('Layout/Footer.php')?>
<?php $this->load->view('Layout/JS.php')?>

</body>
</html>