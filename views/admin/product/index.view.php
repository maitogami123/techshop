<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Line</th>
      <th scope="col">Product Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Created at</th>
      <th scope="col">Created by</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $index = 1;
    foreach ($productList->productList as $product): ?>
      <tr id="<?php echo $product->getProductLine()?>">
        <th scope="row">
          <?php echo $index++ ?>
        </th>
        <td>
          <?php echo $product->getProductLine() ?>
        </td>
        <td>
          <?php echo $product->getProductName() ?>
        </td>
        <td>
          <?php echo $product->getBrandID() ?>
        </td>
        <td>
          <?php echo $product->getCategory() ?>
        </td>
        <td>
          <?php echo number_format($product->getPrice()) ?>
        </td>
        <td>
          <?php echo $product->getDiscount() ?>
        </td>
        <td>
          <?php echo $product->getCreatedAt() ?>
        </td>
        <td>
          <?php echo $product->getCreatedBy() ?>
        </td>
        <td><a data-id="<?php echo $product->getProductLine() ?>" class="edit-btn">Edit</a></td>
        <td><a data-id="<?php echo $product->getProductLine() ?>" class="delete-btn">Delete</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script>
  $(document).ready(function () {
    <?php
      if (!isLoggedIn() || !in_array('P_Delete', $user->getPermissions())):
    ?>
    $('.delete-btn').click(function (e) {
      let id =  $(this).attr('data-id');
      Swal.fire({
        title: 'Do you want to delete this product?',
        showCancelButton: true,
        confirmButtonText: 'Delete',
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            method: 'POST',
            url: "<?php echo getPath($routes, 'deleteProduct') ?>".replace('{id}', id),
            success: (function (res) {
              Swal.fire({
                title: 'Success!',
                text: 'Product successfully deleted!',
                icon: 'success',
                confirmButtonText: 'Cool!'
              })
              $("#"+id).remove();
            }),
          })
        }
      })
      
    })
    <?php else:?>
      $('.delete-btn').click(function (e) {
        Swal.fire({
                title: 'Error!',
                text: 'You don\'t have the permission to delete product!',
                icon: 'error',
                confirmButtonText: 'OK'
              })
      })
    <?php endif;?> 
    
    $('.edit-btn').click(function (e) {
      window.location.href = "<?php echo getPath($routes, 'editProduct') ?>".replace('{id}', $(this).attr('data-id'));
    })
  })
</script>