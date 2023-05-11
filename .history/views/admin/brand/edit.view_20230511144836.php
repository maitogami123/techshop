<?php
use App\Models\User;

if (!isLoggedIn()) {
  $_SESSION['isLoggedIn'] = false;
}
if (isLoggedIn()) {
  $user = new User();
  $user = unserialize($_SESSION['user']);
}
if (!isLoggedIn() || !in_array('P_Edit', $user->getPermissions()))
  redirect($routes->get('homepage')->getPath())
    ?>
  <div class="modal-header modal-colored-header bg-info">
    <h4 class="modal-title" id="fill-info-modalLabel">
      Change Brand's information
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
  </div>
  <div class="modal-body">
    <form class="ps-3 pe-3" action="" id="edit-form">
      <div class="mb-3">
        <label for="brand-id" class="form-label">Brand Id</label>
        <input class="form-control" type="text" id="brand-id" required="" placeholder=""
          value="<?php echo $brand->getId() ?>" name='brand-id'  />
    </div>
    <div class="mb-3">
      <label for="brand-name" class="form-label">Brand Name</label>
      <input class="form-control" type="text" id="brand-name" required="" placeholder=""
        value="<?php echo $brand->getName() ?>" name='brand-name' />
    </div>
    <div class="mb-3 modal-footer">
      <button type="button" class="btn btn-light" data-bs-dismiss="modal">
        Cancel
      </button>
      <button class="btn btn-primary" type="submit" id="save-change-btn"
        data-brand-id="<?php echo $brand->getId() ?>">
        Save change
      </button>
    </div>
  </form>
</div>

<!-- <script src="/techshop/public/js/handle_admin_product_img_preview.js"></script> -->
<script>
        $('#edit-form').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "<?php echo getPath($routes, 'updateBrand') ?>",
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Brand successfully changed!',
                        icon: 'success',
                        confirmButtonTeNxt: 'Cool!'
                    })
                    .then(() => {
                        location.reload();
                    })
                }
            })
        })
</script>