<div class="modal-header modal-colored-header bg-info">
  <h4 class="modal-title" id="fill-info-modalLabel">
    Brand's Information
  </h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="modal-body">
  <form class="ps-3 pe-3" action="#">
    <div class="mb-3">
      <label for="brand-id" class="form-label">Brand Id</label>
      <p class="form-control" type="text">
        <?php echo $brand->getId() ?>
      </p>
    </div>
    <div class="mb-3">
      <label for="brand-name" class="form-label">Brand Name</label>
      <p class="form-control" type="text">
        <?php echo $product->getProductName() ?>
      </p>
    </div>

      <label for="information" class="form-label">Information</label>
      <div id="information-group">
        <?php foreach ($product->getInfor() as $info): ?>
          <p class="form-control" type="text">
            <?php echo $info ?>
          </p>
        <?php endforeach ?>
      </div>
    </div>
    <div class="mb-3 modal-footer">
      <button type="button" class="btn btn-light" data-bs-dismiss="modal">
        Close
      </button>
    </div>
  </form>
</div>