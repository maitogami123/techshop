<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5"><?php echo $category ?></h1>
    </div>
  </div>
  <div class="row">
    <form action="" method="post">
      <div class="form-group">
        <label for="product_line" class="form-label">Product Line</label>
        <input class="form-control" name='product_line' type='text' id="product_line">
      </div>
      <div class="form-group">
        <label for="product_name" class="form-label">Product Name</label>
        <input class="form-control" name='product_name' type='text' id="product_name">
      </div>
      <div class="form-group">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name='price' type='text' id="price">
      </div>
      <div class="form-group">
        <label for="discount" class="form-label">Discount</label>
        <input type="text" class="form-control" name='discount' type='text' id="discount">
      </div>
      <div class="form-group">
        <label for="brand" class="form-label">Brand</label>
        <select id="brand" name="brand" class="form-select">
          <option selected>---Choose---</option>
          <option>MSI</option>
          <option>ACER</option>
          <option>HP</option>
        </select>
      </div>
      <div class="form-group">
        <label for="category" class="form-label">Category</label>
        <select id="category" name="category" class="form-select">
          <option selected>---Choose---</option>
          <option>Bàn phím</option>
          <option>Laptop</option>
          <option>Tai nghe</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" value="Create Term"></input>
      </div>
    </form>
  </div>
</div>