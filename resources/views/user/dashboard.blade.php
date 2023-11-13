@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="user-dashboard">
        <div class="container mx-auto">
            <div class="flex gap-8">
                <div class="w-2/6 flex justify-center sidebar">

                    <div>
                        <div class="relative mb-16">
                            <div class="flex gap-3">
                                <img src="{{ asset('assets/images/profil-img.png') }}" />
                                <div>
                                    <h6>Abigail Foteh</h6>
                                    <strong>Premium User</strong>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                                    <span>Playlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                                    <span>Downloads</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                                    <span>Help</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-4/6 ">
                    <div class="flex justify-between items-center mb-14">
                        <h6>Catch Best Downloaded Album</h6>
                        <input type="text" placeholder="Search  artists, albums, songs"
                            class="w-full md:w-80 border border-gray-300 rounded-lg py-2 px-4"
                            style="background-color: #4130A0">
                    </div>
                    <!-- Main content goes here -->
                    <div class="flex flex-row gap-5  mb-20">
                        <div class="basis-3/5"><img src="{{ asset('assets/images/user-dashboard-img.png') }}" alt=""
                                class="w-full"></div>
                        <div class="basis-2/5">
                            <div class="flex justify-between items-center">
                                <h4>Lorem Ori</h4>
                                <p>6 Album Playlist</p>
                            </div>
                            <div class="flex justify-between items-center border-b-2 pb-3 border-white-light mt-4">
                                <p>mamboyo</p>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-6">
                                    <span>2:30</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center border-b-2 pb-3 border-white-light mt-7">
                                <p>Mubuntu</p>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-6">
                                    <span>2:30</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center border-b-2 pb-3 border-white-light mt-7">
                                <p>Leggo</p>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-6">
                                    <span>2:30</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center border-b-2 pb-3 border-white-light mt-7">
                                <p>West Life</p>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-6">
                                    <span>2:30</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center border-b-2 pb-3 border-white-light mt-7">
                                <p>Mandassa</p>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-6">
                                    <span>2:30</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center border-b-2 pb-3 border-white-light mt-7">
                                <p>Leggo</p>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-6">
                                    <span>2:30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-8">Because You Listened To Unavailable</h4>
                    <div class="owl-carousel owl-theme user-carousel">
                        <div class="item">
                            <img src="{{ asset('assets/images/ep-img-1.png')}}" alt="">
                            <h5>Bridges-2022</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-2.png')}}" alt="">
                            <h5>albom abc-2023</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-3.png')}}" alt="">
                            <h5>Feelings-2020</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-4.png')}}" alt="">
                            <h5>mabakwa man</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-2.png')}}" alt="">
                            <h5>albom abc-2023</h5>
                        </div>
                    </div>
                    <div class="flex flex-row create-new-list my-16 items-center">
                        <div class="basis-2/3 md:mx-">
                            <h1>Create New Playlist and add your favorite Songs</h1>
                                <button class="btn btn-secondary">Create Playlist</button>
                        </div>
                        <div class="basis-1/3">
                            <img src="{{ asset('assets/images/create-playlist-img.png')}}" alt="" class="w-full">
                        </div>
                      </div>
                    {{-- <div class="create-new-list my-16">
                        <div class="grid grid-cols-2 items-center">
                            <div class="col-span-1">
                                <h1>Create New Playlist and add your favorite Songs</h1>
                                <button class="btn btn-secondary">Create Playlist</button>
                            </div>
                            <div class="col-span-1">
                                <img src="{{ asset('assets/images/create-playlist-img.png')}}" alt="" class="w-full">
                            </div>
                        </div>
                    </div> --}}
                    <h4 class="mb-8">Because You Listened To Unavailable</h4>
                    <div class="owl-carousel owl-theme recommendation">
                        <div class="item">
                            <img src="{{ asset('assets/images/ep-img-1.png')}}" alt="">
                            <h5>Bridges-2022</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-2.png')}}" alt="">
                            <h5>albom abc-2023</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-3.png')}}" alt="">
                            <h5>Feelings-2020</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-4.png')}}" alt="">
                            <h5>mabakwa man</h5>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/album-img-2.png')}}" alt="">
                            <h5>albom abc-2023</h5>
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
        $('.user-carousel').owlCarousel({
            loop: true,
            margin: 23,
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
                    items: 4
                }
            }
        })
        $('.recommendation').owlCarousel({
            loop: true,
            margin: 23,
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
                    items: 4
                }
            }
        })
    </script>
@endsection
