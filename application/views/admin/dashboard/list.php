<!DOCTYPE html>
<html lang="en">

	<?php $this->load->view("admin/layout/head.php") ?>

<body id="page-top">

	<?php $this->load->view("admin/layout/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/layout/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">			
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/produk/add') ?>"><i class="fas fa-plus"></i> Tambah Produk</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Foto</th>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Kategori</th>
										<th>Harga</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($produk as $produk): ?>
									<tr>
										<td>
											<img src="<?php echo base_url('upload/produk/'.$produk->foto) ?>" width="64" />
										</td>	
										<td width="150">
											<?php echo $produk->nama ?>
										</td>
										<td width="150">
											<?php echo $produk->deskripsi ?>
										</td>
										<td>
											<?php echo $produk->kategori ?>
										</td>
										<td>
											<?php echo $produk->harga ?>
										</td>														
										<td width="250">
											<a href="<?php echo site_url('admin/produk/edit/'.$produk->id_produk) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

											<a onclick="deleteConfirm('<?php echo site_url('admin/produk/delete/'.$produk->id_produk) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/layout/modal.php") ?>
	<script>
		function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
		}
	</script>
</body>

</html>
