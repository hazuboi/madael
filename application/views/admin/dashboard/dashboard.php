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
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>No. Hp</th>
                    <th>Email</th>
                    <th>Pendidikan</th>                                        
                    <th>Jabatan</th>     
                    <th>CV</th>                                        
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($berkas as $cv): ?>
                  <tr>
                    <!-- <td>
                      <img src="<?php echo base_url('upload/produk/'.$produk->foto) ?>" width="64" />
                    </td> --> 
                    <td>
                      <?php echo $cv->nama ?>
                    </td>
                    <td>
                      <?php echo $cv->umur ?>
                    </td>
                    <td>
                      <?php echo $cv->hp ?>
                    </td>
                    <td>
                      <?php echo $cv->email ?>
                    </td>
                    <td>
                      <?php echo $cv->pendidikan ?>
                    </td>
                    <td>
                      <?php echo $cv->jabatan ?>
                    </td>
                    <td>
                      <a href="<?php echo base_url(); ?>admin/Berkas/download/<?php echo $cv->id_berkas; ?>">Download</a>
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
