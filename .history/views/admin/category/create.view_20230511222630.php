<?php
use App\Models\User;

if (!isLoggedIn()) {
  $_SESSION['isLoggedIn'] = false;
}
if (isLoggedIn()) {
  $user = new User();
  $user = unserialize($_SESSION['user']);
}
if (!isLoggedIn() || !in_array('P_Create', $user->getPermissions()))
  redirect($routes->get('homepage')->getPath())
    ?>

<div class="modal-header modal-colored-header bg-info">
        <h4 class="modal-title" id="fill-info-modalLabel">
          Add New category
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
      </div>
      <div class="modal-body">
        <form class="ps-3 pe-3" id="create-form" method="POST" action="" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="product-line" class="form-label">Line</label>
            <input class="form-control" type="text" name='categoryId' id="product-line" placeholder="" />
          </div>
          <div class="mb-3">
            <label for="product-name" class="form-label">Name</label>
            <input class="form-control" type="text" name='categoryName' id="product-name" placeholder="" />
          </div>          
          <div class="mb-3 modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
              Close
            </button>
            <button class="btn btn-success" type="submit" id="submit">
              Add new category
            </button>
          </div>
        </form>
      </div>