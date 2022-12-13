<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="views/css/style.css" />
    <link rel="stylesheet" href="views/css/acc.css" />
    <link rel="stylesheet" href="views/css/cart.css" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    
      <header class="header">
        <div class="main">
          <div class="login_signup">
            <a href="index.php?act=acc">Đăng nhập / Đăng kí</a>
          </div>
          <label for="nav-input" class="nav-btn">
            <i class="bx bx-menu"></i>
          </label>
          <input
            type="checkbox"
            hidden
            name=""
            class="nav-input"
            id="nav-input"
          />
          <div class="main_mobile-nav">
            <label for="nav-input" class="nav_mobile-close">
              <i class="bx bx-x"></i>
            </label>
            <ul class="ul_nav-mobile">
              <li class="li_nav-mobile"><a href="index.php">Trang chủ</a></li>
              <li class="li_nav-mobile"><a href="index.php?act=gioithieu">Giới thiệu</a></li>
              <li class="li_nav-mobile"><a href="index.php?act=sanpham">Tour</a></li>
              <li class="li_nav-mobile"><a href="index.php?act=tintuc">Tin tức</a></li>
              <li class="li_nav-mobile"><a href="index.php?act=lienhe">Liên hệ</a></li>
              <li class="li_nav-mobile"><a href="">Đăng kí / Đăng nhập</a></li>
            </ul>
          </div>
          <label for="nav-input" class="nav-overlay"> </label>

          <div class="logo">
            <img src="views/img/logo.webp" alt="" />
          </div>
          <a href="index.php?act=addtocart">
          <div class="cart">
            <span>Đặt Tour</span>
            <i class="bx bx-cart-alt"></i>
          </div>
          </a>
        </div>
      </header>
      <nav>
        <div class="main-nav">
          <ul class="ul_nav-pc">
            <li class="li_nav-pc"><a href="index.php">Trang chủ</a></li>
            <li class="li_nav-pc"><a href="index.php?act=gioithieu">Giới thiệu</a></li>
            <li class="li_nav-pc"><a href="index.php?act=sanpham">Tour</a></li>
            <li class="li_nav-pc"><a href="index.php?act=tintuc">Tin tức</a></li>
            <li class="li_nav-pc"><a href="index.php?act=lienhe">Liên hệ</a></li>
          </ul>
        </div>
      </nav>