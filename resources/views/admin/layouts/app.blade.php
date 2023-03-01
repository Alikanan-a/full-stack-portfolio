<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/scss/admin/dashboard.scss', 'resources/js/app.js'])
</head>
<body>

<nav class="sidebar">
    <header>
        <div class="image-text">
                <span class="image">
                    <i class='bx bxs-face-mask'></i>
                </span>
            <div class="text header-text">
                <span class="name">AliKanan</span>
                <span class="profession">Web-Developer</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>
            <ul class="menu-links p-0">
                <li class="">
                    <a href="{{route('admin.index')}}">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('admin.profile.edit' , Auth::id())}}">
                        <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <span class="text nav-text">{{__("Edit Profile")}}</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('admin.project.index')}}">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">{{__("view all projects")}}</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('admin.mail.index')}}">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        <span class="text nav-text">{{__("Mails")}}</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class='bx bx-heart icon'></i>
                        <span class="text nav-text">Likes</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Wallets</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                <a href="{{route('admin.logout' , Auth::id())}}">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
            <li class="mode">
                <div class="moon-sun">
                    <i class='bx bx-sun icon sun'></i>
                    <i class='bx bx-moon icon moon '></i>
                </div>
                <span class="text mode-text ">DarkMode</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>

            </li>
        </div>
    </div>
</nav>

<section class="home">
    <div class="text">
        @yield('content')
    </div>
</section>



<!-- =============== type.js =============== -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<!-- =============== Jquery =============== -->
<script src="/assets/plugin/jquery/dist/jquery.min.js"></script>

<!--=============== SCROLLREVEAL ===============-->
<script src="/assets/js/scrollreveal.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="/assets/js/main.js"></script>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>
