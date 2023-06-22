@extends ('layouts.default')
@section('contents')
<div class="container mx-auto px-4 pt-16">
        <div class="popular-movies ">
            <h2 class="uppercase tracking-wider  text-lg font-semibold text-white mt-5">Phim lẻ nổi bật</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                        <div class="card bg-dark">
                        <iframe width="300" height="200" src="https://www.youtube.com/watch?v=Roru521XL6U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body ">
                            <h5 class="card-title text-white">The idol</h5>
                            <p class="card-text text-white">The idol 2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark">
                        <iframe width="300" height="200" src="https://www.youtube.com/watch?v=AE4fIL9R5jM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">The idol</h5>
                            <p class="card-text">The idol 2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">The idol</h5>
                            <p class="card-text">The idol 2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">The idol 2023</p>
                        </div>
                        </div>
                    </div>
                </div>
        </div> <!-- end-phim mới -->
@endsection
