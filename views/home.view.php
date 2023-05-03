<section class="slide-show container">
    <div class="sidebar">
        <div class="sidebar__item">
            <a href="" class="sidebar__link font-size-2 text-color--4">
                <i class="fa-solid fa-laptop sidebar__icon"></i>
                <span>Máy tính xách tay</span>
            </a>
        </div>
        <div class="sidebar__item">
            <a href="" class="sidebar__link font-size-2 text-color--4">
                <i class="fa-solid fa-desktop"></i>
                <span>Máy tính để bàn</span>
            </a>
        </div>
        <div class="sidebar__item">
            <a href="" class="sidebar__link font-size-2 text-color--4">
                <i class="fa-solid fa-keyboard"></i>
                <span>Bàn phím</span>
            </a>
        </div>
        <div class="sidebar__item">
            <a href="" class="sidebar__link font-size-2 text-color--4">
                <i class="fa-regular fa-computer-mouse fontAwesome"></i>
                <span>Chuột</span>
            </a>
        </div>
        <div class="sidebar__item">
            <a href="" class="sidebar__link font-size-2 text-color--4">
                <i class="fa-solid fa-headphones"></i>
                <span>Tai nghe</span>
            </a>
        </div>
    </div>
    <div class="slider">
        <div class="slide"></div>
        <div class="slide__arrow"></div>
        <div class="slide__panigation"></div>
    </div>
</section>

<nav class="nav container">
    <a data-category='All' class="btn btn__primary btn__primary--active nav__link">Tất cả</a>
    <a data-category='laptop' class="btn btn__primary nav__link">Laptop</a>
    <a data-category='pc' class="btn btn__primary nav__link">Máy bàn</a>
    <a data-category='vga' class="btn btn__primary nav__link">VGA</a>
    <a data-category='cpu' class="btn btn__primary nav__link">CPU</a>
    <a data-category='gear' class="btn btn__primary nav__link">Linh kiện</a>
</nav>
<div class="product-preview container u-margin-bottom-huge u-margin-top-big">
</div>
<script>
    $(document).ready(function (e) {
        $('.btn.btn__primary')[0].click();
    })

    $('.btn.btn__primary.nav__link').click(function (e) {
        e.preventDefault();
        $.ajax({
            method: 'GET',
            url: '<?php echo getPath($routes, 'getCategory') ?>',
            data: 'content=' + $(this).attr('data-category'),
            success: function (res) {
                $('.product-preview').html(res)
                $('.btn.btn__primary.nav__link').removeClass('btn__primary--active')
                e.target.classList.add('btn__primary--active')
            }
        })
    })

</script>