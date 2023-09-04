  <div class="container mt-5">
    <form method="post" id="update_produk" name="update_produk" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="id_produk" id="id_produk" value="<?php echo $dta_produk['id_produk']; ?>">

      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama_produk" class="form-control" value="<?php echo $dta_produk['nama_produk']; ?>">
      </div>

      <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi_produk" class="form-control" ><?php echo $dta_produk['deskripsi_produk']; ?></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_produk").length > 0) {
      $("#update_produk").validate({
        rules: {
          nama_produk: {
            required: true,
          },
          deskripsi_produk: {
            required: true,
          },
        },
        messages: {
          nama_produk: {
            required: "Nama Harus Diisi.",
          },
          deskripsi_produk: {
            required: "Deskripsi harus diisi.",
          },
        },
      })
    }
  </script>
</body>

</html>