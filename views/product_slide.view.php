<div class="product-preview__catagories">
  <h2 class="heading__secondary u-margin-bottom-medium u-center-text">
    <?php echo $section ?>
  </h2>
  <div class="product__container grid-4-col">
    <?php
    $count = 0;
    foreach ($productList->productList as $product): ?>
      <a href="./product/<?php echo $product->getProductLine() ?>" class="cart">
        <img src="<?php echo "/techshop/public/images/thumbNail/" . $product->getThumbNail() ?>" alt="" class="cart__img" />
        <div class="cart__wrapper">
          <h3 class="cart__name font-size-1">
            <?php echo $product->getProductName() ?>
          </h3>
          <span class="cart__price font-color-1">
            <?php echo number_format($product->getPrice()) ?>đ
          </span>
          <?php if ($product->getStock() <= 0):?>
            <button class="btn" disabled>
              Hết Hàng
            </button>
          <?php else: ?>
            <button class="btn btn__primary btn__primary--active add-to-cart" data-stock="<?php echo $product->getStock()?>" data-id="<?php echo $product->getProductLine()?>">
              Thêm vào giỏ
            </button>
          <?php endif;?>
        </div>
      </a>
      <?php
      $count++;
      if ($count >= 4)
        break;
      ?>
    <?php endforeach; ?>
  </div>
  <button class="btn btn__secondary btn--size-1 product-see-more u-margin-top-big" type="submit">
    Xem thêm
  </button>
</div>

<script>
  $(document).ready(function(e) {
    let cart = {};
    if (localStorage.getItem('cart')) {
      cart = JSON.parse(localStorage.getItem('cart'))
    }
    
    $('.add-to-cart').click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      const productId = $(this).attr('data-id')
      if (Object.keys(cart).find(key => key === productId)) {
        if (+cart[productId] + 1 > $(this).attr('data-stock')) {
          Swal.fire({
            toast: true,
            icon: 'error',
            position: 'top-end',
            title: 'Sản phẩm đã hết hàng!',
            showConfirmButton: false,
            timer: 1500
          })
        } else {
          cart[productId] = +cart[productId] + 1
          Swal.fire({
            toast: true,
            icon: 'success',
            position: 'top-end',
            title: 'Thêm sản phẩm vào giỏ hàng thành công!',
            showConfirmButton: false,
            timer: 1500
          })
        }
      } else {
        cart[productId] = 1
        Swal.fire({
            toast: true,
            icon: 'success',
            position: 'top-end',
            title: 'Thêm sản phẩm vào giỏ hàng thành công!',
            showConfirmButton: false,
            timer: 1500
          })
      }
      localStorage.setItem('cart', JSON.stringify(cart))

    })
  })
</script>