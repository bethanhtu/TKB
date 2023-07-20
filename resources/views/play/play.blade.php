@extends('layouts.default')

@section('contents')
<!-- https://vie2.opstream7.com/share/7647966b7343c29048673252e490f736 tranformer-->
<!-- https://vie2.opstream7.com/share/077e29b11be80ab57e1a2ecabb7da330 -->

<div class="container flex-center">
<div class="play">
    <!-- play -->
    <div class="movie-info text-white"> 
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row flex-direction: center">

        <iframe width="100%" height="470px" src="https://kd.hd-bophim.com/share/86ff09548a5c6eff1ec764a28b6c8112" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
            
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">Avatar 2</h2>
                <div class="flex flex-wrap items-center text-white text-sm">
                    
                    <span class="ml-1">12.322 views</span>
                    <span class="mx-2">|</span>
                    <span>6/12/2022</span>
                    <span class="mx-2">|</span>
                    <span>phim chiếu rạp</span>
                </div>

                <p class="text-gray-300 mt-1">
                Avatar: Dòng Chảy Của Nước – Avatar: The Way of Water lấy bối cảnh 10 năm sau những sự kiện xảy ra ở phần đầu tiên. Phim kể câu chuyện về gia đình mới của Jake Sully (Sam Worthington thủ vai) cùng những rắc rối theo sau và bi kịch họ phải chịu đựng khi phe loài người xâm lược hành tinh Pandora.
                </p>

                <div class="mt-0">
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