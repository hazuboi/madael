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
	<h2>Upload CV</h2>
	</div>
    	<div id="content-wrapper">
			<div class="container-fluid">
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
			<div class="card mb-3">					
				<div class="card-body">
					<form action="<?php echo base_url('Upload/add')?>" method="POST" enctype="multipart/form-data">				  
					  	 <div class="form-group">
					        <label>Nama Lengkap</label>
					        <input type="text" class="form-control" placeholder="Enter Name" name="nama">
					    </div>

					     <div class="form-group">
					        <label>Umur</label>
					        <input type="text" class="form-control" placeholder="Enter Name" name="umur">
					    </div>

					     <div class="form-group">
					        <label>No. Handphone</label>
					        <input type="text" class="form-control" placeholder="Enter Name" name="handphone">
					    </div>

					    <div class="form-group">
					        <label>Email</label>
					        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
					    </div>

					     <div class="form-group">
					        <label>Pendidikan Terakhir</label>
					        <input type="text" class="form-control" placeholder="Enter Name" name="pendidikan">
					    </div>

					     <div class="form-group">
					        <label>Jabatan Terakhir</label>
					        <input type="text" class="form-control" placeholder="Enter Name" name="jabatan">
					    </div>

					    <div class="form-group">
					        <label>Upload CV</label>
					        <input class="form-control-file" type="file"  name="berkas">
					    </div>
													
					    <button class="btn btn-success">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<p>                </p>

<?php $this->load->view('Layout/Footer.php')?>
<?php $this->load->view('Layout/JS.php')?>

</body>
</html>