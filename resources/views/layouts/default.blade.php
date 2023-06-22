<!DOCTYPE html>
<html lang="en">
<header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>TKBMOVIES</title>
</header>
<body>
<nav class="navbar navbar-expand-lg navbar-black bg-black">
    
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- logo -->
        <a class="navbar-brand mt-2 mt-lg-0" href="/">TKBMOVIES</a>

        <!-- links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 color">
              <li class="nav-link"><a href="/home">Trang chủ</a></li>
              <li class="nav-link"><a href="/phimle">Phim lẻ</a></li>
              <li class="nav-link"><a href="/phimbo">Phim bộ</a></li>
              <li class="nav-link"><a href="/phimmoi">Phim mới</a></li>
              <li class="nav-link"><a href="/phimchieurap">Phim chiếu rạp</a></li>
        </ul>
        
      </div>
      

      <!-- icon -->
      <div class="d-flex align-items-center">
      
      
        <div class="icon">
              <div class="icon-user">
                  <a class="nav-link"href="/login">
                    <i class="fa fa-user"></i>
                    <span>Đăng nhập</span>
                  </a>
              </div>
      </div>
      
    </div>
    
  </nav>

@yield('contents')

@extends('layouts.footer')
@extends('layouts.news')
</body>
</html>
<style>
  * {
        margin: 0;
        padding: 0;
        background-color: #1A202C;
    }
  .nav-link a {
    text-transform: uppercase;
    color: #fff;
  }
  .nav-link a:hover{
    color: #408BEA;
    text-decoration: none;
  }
  .navbar-brand{
    color: red;
  }
  .icon-user a{
    color: #fff;
  }
</style>
