<div class="logo-area flex">
    <img class="logo" src="{{ asset('storage/front_assets/logo.svg') }}" alt="Company logo">
    <h2>Car Rent</h2>
</div>
<div class="links-area flex">
    <a href="{{ url('/') }}">Home</a>
    <a href="#car-list">Car List</a>
    <a href="#footer">Contact Us</a>
    <a href="#footer">About Us</a>
</div>
<div class="login-area">
    @if (Auth::user())
        <div class="user-menu">
            <img class="user-icon" src="{{ asset('storage/front_assets/user-icon.svg') }}" alt="User icon">
            <span class="username">{{ Auth::user()->name ?? "Nobody" }}</span>
            <div class="user-menu-dropdown flex">
                @if (Auth::user()->is_admin)
                    <a href='{{ route('admin.home') }}'>Admin Page</a>
                @else
                    <a href='{{ url('bookings') }}'>Bookings</a>
                @endif
                <a href="{{ route('profile.edit') }}">Profile</a>
                <form method="POST" action="{{ route('logout') }}" class="nav-link">
                    @csrf
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href={{ route('logout') }}
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            </div>
        </div>
    @else
        <div class="login-links flex">
            <a href='{{ route('register') }}' >Register</a>
            <a href='{{ route('login') }}' >Login</a>
        </div>
    @endif
    <div class="login-menu">
        <img class="menu-icon" src="{{ asset('storage/front_assets/bars.svg') }}" alt="Menu button">
        <div class="menu-links-area flex">
            <a href="{{ url('/') }}">Home</a>
            <a href="#car-list">Car List</a>
            <a href="#footer">Contact Us</a>
            <a href="#footer">About Us</a>
            @if (!Auth::user())
                <div class="login-links flex">
                    <a href='{{ route('register') }}' >Register</a>
                    <a href='{{ route('login') }}' >Login</a>
                </div>
            @endif
        </div>
    </div>
</div>
