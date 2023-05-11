<div class="modal-header modal-colored-header bg-info">
  <h4 class="modal-title" id="fill-info-modalLabel">
    Add new permission
  </h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="modal-body">
  <form class="ps-3 pe-3" id="create-form" method="POST" action="">
    <div class="row g-2 mb-3">
      <div class="col-sm-6">
        <label for="perrmission-id" class="form-label">ID</label>
        <input class="form-control" type="text" name='permission_id' id="perrmission-id" placeholder="" />
      </div>
      <div class="col-sm-6">
        <label for="permission-name" class="form-label">Name</label>
        <input class="form-control" type="text" name='permission_name' id="permission-name" placeholder="" />
      </div>
    </div>
    <div class="mb-3">
      <label for="permission-description" class="form-label">Description</label>
      <input class="form-control" type="text" name='permission_description' id="permission-description" placeholder="" />
    </div>
    <div class="mb-3 modal-footer">
      <button type="button" class="btn btn-light" data-bs-dismiss="modal">
        Close
      </button>
      <button class="btn btn-primary" type="submit" id="submit">
        Add permission
      </button>
    </div>
  </form>
</div>
<script>
  $(document).ready(function () {
    $('#create-form').submit(function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      formData.append('roleId', <?php echo $roleId?>)
      $.ajax({
        type: "POST",
        url: "<?php echo getPath($routes, 'addPermission') ?>",
        data: formData,
        success: function (res) {
          console.log(res)

        },
        contentType: false,
        processData: false
      })
    })
  })
</script>