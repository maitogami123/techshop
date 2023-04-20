
<div class="breadcrumb container">
    <a href="<?php echo $routes->get('homepage')->getPath(); ?>" class="breadcrumb__link text-color--1 font-size-2">
        <svg class="icon">
            <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-home"></use>
        </svg>
        <span class="para--sm">Trang chủ</span>
    </a>
    <svg class="icon text-color--2">
        <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-chevron-right"></use>
    </svg>
    <a href="" class="breadcrumb__link">
        <span class="para--sm text-color--1"><?php echo $product->getBrandID()?></span>
    </a>
    <svg class="icon text-color--2">
        <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-chevron-right"></use>
    </svg>
    <span class="breadcrumb__link">
        <span class="para--sm text-color--2"><?php echo $product->getProductName()?></span>
    </span>
</div>
<section class="container product-detail__areas u-margin-bottom-huge">
    <div class="product__img--default">
        <img src="<?php echo "/techshop/public/images/productImg/". $product->getProductLine(). "/" . $product->getImages()[0]?>" alt="" />
    </div>
    <div class="product__img-slide-list">
        <?php foreach($product->getImages() as $image):?>
            <div class="product__img-slide-item">
                <img src="<?php echo "/techshop/public/images/productImg/". $product->getProductLine(). "/" . $image?>" alt="" class="product__img-item" />
            </div>
        <?php endforeach;?>
        <div class="slide__arrow slide__container">
            <svg class="arrow__item">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-chevron-left"></use>
            </svg>
            <svg class="arrow__item">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-chevron-right"></use>
            </svg>
        </div>
    </div>
    <div class="product__detail--container">
        <h3 class="heading__secondary">
            <?php echo $product->getProductName() ?>
        </h3>
        <div class="product__details">
            <?php foreach ($product->getInfor() as $productInfo): ?>
                <div class="product__detail">
                    <svg class="icon">
                        <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-checkmark-outline"></use>
                    </svg>
                    <p class="para--sm text-color--2">
                        <?php echo $productInfo?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
        <div class="product__prices">
            <?php if($product->getDiscount() != 0): ?>
                <div class="product__price--1 heading__secondary">
                    <?php echo number_format($product->getPrice() * ($product->getDiscount() / 100)) ?>₫
                </div>
                <div class="product__price--2"><?php echo number_format($product->getPrice()) ?>₫</div>
            <?php endif?>
            <?php if($product->getDiscount() == 0): ?>
                <div class="product__price--1 heading__secondary">
                    <?php echo number_format($product->getPrice()) ?>₫
                </div>
            <?php endif?>
            
        </div>
        <a href="./shopping-cart.html" class="btn btn__primary btn__primary--active u-center-text">Thêm vào giỏ hàng
        </a>
    </div>
</section>
<section class="product-preview__random container">
    <h2 class="heading__secondary u-margin-bottom-medium">
        Có thể bạn tìm kiếm
    </h2>
    <div class="product__container grid-4-col">
        <div class="cart">
            <img src="/techshop/public/images/productImg/Image.png" alt="" class="cart__img" />
            <div class="cart__wrapper">
                <h3 class="cart__name font-size-1">
                    MacBook Air M1 Chip Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit.
                </h3>
                <span class="cart__price font-color-1">Đ23.771.205</span>
                <button class="btn btn__primary btn__primary--active add-to-cart">
                    Thêm vào giỏ
                </button>
            </div>
        </div>
        <div class="cart">
            <img src="/techshop/public/images/productImg/Image.png" alt="" class="cart__img" />
            <div class="cart__wrapper">
                <h3 class="cart__name font-size-1">
                    MacBook Air M1 Chip Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit.
                </h3>
                <span class="cart__price font-color-1">Đ23.771.205</span>
                <button class="btn btn__primary btn__primary--active add-to-cart">
                    Thêm vào giỏ
                </button>
            </div>
        </div>
        <div class="cart">
            <img src="/techshop/public/images/productImg/Image.png" alt="" class="cart__img" />
            <div class="cart__wrapper">
                <h3 class="cart__name font-size-1">
                    MacBook Air M1 Chip Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit.
                </h3>
                <span class="cart__price font-color-1">Đ23.771.205</span>
                <button class="btn btn__primary btn__primary--active add-to-cart">
                    Thêm vào giỏ
                </button>
            </div>
        </div>
        <div class="cart">
            <img src="/techshop/public/images/productImg/Image.png" alt="" class="cart__img" />
            <div class="cart__wrapper">
                <h3 class="cart__name font-size-1">
                    MacBook Air M1 Chip Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit.
                </h3>
                <span class="cart__price font-color-1">Đ23.771.205</span>
                <button class="btn btn__primary btn__primary--active add-to-cart">
                    Thêm vào giỏ
                </button>
            </div>
        </div>
        <div class="slide__arrow slide__container">
            <svg class="arrow__item">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-chevron-left"></use>
            </svg>
            <svg class="arrow__item">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-chevron-right"></use>
            </svg>
        </div>
    </div>
</section>