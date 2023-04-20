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
    <a data-category='MSI' class="btn btn__primary btn__primary--active nav__link">Tất cả</a>
    <a data-category='ACER' class="btn btn__primary nav__link">ACER</a>
    <a data-category='MSI' class="btn btn__primary nav__link">Gaming</a>
    <a data-category='ACER' class="btn btn__primary nav__link">Đồ họa - Kĩ thuật</a>
    <a data-category='MSI' class="btn btn__primary nav__link">Cảm ứng</a>
    <a data-category='ACER' class="btn btn__primary nav__link">Linh kiện</a>
</nav>
<div class="product-preview container u-margin-bottom-huge u-margin-top-big">

</div>
<script>
    $(document).ready(function(e) {
        $('.btn.btn__primary')[0].click();
    })

    $('.btn.btn__primary.nav__link').click(function(e) {
        e.preventDefault();
        $.ajax({
            method: 'GET',
            url: '<?php echo getPath($routes, 'getCategory')?>',
            data: 'content=' + $(this).attr('data-category'),
            success: function(res) {
                $('.product-preview').html(res)
                $('.btn.btn__primary.nav__link').removeClass('btn__primary--active')
                e.target.classList.add('btn__primary--active')
            }
        })
    })

</script>