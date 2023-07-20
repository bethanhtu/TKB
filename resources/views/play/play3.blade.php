@extends('layouts.default')

@section('contents')

<div class="container flex-center">
<div class="play">
    <!-- play -->
    <div class="movie-info text-white"> 
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row flex-direction: center">

        <iframe width="100%" height="470px" src="https://hd1080.opstream2.com/share/8c3b5e395a73855eb15bf81d2f249f00" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">John Wich 4</h2>
                <div class="flex flex-wrap items-center text-white text-sm">
                    
                    <span class="ml-1">12.322 views</span>
                    <span class="mx-2">|</span>
                    <span>6/12/2022</span>
                    <span class="mx-2">|</span>
                    <span>phim chiếu rạp</span>
                </div>

                <p class="text-gray-300 mt-5">
                John Wick: Phần 4 – John Wick: Chapter 4 là câu chuyện của John Wick (Keanu Reeves) đã khám phá ra con đường để đánh bại High Table. Nhưng trước khi có thể kiếm được tự do, Wick phải đối đầu với kẻ thù mới với những liên minh hùng mạnh trên toàn cầu và những lực lượng biến những người bạn cũ thành kẻ thù.
                </p>

                <div class="mt-5">
                    <h4 class="text-white font-semibold">Thông tin chi tiết</h4>
                </div>

                <div x-data="{ isOpen: false }">
                   
                        <div class="mt-12 description ">
                            <button
                                class="flex inline-flex items-center px-2 py-4">
                                <span class="p-4">Thông tin</span>
                            </button>
                            <button
                                class="flex inline-flex items-center px-2 py-4">
                                <span class="p-4">Diễn viên</span>
                            </button>
                            <button
                                class="flex inline-flex items-center px-2 py-4">
                                <span class="p-4">Trailer</span>
                            </button>
                        </div>

                        <template x-if="isOpen">
                            <div
                                style=""
                                class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                            >
                                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                    <div class="bg-gray-900 rounded">
                                        <div class="flex justify-end pr-4 pt-2">
                                            <button
                                                @click="isOpen = false"
                                                @keydown.escape.window="isOpen = false"
                                                class="text-3xl leading-none hover:text-gray-300">&times;
                                            </button>
                                        </div>
                                        <div class="modal-body px-8 py-8">
                                            <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                                <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://youtu.be/ABuY4KUUVcI" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                </div>
            </div>
        </div>
    </div>
    <div class="list float-right">
        
    </div>
</div>


    <style>
        .description button,.description span{
            background-color: orange;
        }
        .play {
            height: 100%;
            width: 100%;
        }
        .list {
            height: 100%;
            width: %;
            background-color: red;
        }
    </style>
@endsection