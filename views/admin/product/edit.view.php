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
      Change product's information
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
  </div>
  <div class="modal-body">
    <form class="ps-3 pe-3" action="" id="edit-form">
      <div class="mb-3">
        <label for="product-line" class="form-label">Line</label>
        <input class="form-control" type="text" id="product-line" required="" placeholder=""
          value="<?php echo $product->getProductLine() ?>" name='product_line' disabled />
      <input class="form-control" type="text" id="product-line" required="" placeholder=""
        value="<?php echo $product->getProductLine() ?>" name='product_line' hidden />
    </div>
    <div class="mb-3">
      <label for="product-name" class="form-label">Name</label>
      <input class="form-control" type="text" id="product-name" required="" placeholder=""
        value="<?php echo $product->getProductName() ?>" name='product_name' />
    </div>
    <div class="row g-2 mb-3">
      <div class="col-sm-6">
        <label class="form-label" for="product-price">Price</label>
        <input class="form-control" type="number" id="product-price" value="<?php echo $product->getPrice() ?>"
          name='price' />
      </div>
      <div class="col-sm-6">
        <label for="product-discount" class="form-label">Discount</label>
        <input class="form-control" type="number" id="product-discount" value="<?php echo $product->getDiscount() ?>"
          name='discount' />
      </div>
    </div>
    <div class="row g-2 mb-3">
      <div class="col-sm-6">
        <label for="example-select" class="form-label">Warranty Period</label>
        <select class="form-select" name="warranty" id="example-select">
          <option value='null'>Không có bảo hành</option>
          <?php foreach ($warrantyList->warrantyList as $warranty): ?>
            <option value=<?php echo $warranty->getWarrantyId() ?>><?php echo $warranty->getMonths() ?> Tháng</option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="row g-2 mb-3">
      <div class="col-sm-6">
        <label for="example-select" class="form-label">Brand</label>
        <select class="form-select" name="brand" id="example-select">
          <?php foreach ($brands->brandList as $brand): ?>
            <option value="<?php echo $brand->id ?>" <?php if ($brand->id == $product->getBrandID())
                 echo "selected" ?>>
              <?php echo $brand->name ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-sm-6">
        <label for="example-select" class="form-label">Category</label>
        <select class="form-select" name="category" id="example-select">
          <?php foreach ($categories->categories as $category): ?>
            <option value="<?php echo $category->getCategoryID() ?>" <?php if ($category->getCategoryName() == $product->getCategoryName())
                 echo "selected" ?>><?php echo $category->getCategoryName() ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="mb-3">
      <label for="information" class="form-label">Information</label>
      <button id="add-more-info" class="btn btn-link btn-sm">
        More info
      </button>
      <div id="information-group-edit">
        <?php foreach ($product->getInfor() as $info): ?>
          <input class="form-control" name="information[]" type="text" id="information" value="<?php echo $info ?>" />
        <?php endforeach ?>
      </div>
    </div>
    <div class="mb-3 modal-footer">
      <button type="button" class="btn btn-light" data-bs-dismiss="modal">
        Cancel
      </button>
      <button class="btn btn-primary" type="submit" id="save-change-btn"
        data-product-id="<?php echo $product->getProductLine() ?>">
        Save change
      </button>
    </div>
  </form>
</div>

<script>

  $(document).ready(function (e) {
    $('#add-more-info').click((e) => {
      console.log('clicked')
      e.preventDefault();
      let newRow = `<input class="form-control" name='information[]' type='text' id="information">`
      $('#information-group-edit').append(newRow);
    })

    $('#edit-form').submit(function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        type: "POST",
        url: "<?php echo getPath($routes, 'updateProduct') ?>",
        data: formData,
        success: function (res) {
          location.reload();
        },
        contentType: false,
        processData: false
      })
    })

  })

</script>