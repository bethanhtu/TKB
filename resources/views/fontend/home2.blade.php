@extends ('layouts.default')
@extends ('layouts.news')
@section('contents')
// Tạo mã JavaScript để hiển thị thông báo

        $script = "<script type='text/javascript'>alert('Chức năng đang nhập nhật');</script>";

<div class="container">
        <div class="all">
            <div class="pt-3 p-2">
            <h2 class="uppercase tracking-wider  text-lg font-semibold text-white mt-1">Phim mới nổi bật</h2>
            </div>
            <!-- Phim mới nổi bật -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 flims">
                
                <!-- Thẻ -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-dark">
                        <img src="https://cdnimg.vietnamplus.vn/uploaded/tpuohuo/2023_06_08/transformers.jpg" class="card-img-top" alt="Hollywood"/>
                        <div class="card-body">
                            <h5 class="card-title">Transformers 7</h5>
                            <p class="card-text">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <a href="/play2" class="flim">
                            <div class="card bg-dark">
                            <img src="https://photo-cms-anninhthudo.epicdn.me/w800/Uploaded/2023/xtsmr/2023_05_20/dan-sao-rat-hung-hau-cua-fast-x-1760-1894.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                            <div class="card-body">
                                <h5 class="card-title">Fast X</h5>
                                <p class="card-text">2023</p>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/play3" class="flim">
                            <div class="card bg-dark">
                            <img src="https://static.toiimg.com/photo/msid-99012361/99012361.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                            <div class="card-body">
                                <h5 class="card-title">John wich 4</h5>
                                <p class="card-text">2023</p>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/play" class="flim">
                        <div class="card bg-dark">
                        <img src="https://cdnimg.vietnamplus.vn/uploaded/xpcwvovt/2023_04_26/avatar.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">Avatar 2</h5>
                            <p class="card-text">2023</p>
                        </div>
                        </a>
                    </div>
                   
                </div>
                <!-- Thẻ -->
                    
    
            </div>
        </div> 
        <!--phim mới -->

        <!--Phim lẻ -->
        <div class="now-playing-movies py-50 mt-5">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold text-white pb-5  p-2">Phim  chiếu rạp mới cập nhật</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 flims">
                <!-- Thẻ -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-dark">
                        <img src="https://images2.thanhnien.vn/528068263637045248/2023/6/1/nang-tien-ca-live-action-1-1685628374507791448488.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title text-white">Nàng Tiên Cá</h5>
                            <p class="card-text text-white">Nàng Tiên Cá 2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://i.ytimg.com/vi/tbZ-BmOBsuc/maxresdefault.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">Vây Hãm</h5>
                            <p class="card-text">Không Lối Thoát 2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://cdnimg.vietnamplus.vn/uploaded/tpuohuo/2023_06_08/transformers.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title ">Transformers 7</h5>
                            <p class="card-text text-white">Transformers 2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://ntvb.tmsimg.com/assets/p12742479_v_h8_ad.jpg?w=960&h=540" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">The Flash</h5></h5>
                            <p class="card-text">The Flash 2023</p>
                    </div>
                    </div>
                </div>
                    <!-- Thẻ -->
                    
                </div>
        </div>
        <!--Phim lẻ -->

        <div class="now-playing-movies py-50 mt-5">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold text-white  pb-5  p-2">Phim bộ mới cập nhật</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 flims">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                        <div class="card bg-dark">
                        <img src="https://image.tmdb.org/t/p/w500/jcQawFDaQYyES4HR4OSHDXiZQye.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title text-white">Khi chạy về phía em</h5>
                            <p class="card-text text-white">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://image.tmdb.org/t/p/w500/fFJyFKWE8MSlyFJB4K9pOlZUdrV.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title ">Khu vườn dối trá</h5>
                            <p class="card-text text-white">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://image.tmdb.org/t/p/w500/tbBpnuv59ic0zwmDZ95ijwEsFn6.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">Khách sạn vương giả</h5></h5>
                            <p class="card-text">2023</p>
                        </div>
                        </div>
                    </div>
        </div> <!-- end Phim bộ -->

    </div>
    
@endsection

<style>
    *{
        margin: 0;
        padding: 0;
        background-color: #1A202C;
    }
.card-img-top {
    height: 200px;
}
.col {
    color: #fff;
}
.col a  {
    color: #fff;
}
.col a:hover {
    text-decoration: none;
    color: orange;
}
.flims .col:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: #000;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
.flims .col:hover {
    text-decoration: none;
    transform: translateY(-12px);
  }
  .container  a:hover {
    text-decoration: none;
  }
  .container {
    position: relative;
  }
</style>