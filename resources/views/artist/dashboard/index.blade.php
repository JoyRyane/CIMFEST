@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <section class="artist-dashboard-intro">
        <div class="container mx-auto px-4 md:px-0">
            <div class="flex justify-between items-center mb-8">
                <h4 class="bold">Your Trending Album</h4>
                <button class="btn btn-tertiary w-64"><img src="{{ asset('assets/icons/icons8_download 1.svg') }}"
                        alt="">Seel All</button>
            </div>
            <div class="grid grid-cols-2 gap-5">
                <div class="col-span-1">
                    <div class="relative">
                        <img src="{{ asset('assets/images/most-popular-album-1.png') }}" alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mx-3 album-name">
                            <h4><span class="font-bold">The Bridges</span> by Loko</h4>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 music">
                    <div class="flex  justify-between gap-3 mb-3">
                        <div class="flex gap-4">
                            <img src="{{ asset('assets/images/dashboard-artist-img.png') }}" alt="" class="w-25">
                            <div>
                                <h6 class="bold">The Bridges by Loko</h6>
                                <span>100 listens</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="col-span-1">
                                <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-full">
                            </div>
                            <div class="col-span-1 items-center">
                                <span class="bold">2:30</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex  justify-between gap-3 mb-3">
                        <div class="flex gap-4">
                            <img src="{{ asset('assets/images/dashboard-artist-img.png') }}" alt="" class="w-25">
                            <div>
                                <h6 class="bold">The Bridges by Loko</h6>
                                <span>100 listens</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="col-span-1">
                                <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-full">
                            </div>
                            <div class="col-span-1 items-center">
                                <span class="bold">2:30</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex  justify-between gap-3 mb-3">
                        <div class="flex gap-4">
                            <img src="{{ asset('assets/images/dashboard-artist-img.png') }}" alt="" class="w-25">
                            <div>
                                <h6 class="bold">The Bridges by Loko</h6>
                                <span>100 listens</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="col-span-1">
                                <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-full">
                            </div>
                            <div class="col-span-1 items-center">
                                <span class="bold">2:30</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex  justify-between gap-3 mb-3">
                        <div class="flex gap-4">
                            <img src="{{ asset('assets/images/dashboard-artist-img.png') }}" alt="" class="w-25">
                            <div>
                                <h6 class="bold">The Bridges by Loko</h6>
                                <span>100 listens</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="col-span-1">
                                <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-full">
                            </div>
                            <div class="col-span-1 items-center">
                                <span class="bold">2:30</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex  justify-between gap-3 mb-3">
                        <div class="flex gap-4">
                            <img src="{{ asset('assets/images/dashboard-artist-img.png') }}" alt="" class="w-25">
                            <div>
                                <h6 class="bold">The Bridges by Loko</h6>
                                <span>100 listens</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="col-span-1">
                                <img src="{{ asset('assets/images/play-img.png') }}" alt="" class="w-full">
                            </div>
                            <div class="col-span-1 items-center">
                                <span class="bold">2:30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="artist-dashboard-upload mb-5">
        <div class="container mx-auto">
            <div class="my-8">
                <h4>Put Yourself out There</h4>
            </div>
            <div class="grid grid-cols-3 upload">
                <div class="col-span-1 upload-single">
                    <img src="{{ asset('assets/images/formkit_add.png') }}" alt="" class="mx-auto">
                    <h6>Upload Single</h6>
                </div>
                <div class="col-span-1 upload-ep">
                    <img src="{{ asset('assets/images/formkit_add.png') }}" alt="" class="mx-auto">
                    <h6>Upload Ep</h6>
                </div>
                <div class="col-span-1 upload-album">
                    <img src="{{ asset('assets/images/formkit_add.png') }}" alt="" class="mx-auto showmodal cursor-pointer">
                    <h6>Upload Album</h6>
                </div>

                <div class="relative z-10 hidden modal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <!--
                              Background backdrop, show/hide based on modal state.
                          
                              Entering: "ease-out duration-300"
                                From: "opacity-0"
                                To: "opacity-100"
                              Leaving: "ease-in duration-200"
                                From: "opacity-100"
                                To: "opacity-0"
                            -->
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                            <!--
                                  Modal panel, show/hide based on modal state.
                          
                                  Entering: "ease-out duration-300"
                                    From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    To: "opacity-100 translate-y-0 sm:scale-100"
                                  Leaving: "ease-in duration-200"
                                    From: "opacity-100 translate-y-0 sm:scale-100"
                                    To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                -->
                            <div
                                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="header">
                                            gjcv,
                                        </div>
                                        {{-- <div
                                            class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                            </svg>
                                        </div> --}}
                                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                                Deactivate account</h3>
                                            <div class="mt-2">
                                                <p class="text-sm text-gray-500">Are you sure you want to deactivate your
                                                    account? All of your data will be permanently removed. This action
                                                    cannot be undone.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="artist-dashboard-song">
        <div class="container mx-auto px-4 md:px-0">
            <div class="flex justify-between items-center mb-8">
                <h4 class="bold">Your Trending Songs</h4>
                <button class="btn btn-tertiary w-64"><img src="{{ asset('assets/icons/icons8_download 1.svg') }}"
                        alt="">Seel All</button>
            </div>
            <div class="grid grid-cols-3  gap-5">
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
                    <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                        <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                    </div>
                </div>
                <div class="flex gap-3 mb-3">
                    <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                        <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                    </div>
                </div>
                <div class="flex gap-3 mb-3">
                    <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                        <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                    </div>
                </div>
                <div class="flex gap-3 mb-3">
                    <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                        <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                    </div>
                </div>
                <div class="flex gap-3 mb-3">
                    <div><img src="{{ asset('assets/images/most-popular-list-1.png') }}" alt="" class="w-full">
                    </div>
                    <div>
                        <h4 class="bold">The Bridges by <br><span class="artist-name">Loko</span></h4>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')
<script>
    const modal = document.querySelector('.modal')
    const showModal = document.querySelector('.showmodal')

    showModal.addEventListener('click', function(){
        modal.classList.remove('hidden')
    })
    </script> 
@endsection
