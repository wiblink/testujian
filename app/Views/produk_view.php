<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/produk-form') ?>" class="btn btn-success mb-2">Add Produk</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="produk-list">
       <thead>
          <tr>
             <th>No</th>
             <th>Name</th>
             <th>Deskripsi</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($produksi): ?>

          <?php
            $i=1;
            foreach($produksi as $produk): ?>
          <tr>
             <td><?php echo $i++; ?></td>
             <td><?php echo $produk['nama_produk']; ?></td>
             <td><?php echo $produk['deskripsi_produk']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-view/'.$produk['id_produk']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('delete/'.$produk['id_produk']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#produk-list').DataTable();
  } );
</script>

</main>
</body>
</html>