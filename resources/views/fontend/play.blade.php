@extends('layouts.default')

@section('contents')
    <div class="movie-info text-white">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ABuY4KUUVcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">The idol</h2>
                <div class="flex flex-wrap items-center text-white text-sm">
                    
                    <span class="ml-1">vote</span>
                    <span class="mx-2">|</span>
                    <span>days</span>
                    <span class="mx-2">|</span>
                    <span>thể loại</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Mô tả
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        crew
                    </div>
                </div>

                <div x-data="{ isOpen: false }">
                   
                        <div class="mt-12 description ">
                            <button
                                @click="isOpen = true"
                                class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150"
                            >
                                
                                <span class="ml-2">Play Trailer</span>
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
    <style>
        .description button,.description span{
            background-color: orange;
        }
        
    </style>
@endsection