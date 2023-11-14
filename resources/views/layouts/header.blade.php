<nav class="navbar flex items-center justify-between sticky top-0 z-50  py-4 px-6 md:px-12 lg:px-20">
    <div>
        <a href="#" class="">Cimzic</a>
    </div>
    <div class="flex-grow text-center space-x-4">
        <a href="{{ route('home')}}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
        @auth('artist')
        <a href="" class="nav-link {{ Request::is('playlist') ? 'active' : '' }}">Playlist</a>
        <a href="#" class="nav-link ">Notifications</a>
      @else
        <a href="#" class="nav-link mr-4">Contact</a>
      @endauth
        <input type="text" placeholder="Search.." class="w-full md:w-80 border border-gray-300 rounded-lg py-2 px-4 text-center" style="background-color: #4130A0">
    </div>
    <div>
        
        @auth('artist')
        <div class="flex gap-3">
            <button class="btn btn-primary w-40">Subscribe To Plan</button>
        <form action="{{ route('artist.logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary w-40" type="submit">Logout</button>
        </form>
        </div>
        @else
        <button class="btn btn-primary w-40">Login</button>
        @endauth
    </div>
</nav>

