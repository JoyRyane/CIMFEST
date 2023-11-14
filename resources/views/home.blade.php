@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="home-intro-wrapper mb-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="col-span-1 md:order-2">
                    <img src="{{ asset('assets/images/home-img.png') }}" alt="">
                </div>
                <div class="col-span-1 md:order-1">
                    <h1 class="text-center md:text-left">Where Words Fail, Music Speaks</h1>
                    <h6 class="text-center md:text-left">The most exciting rhythms seem unexpected and complex, the most
                        beautiful melodies simple and inevitable</h6><br><br>
                    <div class="flex flex-col md:flex-row justify-center md:justify-start items-center md:items-start gap-4">
                        <a href="{{ route('artist.register') }}" class="btn btn-primary">Register an artist</a>
                        <a href="" class="btn btn-primary-bold">Become an Agent</a>
                    </div><br><br>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('assets/images/home-music-img.png') }}" alt="">
                        <p>100k+ people are using this</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-wrapper px-4 md:px-0">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-8">
                <h4 class="bold">Trending Songs</h4>
            </div>
            <div class="owl-carousel owl-theme carousel ">
                <div class="item">
                    <div><img src="{{ asset('assets/images/home-trending-1.png') }}" alt=""></div>
                    <div class="flex justify-between items-center mt-2 mx-2 ml-4">
                        <div>
                            <h6>CALE CALE</h6>
                            <p>by daphne</p>
                        </div>
                        <div><img src="{{ asset('assets/images/play-img.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div><img src="{{ asset('assets/images/home-trending-2.png') }}" alt=""></div>
                    <div class="flex justify-between items-center mt-2 mx-2 ml-4">
                        <div>
                            <h6>CALE CALE</h6>
                            <p>by daphne</p>
                        </div>
                        <div><img src="{{ asset('assets/images/play-img.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div><img src="{{ asset('assets/images/home-trending-3.png') }}" alt=""></div>
                    <div class="flex justify-between items-center mt-2 mx-2 ml-4">
                        <div>
                            <h6>CALE CALE</h6>
                            <p>by daphne</p>
                        </div>
                        <div><img src="{{ asset('assets/images/play-img.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div><img src="{{ asset('assets/images/home-trending-4.png') }}" alt=""></div>
                    <div class="flex justify-between items-center mt-2 mx-2 ml-4">
                        <div>
                            <h6>CALE CALE</h6>
                            <p>by daphne</p>
                        </div>
                        <div><img src="{{ asset('assets/images/play-img.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div><img src="{{ asset('assets/images/home-trending-1.png') }}" alt=""></div>
                    <div class="flex justify-between items-center mt-2 mx-2 ml-4">
                        <div>
                            <h6>CALE CALE</h6>
                            <p>by daphne</p>
                        </div>
                        <div><img src="{{ asset('assets/images/play-img.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div><img src="{{ asset('assets/images/home-trending-1.png') }}" alt=""></div>
                    <div class="flex justify-between items-center mt-2 mx-2 ml-4">
                        <div>
                            <h6>CALE CALE</h6>
                            <p>by daphne</p>
                        </div>
                        <div><img src="{{ asset('assets/images/play-img.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="most-popular">
        <div class="container mx-auto px-4 md:px-0">
            <div class="flex justify-between items-center mb-8">
                <h4 class="bold">Most Popular Album</h4>
                <button class="btn btn-tertiary w-64"><img src="{{ asset('assets/icons/icons8_download 1.svg') }}"
                        alt="">Seel All</button>
            </div>
            <div class="flex flex-wrap gap-5">
                <div class="grid grid-cols-2  gap-5">
                    <div class="col-span-1">
                        <div class="relative">
                            <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                            <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                                <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="relative">
                            <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                            <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                                <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative">
                            <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                            <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                                <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="relative">
                            <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                            <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                                <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex gap-3 mb-3">
                        <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt="" class="w-full">
                        </div>
                        <div>
                            <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt=""
                                class="w-full"></div>
                        <div>
                            <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt=""
                                class="w-full"></div>
                        <div>
                            <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt=""
                                class="w-full"></div>
                        <div>
                            <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt=""
                                class="w-full"></div>
                        <div>
                            <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt=""
                                class="w-full"></div>
                        <div>
                            <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="artist-for-you px-4 md:px-0">
        <div class="container mx-auto">
            <h3 class="mb-8">Artist For you</h3>
            <div class="owl-carousel owl-theme artist">
                <div class="item">
                    <img src="{{ asset('assets/images/daphne.png') }}" alt="">
                    <h5>Daphne NE</h5>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/salatiel.png') }}" alt="">
                    <h5>Salatiel HY</h5>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/locko.png') }}" alt="">
                    <h5>Loko Fik</h5>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/home-trending-4.png') }}" alt="">
                    <h5>Davido</h5>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/home-trending-1.png') }}" alt="">
                    <h5>Magasco</h5>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/home-trending-1.png') }}" alt="">
                    <h5>Daphne NE</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="labels px-4 md:px-0">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-8">
                <h4 class="bold">Most Sort Labels</h4>
                <button class="btn btn-tertiary w-64"><img src="{{ asset('assets/icons/icons8_download 1.svg') }}"
                        alt="">Seel All</button>
            </div>
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <div class="relative">
                        <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                            <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="relative">
                        <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                            <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="relative">
                        <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                            <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="relative">
                        <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                            <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="relative">
                        <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                            <h4><span class="font-bold">The Bridges</span> by Loko</h4>

                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="relative">
                        <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                            <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        const nextIcon = '<img src="{{ asset('assets/images/iconamoon_arrow-right.png') }}" alt="">';
        const prevIcon = '<img src="{{ asset('assets/images/iconamoon_arrow-left.png') }}" alt="" >';
        $('.carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: false,
            navText: [
                prevIcon,
                nextIcon
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.artist').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            navText: [
                prevIcon,
                nextIcon
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
