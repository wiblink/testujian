  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama_produk" class="form-control">
      </div>

      <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi_produk" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>

</html>