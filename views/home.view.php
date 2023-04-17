<div class="slide-show container">
    <div class="slider">
        <div class="slide"></div>
        <div class="slide__arrow"></div>
        <div class="slide__panigation"></div>
    </div>
    <div class="banners">
        <img src="/techshop/public/images/banner/banner_1.png" alt="" class="banner" />
        <img src="/techshop/public/images/banner/banner_2.png" alt="" class="banner" />
    </div>
</div>

<nav class="nav container">
    <a href="./product.html" class="btn btn__primary btn__primary--active nav__link">Tất cả</a>
    <a href="" class="btn btn__primary nav__link">Văn phòng</a>
    <a href="" class="btn btn__primary nav__link">Gaming</a>
    <a href="" class="btn btn__primary nav__link">Đồ họa - Kĩ thuật</a>
    <a href="" class="btn btn__primary nav__link">Cảm ứng</a>
    <a href="" class="btn btn__primary nav__link">Linh kiện</a>
</nav>
<div class="product-preview container u-margin-bottom-huge u-margin-top-big">
    <div class="product-preview__catagories">
        <h2 class="heading__secondary u-margin-bottom-medium u-center-text">
            <?php echo $brand?>
        </h2>
        <div class="product__container grid-4-col">
            <?php 
            $count = 0;
            foreach ($productList->productList as $product):?>
                <a href="./product/<?php echo $product->getProductLine()?>" class="cart">
                    <img src="<?php echo "/techshop/public/images/thumbNail/". $product->getThumbNail()?>" alt="" class="cart__img" />
                    <div class="cart__wrapper">
                        <h3 class="cart__name font-size-1">
                            <?php echo $product->getProductName()?>
                        </h3>
                        <span class="cart__price font-color-1"><?php echo number_format($product->getPrice())?>đ</span>
                        <button class="btn btn__primary btn__primary--active add-to-cart">
                            Thêm vào giỏ
                        </button>
                    </div>
                </a>
                <?php 
                    $count++;
                    if ($count >= 4)
                        break;
                ?>
            <?php endforeach;?>
        </div>
        <button class="btn btn__secondary btn--size-1 product-see-more u-margin-top-big" type="submit">
            Xem thêm
        </button>
    </div>
</div>