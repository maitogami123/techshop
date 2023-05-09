<div class="breadcrumb container">
  <a href="/techshop" class="breadcrumb__link text-color--1 font-size-2">
    <svg class="icon">
      <use xlink:href="/techshop/public/images/SVG/symbol-defs.svg#icon-home"></use>
    </svg>
    <span class="para--sm">Trang chủ</span>
  </a>
  <svg class="icon text-color--2">
    <use xlink:href="/techshop/public/images/SVG/symbol-defs.svg#icon-chevron-right"></use>
  </svg>
  <a href="" class="breadcrumb__link">
    <span class="para--sm text-color--1"><?php echo strtoupper(json_decode($_POST['category']))?></span>
  </a>
</div>
<section class="container u-margin-bottom-big">
  <div class="filter-product">
    <div class="filter-price">
      <div class="filter-range">
        <div id="nonlinear" class="noUi-target noUi-ltr noUi-horizontal"></div>
        <span class="example-val" id="lower-value"></span>
        <span class="example-val" id="upper-value"></span>
      </div>
    </div>

    <div class="filter-options">
      <label for="status-select " class="form__label font-size-1">Filter:</label>
      <select class="form-select form__input" id="status-select">
        <option selected="">Sản phẩm nổi bật</option>
        <option value="1">Giá trị: Tăng dần</option>
        <option value="2">Giá trị: Giảm dần</option>
        <option value="3">Tên: A - Z</option>
        <option value="4">Tên: Z - A</option>
        <option value="5">Sản phẩm mới nhất</option>
        <option value="6">Sản phẩm cũ nhất</option>
      </select>
    </div>
    <div class="filter-selections">
      <div class="filter-selection filter-price-checkbox">
        <h4 class="font-size-1 text-color--3">Giá:</h4>
        <div class="form__checkbox-box">
          <div class="form__field--inline">
            <input type="checkbox" class="form__input" id="customCheck1" />
            <label class="form-check-label" for="customCheck1">100.000đ - 500.000đ</label>
          </div>
          <div class="form__field--inline">
            <input type="checkbox" class="form__input" id="customCheck2" />
            <label class="form-check-label" for="customCheck2">500.000đ - 2.000.000đ</label>
          </div>
          <div class="form__field--inline">
            <input type="checkbox" class="form__input" id="customCheck2" />
            <label class="form-check-label" for="customCheck2">2.000.000đ - 10.000.000đ</label>
          </div>
          <div class="form__field--inline">
            <input type="checkbox" class="form__input" id="customCheck2" />
            <label class="form-check-label" for="customCheck2">10.000.000đ - 20.000.000đ</label>
          </div>
          <div class="form__field--inline">
            <input type="checkbox" class="form__input" id="customCheck2" />
            <label class="form-check-label" for="customCheck2">20.000.000đ - 50.000.000đ</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container div-8-col u-margin-bottom-huge">
  <h2 class="heading__secondary u-center-text u-margin-bottom-medium grid-full-app">
    <?php echo strtoupper(json_decode($_POST['brand']))?>
  </h2>
  <div class="product__container grid-full-app grid-4-col-auto" id="render-cart">
    <?php foreach ($productList->productList as $product): ?>
      <div class="cart">
        <a href="/techshop/product/<?php echo $product->getProductLine() ?>" class="cart__item">
          <img src="/techshop/public/images/thumbNail/<?php echo $product->getThumbNail() ?>" alt="" class="cart__img" />
          <div class="cart__wrapper">
            <h3 class="cart__name font-size-1">
              <?php echo $product->getProductName() ?>
            </h3>
            <span class="cart__price font-color-1">
              <?php echo number_format($product->getPrice()) ?>
            </span>
            <button class="btn btn__primary btn__primary--active add-to-cart">
              Thêm vào giỏ
            </button>
          </div>
        </a>
      </div>
    <?php endforeach ?>
  </div>
  <nav class="pagination pagination--rounded">
    <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
      &lt;
    </button>

    <div id="pagination-numbers"></div>

    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
      &gt;
    </button>
  </nav>
</section>

<script src="/techshop/public/js/filter.js"></script>
<script src="/techshop/public/js/productPagination.js"></script>
<script src="https://unpkg.com/nouislider@10.0.0/distribute/nouislider.min.js"></script>
<script>
  var nonLinearSlider = document.getElementById("nonlinear");

  noUiSlider.create(nonLinearSlider, {
    connect: true,
    behaviour: "tap",
    step: 50000,
    start: [50000, 100000000],
    range: {
      min: 50000,
      max: 100000000,
    },
  });

  var nodes = [
    document.getElementById("lower-value"), // 0
    document.getElementById("upper-value"), // 1
  ];

  // Display the slider value and how far the handle moved
  // from the left edge of the slider.
  nonLinearSlider.noUiSlider.on(
    "update",
    function (values, handle, unencoded, isTap, positions) {
      nodes[handle].innerHTML = values[handle];
      verifyBoxes(values);
    }
  );

  function verifyBoxes(v) {
    var boxesArr = [].slice
      .call(document.querySelectorAll(".box"))
      .map(function (item) {
        return item;
      });

    for (var i = 0; i < boxesArr.length; i++) {
      var box = boxesArr[i];
      var price = box.querySelector(".price").textContent;
      var priceNumb = parseInt(price);
      var vMin = v[0];
      var vMax = v[1];

      if (priceNumb > vMax || priceNumb < vMin) {
        box.classList.add("-close");
      } else {
        box.classList.remove("-close");
      }
    }
  }
</script>