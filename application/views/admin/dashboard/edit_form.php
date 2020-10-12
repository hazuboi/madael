<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/layout/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/layout/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/layout/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">				

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/produk/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/produk/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $produk->id_produk?>" />

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama produk" value="<?php echo $produk->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Harga*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="number" name="harga" min="0" placeholder="Harga produk" value="<?php echo $produk->harga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
								 type="text" name="deskripsi" placeholder="Deskripsi produk"><?php echo $produk->deskripsi ;?>
								 </textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kategori">
									Kategori*

									<div class="form-group">
									<select class="selectpicker" name="kategori">
										<option value="" selected disabled><?php echo $produk->kategori ;?></option>
								  		<option value="Operating Room">Operating Room Equipment</option>   
								  		<option value="Hospital">Hospital Equipment</option>
								  		<option value="Surgical">Surgical Equipment</option>
								  		<option value="Exam Room">Exam Room Equipment</option>
								  		<option value="Cardiac Care">Cardiac Care Equipment</option>
								  		<option value="Radiology & Ultrasound">Radiology & Ultrasound Equipment</option>
								  		<option value="Plastic Surgery">Plastic Surgery Equipment</option>
								  		<option value="Oral Surgery">Oral Surgery Equipment</option>
								  		<option value="OB/GYN">OB/GYN Equipment</option>
								  		<option value="Sparepart">Sparepart & Accecories</option>
									</select>	
									</div>
								</label>							
							</div>

							<div class="form-group">
								<label for="name">Foto*</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<input type="hidden" name="old_image" value="<?php echo $produk->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>
							
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/layout/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/layout/js.php") ?>

</body>

</html>