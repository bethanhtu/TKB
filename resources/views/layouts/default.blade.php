<!DOCTYPE html>
<html lang="en">
<header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->

  <title>TKBMOVIES</title>
</header>
<script>
        function showAlert() {
            <?php
            // Mã PHP để tạo thông báo
            $message = "Chức năng đang cập nhật";
            ?>
            alert('<?php echo $message; ?>');
        }
    </script>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- logo -->
          <a class="navbar-brand mt-2 mt-lg-0" href="/">TKBMOVIES</a>
          <!-- logo -->

          <!-- links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 color">
                <li class="nav-link"><a href="/home">Trang chủ</a></li>
                <li class="nav-link"><a href="/phimle">Phim lẻ</a></li>
                <li class="nav-link"><a href="/phimbo">Phim bộ</a></li>
                <li class="nav-link"><a href="/phimmoi">Phim mới</a></li>
                <li class="nav-link"><a href="/phimchieurap">Phim chiếu rạp</a></li>
          </ul>
          <!-- links -->
        </div>

        
        <div class="d-flex align-items-center">
        
      
        
          <div class="form-inline align-items-center">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
            
            <button onclick="showAlert()" class="btn btn-search my-2 my-sm-0">Tìm kiếm</button>
            
    
          </div>
        
          <!-- icon -->
          <div class="icon">
                <div class="icon-user">
                    <a class="nav-link"href="/login">
                      <i class="fa fa-user"></i>
                      <span>Đăng nhập</span>
                    </a>
                </div>
          </div>
          <!-- icon -->
    </div>
    
  </nav>
  <!-- Navbar -->

@yield('contents')
@yield('news')

@extends ('layouts.footer')

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
  .btn-search:hover {
    color: orange;
    border-color: orange;
  }
  .btn-search {
    color: #fff;
    border-color: #fff;
  }
  .form-control {
    background-color:#1A202C; 
  }


</style>
