<?php
use App\Models\User;

if (!isLoggedIn()) {
  $_SESSION['isLoggedIn'] = false;
}
if (isLoggedIn()) {
  $user = new User();
  $user = unserialize($_SESSION['user']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?= $title ?? "Dyanmic Titles" ?>
  </title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700;800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../techshop/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="/techshop/public/css/simple-notify.min.css" />
  <link rel="stylesheet" href="/techshop/public/css/index.css">
  <link rel="stylesheet" href="../techshop/public/css/style1.css"/>
  <script src="/techshop/public/js/jquery.min.js"></script>
  <script src="/techshop/public/js/simple-notify.min.js"></script>
  <script src="/techshop/public/js/sweetalert2.all.min.js"></script>
</head>

<body>
  <div id="app">
    <header class="header">
      <div class="header__container">
        <div class="header__logo">
          <a href="<?php echo $routes->get('homepage')->getPath(); ?>">
            <img src="/techshop/public/images/page/Logo.svg" alt="Logo Techshop" class="logo" />
          </a>
        </div>
        <form class="search__form">
          <?php if ($_SESSION['showNav'] == true): ?>
          
            <input type="text" class="fontAwesome search__input" name="searchInformation"
              placeholder="&#xf002;   Search" />
            <!-- <button class="search__button" type="submit">
                <i class="fa-sharp fa-solid fa-paper-plane"></i>
              </button> -->
          <?php endif ?>
        </form>
        <nav class="nav-user">
          <?php if ($_SESSION['isLoggedIn'] == true): ?>
<<<<<<< HEAD
            <a class="nav-user__icon-box" href="<?php echo getPath($routes, 'viewCart')?>">
              <svg class="icon">
                <use xlink:href="/techshop/public/images/SVG/symbol-defs.svg#icon-location-shopping"></use>
              </svg>
            </a>
            <div class="nav-user__user">
              <img src="/techshop/public/images/productImg/Image.png" alt="User photo" class="nav-user__user-photo" />
              <ul class="nav-user__dropdown">
                <li class="nav-user__user-info">
                  <h3 class="nav-user__user-name font-size-4 text-color--1">
                    <?php echo $user->getUsername(); ?>
                  </h3>
                  <span class="nav-user__user-email font-size-3 text-color--4">
                    <?php echo $user->getEmail(); ?>
                  </span>
                </li>
                <li class="nav-user__options">
                  <a href="<?php echo $routes->get('viewOrders')->getPath() ?>" class="nav-user__option font-size-2">Đơn hàng</a>
                  <a href="<?php echo $routes->get('viewPersonalInfo')->getPath() ?>" class="nav-user__option font-size-2">Thông tin cá nhân</a>
                </li>
                <li class="nav-user__log-out">
                  <a href="<?php echo $routes->get('logout')->getPath() ?>" class="log-out btn">
                    <i class="fa-solid fa-right-from-bracket color--red font-size-1"></i>
                    <span class="color--red font-size-2">Sign Out</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        <?php endif ?>
        <?php if ($_SESSION['isLoggedIn'] == false): ?>
          <a href="login" class="btn btn__secondary">Đăng nhập</a>
          <a href="register" class="btn btn__secondary btn__secondary--active">Đăng kí</a>
        <?php endif ?>
=======

            <a class="nav-user__icon-box" href="#">
              <svg class="icon">
                <use
                  xlink:href="../techshop/public/images/img/symbol-defs.svg#icon-location-shopping"
                ></use>
              </svg>
            </a>
            <div class="nav-user__user">
              <img
                src="../techshop/public/images/img/Image.png"
                alt="User photo"
                class="nav-user__user-photo"
              />
              <ul class="nav-user__dropdown">
                <li class="nav-user__user-info">
                  <h3 class="nav-user__user-name font-size-4 text-color--1">
                    Hà Quốc Vĩ
                  </h3>
                  <span class="nav-user__user-email font-size-3 text-color--4">
                    quocvi1701@gmail.com
                  </span>
                </li>
                <li class="nav-user__options">
                  <a
                    href=""
                    class="nav-user__option font-size-2"
                    >Đơn hàng</a
                  >
                  <a
                    href=""
                    class="nav-user__option font-size-2"
                    >Thông tin cá nhân</a
                  >
                </li>
                <li class="nav-user__log-out">
                  <button class="log-out btn">
                    <i
                      class="fa-solid fa-right-from-bracket color--red font-size-1"
                    ></i>
                    <span class="color--red font-size-2">Sign Out</span>
                  </button>
                </li>
              </ul>
            </div>
          <!-- </nav> -->

          <?php endif ?>
          <?php if ($_SESSION['isLoggedIn'] == false): ?>
            <a href="login" class="btn btn__secondary">Đăng nhập</a>
            <a href="register" class="btn btn__secondary btn__secondary--active">Đăng kí</a>
          <?php endif ?>
>>>>>>> c69c1ac (Update Register)
        </nav>
      </div>
    </header>
    <?php require("$name.view.php"); ?>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__left">
          <img src="/techshop/public/images/page/Logo.svg" alt="" class="logo" />
          <p class="footer__detail para--sm u-margin-bottom-big">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
            facilis labore ab blanditiis deleniti consequuntur recusandae quod
            inventore, sint illum eligendi expedita dolores possimus,
            voluptatum, omnis sunt. Accusamus, repellendus aliquid?
          </p>
          <div class="socials">
            <a href="#" class="social__icon facebook__icon">
              <svg class="svg--icon">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-facebook"></use>
              </svg>
            </a>
            <a href="#" class="social__icon instagram__icon"><svg class="svg--icon">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-instagram-with-circle"></use>
              </svg>
            </a>
            <a href="#" class="social__icon linkedin__icon"><svg class="svg--icon">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-linkedin"></use>
              </svg>
            </a>
            <a href="#" class="social__icon twitter__icon"><svg class="svg--icon">
                <use xlink:href="/techshop/public/images/svg/symbol-defs.svg#icon-twitter"></use>
              </svg>
            </a>
          </div>
        </div>
        <div class="footer__right">
          <div class="footer__contact">
            <h3 class="heading__territory u-margin-bottom-big">Techshop</h3>

            <a href="#" class="para--sm text--hover u-margin-bottom-small">About Us</a>
            <a href="#" class="para--sm text--hover u-margin-bottom-small">Contact Us</a>
            <a href="#" class="para--sm text--hover u-margin-bottom-small">FAQ</a>
          </div>
          <div class="footer__contact">
            <h3 class="heading__territory u-margin-bottom-big">Legal</h3>

            <a href="#" class="para--sm text--hover u-margin-bottom-small">Terms and Condition</a>
            <a href="#" class="para--sm text--hover u-margin-bottom-small">Privacy Policy</a>
          </div>
          <div class="footer__contact">
            <h3 class="heading__territory u-margin-bottom-big">Techshop</h3>

            <a href="#" class="para--sm text--hover u-margin-bottom-small">support@techshop.com</a>
            <a href="#" class="para--sm text--hover u-margin-bottom-small">The
            </a>
          </div>
        </div>
        <div class="copyright u-margin-top-big">
          &copy; 2023. All rights reserved
        </div>
      </div>
    </footer>
  </div>
</body>
<script src="/techshop/public/js/index.js"></script>
<script>
  $(document).ready(function(e) {
    $('.search__form').submit(function(e) {
      e.preventDefault();
      let searchString = $('.search__input').val()
      let url = "<?php echo getPath($routes, 'search') ?>"
      window.location.replace(url.replace('{searchStr}', `${searchString}`));
    })
  })

</script>
</html>