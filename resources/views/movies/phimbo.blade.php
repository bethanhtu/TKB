@extends ('layouts.default')
@section('contents')
<div class="container mx-autopt-16">

        <div class="pt-3 p2">
            <h2 class="uppercase tracking-wider  text-lg font-semibold text-white mt-1">Phim bộ mới cập nhật</h2>
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
        </div> <!-- end-phim mới -->
        <style>
    .container {
        background-color: #1A202C;
    }
</style>
@endsection
