<nav>
    <ul id="MenuBar1" class="MenuBarHorizontal">      
            <li><a href="<?php echo base_url(); ?>admin/berita" class="MenuBarItemSubmenu">Produk</a>
          <ul>
            <li><a href="<?php echo base_url(); ?>admin/berita">Tambah Produk</a></li>
            <li><a href="<?php echo base_url(); ?>admin/berita/tambah">Hapus Produk</a></li>
            <li><a href="<?php echo base_url(); ?>admin/berita/tambah">Edit Produk</a></li>
          </ul>
        </li>
<li><a href="<?php echo base_url(); ?>/admin/user" class="MenuBarItemSubmenu">User</a>
        <ul>
            <li><a href="<?php echo base_url(); ?>admin/user">Data User</a></li>
            <li><a href="<?php echo base_url(); ?>admin/user/tambah">Tambah User</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url(); ?>/dashboard/config">Konfigurasi</a></li>
              </ul>
  </nav>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarRightHover.gif"});
</script> 
<!--End Navigasi-->