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
  <link rel="stylesheet" href="/techshop/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="/techshop/public/css/index.css">
</head>

<body>
  <div id="app">
    <header class="header">
      <div class="header__container">
        <div class="header__logo">
          <img src="/techshop/public/images/Logo.svg" alt="Logo Techshop" class="logo" />
        </div>
        <form class="search__form">
          <input type="text" class="fontAwesome search__input" name="searchInformation"
            placeholder="&#xf002;   Search" />
          <!-- <button class="search__button" type="submit">
              <i class="fa-sharp fa-solid fa-paper-plane"></i>
            </button> -->
        </form>
        <nav class="nav-user">
          <a href="./sign-in.html" class="btn btn__secondary">Đăng nhập</a>
          <a href="./register.html" class="btn btn__secondary btn__secondary--active">Đăng kí</a>
        </nav>
      </div>
    </header>
      <section>
        <?php require("$name.view.php"); ?>
      </section>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__left">
          <img src="./img/Logo.svg" alt="" class="logo" />
          <p class="footer__detail para--sm u-margin-bottom-big">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
            facilis labore ab blanditiis deleniti consequuntur recusandae quod
            inventore, sint illum eligendi expedita dolores possimus,
            voluptatum, omnis sunt. Accusamus, repellendus aliquid?
          </p>
          <div class="socials">
            <a href="#" class="social__icon facebook__icon">
              <svg class="svg--icon">
                <use xlink:href="img/symbol-defs.svg#icon-facebook"></use>
              </svg>
            </a>
            <a href="#" class="social__icon instagram__icon"
              ><svg class="svg--icon">
                <use
                  xlink:href="img/symbol-defs.svg#icon-instagram-with-circle"
                ></use>
              </svg>
            </a>
            <a href="#" class="social__icon linkedin__icon"
              ><svg class="svg--icon">
                <use xlink:href="img/symbol-defs.svg#icon-linkedin"></use>
              </svg>
            </a>
            <a href="#" class="social__icon twitter__icon"
              ><svg class="svg--icon">
                <use xlink:href="img/symbol-defs.svg#icon-twitter"></use>
              </svg>
            </a>
          </div>
        </div>
        <div class="footer__right">
          <div class="footer__contact">
            <h3 class="heading__territory u-margin-bottom-big">Techshop</h3>

            <a href="#" class="para--sm text--hover u-margin-bottom-small"
              >About Us</a
            >
            <a href="#" class="para--sm text--hover u-margin-bottom-small"
              >Contact Us</a
            >
            <a href="#" class="para--sm text--hover u-margin-bottom-small"
              >FAQ</a
            >
          </div>
          <div class="footer__contact">
            <h3 class="heading__territory u-margin-bottom-big">Legal</h3>

            <a href="#" class="para--sm text--hover u-margin-bottom-small"
              >Terms and Condition</a
            >
            <a href="#" class="para--sm text--hover u-margin-bottom-small"
              >Privacy Policy</a
            >
          </div>
          <div class="footer__contact">
            <h3 class="heading__territory u-margin-bottom-big">Techshop</h3>

            <a href="#" class="para--sm text--hover u-margin-bottom-small"
              >support@techshop.com</a
            >
            <a href="#" class="para--sm text--hover u-margin-bottom-small"
              >The
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
<script src="/techshop/public/js/jquery.min.js"></script>

</html>