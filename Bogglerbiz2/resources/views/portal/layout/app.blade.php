<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconsax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metismenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simplebar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jbox.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loaders.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.svg">
    <!-- Title -->
    <title>{{env('APP_NAME')}} - @yield('title')</title>
</head>

<body class="body-bg-f8faff">
    <!-- Start Preloader Area -->
    {{-- <div class="preloader">
            <img src="{{asset('assets/images/main-logo.svg')}}" alt="main-logo">
        </div> --}}
    <!-- End Preloader Area -->

    <!-- Start All Section Area -->
    <div class="all-section-area">
        <!-- Start Header Area -->
        <div class="header-area">
            <div class="container-fluid">
                <div class="header-content-wrapper">
                    <div class="header-content d-flex justify-content-between align-items-center">
                        <div class="header-left-content d-flex">
                            <div class="responsive-burger-menu d-block d-lg-none">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>

                            <div class="main-logo">
                                <a href="{{url('/dashboard')}}">
                                    <img src="{{asset("assets/images/aichat/logo.gif")}}" alt="main-logo"
                                    style="width:200px"
                                    >
                                </a>
                            </div>

                             <form class="search-bar d-flex">
                                <img src="{{ asset('assets/images/icon/search-normal.svg') }}" alt="search-normal">

                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>

                             <div class="option-item for-mobile-devices d-block d-lg-none">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search"
                                                type="text">

                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="header-right-content d-flex align-items-center">
                            <div class="header-right-option">
                                <a href="#" class="dropdown-item fullscreen-btn" id="fullscreen-button">
                                    <img src="{{ asset('assets/images/icon/maximize.svg') }}" alt="maximize">
                                </a>
                            </div>

                            {{-- <div class="header-right-option dropdown apps-option">
                                <button class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('assets/images/icon/app.svg') }}" alt="app">
                                </button>

                                <div class="dropdown-menu">
                                    <div
                                        class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                        <span class="title d-inline-block">Web Apps</span>
                                        <span class="edit-btn d-inline-block">Edit</span>
                                    </div>

                                    <div class="dropdown-wrap" data-simplebar>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-account.png') }}"
                                                    alt="icon-account">
                                                <span class="d-block mb-0">Account</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-google.png') }}"
                                                    alt="icon-google">
                                                <span class="d-block mb-0">Search</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-map.png') }}"
                                                    alt="icon-map">
                                                <span class="d-block mb-0">Maps</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-youtube.png') }}"
                                                    alt="icon-youtube">
                                                <span class="d-block mb-0">YouTube</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-playstore.png') }}"
                                                    alt="icon-playstore">
                                                <span class="d-block mb-0">Play</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-gmail.png') }}"
                                                    alt="icon-gmail">
                                                <span class="d-block mb-0">Gmail</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-drive.png') }}"
                                                    alt="icon-drive">
                                                <span class="d-block mb-0">Drive</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-calendar.png') }}"
                                                    alt="icon-calendar">
                                                <span class="d-block mb-0">Calendar</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-bitbucket.png') }}"
                                                    alt="icon-bitbucket">
                                                <span class="d-block mb-0">Bitbucket</span>
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-github.png') }}"
                                                    alt="icon-github">
                                                <span class="d-block mb-0">Github</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-dribbble.png') }}"
                                                    alt="icon-dribbble">
                                                <span class="d-block mb-0">Dribbble</span>
                                            </a>

                                            <a href="#" class="dropdown-item">
                                                <img src="{{ asset('assets/images/apps/icon-mail-chimp.png') }}"
                                                    alt="icon-mail-chimp">
                                                <span class="d-block mb-0">Mailchimp</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-footer">
                                        <a href="#" class="dropdown-item">View All</a>
                                    </div>
                                </div>
                            </div> 

                            <div class="header-right-option notification-option messenger-option dropdown">
                                <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="messages-btn">
                                        <img src="{{ asset('assets/images/icon/message.svg') }}" alt="message">
                                        <span class="badge">3</span>
                                    </div>
                                </div>

                                <div class="dropdown-menu">
                                    <div
                                        class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                        <span class="title d-inline-block">5 New Message</span>
                                        <span class="mark-all-btn d-inline-block">Clear All</span>
                                    </div>

                                    <div class="dropdown-wrap" data-simplebar>
                                        <a href="chat.html" class="dropdown-item d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/user/user-1.png') }}"
                                                    alt="user-1">
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Alex Dew</span>
                                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                <p class="sub-text mb-0">2 sec ago</p>
                                            </div>
                                        </a>

                                        <a href="chat.html" class="dropdown-item d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/user/user-2.png') }}"
                                                    alt="user-2">
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Anne Kew</span>
                                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                <p class="sub-text mb-0">5 sec ago</p>
                                            </div>
                                        </a>

                                        <a href="chat.html" class="dropdown-item d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/user/user-3.png') }}"
                                                    alt="user-3">
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Huhon Smith</span>
                                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                <p class="sub-text mb-0">3 min ago</p>
                                            </div>
                                        </a>

                                        <a href="chat.html" class="dropdown-item d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/user/user-4.png') }}"
                                                    alt="user-4">
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Yelax Spin</span>
                                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                <p class="sub-text mb-0">7 min ago</p>
                                            </div>
                                        </a>

                                        <a href="chat.html" class="dropdown-item d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/user/user-5.png') }}"
                                                    alt="user-5">
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Steven</span>
                                                <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                <p class="sub-text mb-0">1 sec ago</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="dropdown-footer">
                                        <a href="chat.html" class="dropdown-item">View All</a>
                                    </div>
                                </div>
                            </div>

                            <div class="header-right-option notification-option dropdown">
                                <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="notification-btn">
                                        <img src="{{ asset('assets/images/icon/notification.svg') }}"
                                            alt="notification">
                                        <span class="badge">4</span>
                                    </div>
                                </div>

                                <div class="dropdown-menu">
                                    <div
                                        class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                        <span class="title d-inline-block">6 New Notifications</span>
                                        <span class="mark-all-btn d-inline-block">Mark all as read</span>
                                    </div>

                                    <div class="dropdown-wrap" data-simplebar>
                                        <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                            <div class="icon">
                                                <i class='bx bx-message-rounded-dots'></i>
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Just sent a new message!</span>
                                                <p class="sub-text mb-0">2 sec ago</p>
                                            </div>
                                        </a>

                                        <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                            <div class="icon">
                                                <i class='bx bx-user'></i>
                                            </div>

                                            <div class="content">
                                                <span class="d-block">New customer registered</span>
                                                <p class="sub-text mb-0">5 sec ago</p>
                                            </div>
                                        </a>

                                        <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                            <div class="icon">
                                                <i class='bx bx-layer'></i>
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Apps are ready for update</span>
                                                <p class="sub-text mb-0">3 min ago</p>
                                            </div>
                                        </a>

                                        <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                            <div class="icon">
                                                <i class='bx bx-hourglass'></i>
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Your item is shipped</span>
                                                <p class="sub-text mb-0">7 min ago</p>
                                            </div>
                                        </a>

                                        <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                            <div class="icon">
                                                <i class='bx bx-comment-dots'></i>
                                            </div>

                                            <div class="content">
                                                <span class="d-block">Steven commented on your post</span>
                                                <p class="sub-text mb-0">1 sec ago</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="dropdown-footer">
                                        <a href="inbox.html" class="dropdown-item">View All</a>
                                    </div>
                                </div>
                            </div>
--}}
                            <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                                <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center"
                                    href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="avatar">
                                    <div class="d-none d-lg-block d-md-block">
                                        <h3>{{ strtoupper(Auth::user()->name) }}</h3>
                                       
                                        <span><?= Auth::user()->hasRole('admin') ? 'Admin' : 'User' ?></span>
                                    </div>
                                </a>

                                <div class="dropdown-menu">
                                    <div class="dropdown-header d-flex flex-column align-items-center">
                                        <div class="figure mb-3">
                                            <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-circle"
                                                alt="avatar">
                                        </div>

                                        <div class="info text-center">
                                            <span class="name">{{ strtoupper(Auth::user()->name) }}</span>
                                            <p class="mb-3 email">
                                                <a href="#">{{ Auth::user()->email }}</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="dropdown-wrap">
                                        <ul class="profile-nav p-0 pt-3">
                                            <li class="nav-item">
                                                <a href="{{ route('show.myprofile') }}" class="nav-link">
                                                    <i class="ri-user-line"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            {{-- <li class="nav-item">
                                                    <a href="inbox.html" class="nav-link">
                                                        <i class="ri-mail-send-line"></i>
                                                        <span>My Inbox</span>
                                                    </a>
                                                </li> --}}

                                            <li class="nav-item">
                                                <a href="{{ route('edit.myprofile') }}" class="nav-link">
                                                    <i class="ri-edit-box-line"></i>
                                                    <span>Edit Profile</span>
                                                </a>
                                            </li>

                                            {{-- <li class="nav-item">
                                                    <a href="edit-profile.html" class="nav-link">
                                                        <i class="ri-settings-5-line"></i>
                                                        <span>Settings</span>
                                                    </a>
                                                </li> --}}
                                        </ul>
                                    </div>

                                    <div class="dropdown-footer">
                                        <ul class="profile-nav">
                                            <li class="nav-item">
                                                <a href="{{ route('logout') }}" class="nav-link">
                                                    <i class="ri-login-circle-line"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="header-right-option template-option">
                                <a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <img src="{{ asset('assets/images/icon/setting.svg') }}" alt="setting">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Area -->

        <!-- Start Sidebar Menu Area -->
        <nav class="side-menu-area style-two">
            <nav class="sidebar-nav" data-simplebar>
                <ul id="sidebar-menu" class="sidebar-menu">
                    <li class="{{ request()->routeIs('dashboard') ? 'mm-active' : '' }}">
                        <a href="{{ url('/dashboard') }}" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/element.svg') }}" alt="element">
                            </div>
                            <span class="menu-title">Dashboards</span>
                        </a>
                    </li>

                    <li class="{{ request()->routeIs('users.index') ? 'mm-active' : '' }}">
                        <a href="{{ url('/users') }}" class=" box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/profile-2user.svg') }}" alt="calendar">
                            </div>
                            <span class="menu-title">Users</span>
                        </a>
                        {{-- <ul class="sidemenu-nav-second-level">
                                <li class="{{ request()->routeIs('users.index') ? 'active' : '' }}">
                                    <a href="{{url('/users')}}">
                                        <span class="menu-title">All Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="starred.html">
                                        <span class="menu-title">User Group</span>
                                    </a>
                                </li>
                            </ul> --}}
                    </li>

                    <li class="{{ request()->routeIs('aimodel.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('aimodel.index') }}" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/messages.svg') }}" alt="messages">
                            </div>
                            <span class="menu-title">AI Model</span>
                        </a>
                    </li>

                    <li class="{{ request()->routeIs('subscriptions.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('subscriptions.index') }}" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/document-copy.svg') }}" alt="document-copy">
                            </div>
                            <span class="menu-title">Subscriptions</span>
                        </a>
                    </li>

                    <li class="{{ request()->routeIs('askai.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('askai.index') }}" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/profile-2user.svg') }}" alt="profile-2user">
                            </div>
                            <span class="menu-title">Ask Boogler</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('users.feedback') ? 'mm-active' : '' }}">
                        <a href="{{ route('users.feedback') }}" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/profile-2user.svg') }}" alt="profile-2user">
                            </div>
                            <span class="menu-title">Activities</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('widget') ? 'mm-active' : '' }}">
                        <a href="{{ route('widget') }}" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/profile-2user.svg') }}" alt="profile-2user">
                            </div>
                            <span class="menu-title">widget</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </nav>
        <!-- End Sidebar Menu Area -->

        @yield('content')


    </div>
    <!-- End All Section Area -->

    <!-- Start Template Sidebar Area -->
    <div class="template-sidebar-option">
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasRight">
            <div class="offcanvas-header">
                <a href="index.html">
                    <img src="{{ asset('assets/images/main-logo.svg') }}" alt="main-logo">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h3>Joxi Customization</h3>
                <ul>
                    <li>
                        <!-- Start Dark Mode All Area -->
                        <h4>Dark/Light Mode</h4>
                        <div class="dark-mode-btn">
                            <div class="dark-version">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="DarkModeSW">
                                </label>
                            </div>
                        </div>
                        <!-- End Dark Mode All Area -->
                    </li>
                    <li>
                        <!-- Start Dark Mode All Area -->
                        <h4>Only Header Dark Mode</h4>
                        <div class="dark-mode-btn">
                            <div class="dark-version">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="DarkModeSW2">
                                </label>
                            </div>
                        </div>
                        <!-- End Dark Mode All Area -->
                    </li>
                    <li>
                        <!-- Start Dark Mode All Area -->
                        <h4>Only Sidebar Dark Mode</h4>
                        <div class="dark-mode-btn">
                            <div class="dark-version">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="DarkModeSW3">
                                </label>
                            </div>
                        </div>
                        <!-- End Dark Mode All Area -->
                    </li>
                    <li>
                        <h4>LTR/RTL</h4>
                        <div class="d-flex justify-content-between">
                            <a href="https://templates.envytheme.com/joxi/default/"
                                class="default-btn active me-1">LTR</a>
                            <a href="https://templates.envytheme.com/joxi/rtl/" class="default-btn ms-1">RTL</a>
                        </div>
                    </li>
                    <li>
                        <a class="default-btn active" target="_blank" href="https://1.envato.market/zaJjLe">
                            Buy Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Template Sidebar Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Include DataTables plugin -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <style>
        .dataTables_length {
            float: left;
        }

        .dataTables_filter {
            float: right;
        }

        #dtBasicExample_filter>label>input[type=search] {

            color: #292d32;
            border: 1px solid #F1F5FF;
            background-color: #F1F5FF;
            border-radius: 10px;
            font-size: 14px;
            padding: 10px 20px;
            width: 100%;
            transition: all ease 0.5s;
        }
        #dtBasicExample_filter>label{
            color: transparent;
            display: flex
        }

        /* Pagination styling */
        .dataTables_paginate {
            margin-top: 10px;
            font-family: Arial, sans-serif;
        }

        /* Pagination buttons */
        .dataTables_paginate .paginate_button {
            display: inline-block;
            padding: 6px 12px;
            margin-left: 2px;
            border: 1px solid #ccc;
            border-radius: 3px;
            color: #333;
            text-decoration: none;
            cursor: pointer;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        /* Pagination buttons hover effect */
        .dataTables_paginate .paginate_button:hover {
            background-color: #f0f0f0;
        }

        /* Disabled pagination buttons */
        .dataTables_paginate .paginate_button.disabled {
            pointer-events: none;
            opacity: 0.6;
            cursor: default;
        }
    </style>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/js/geticons.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/calendar.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/calendar.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/editor.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('page-js-script')
    <script>
    $(document).ready(function() {
        $('#dtBasicExample_filter > label > input[type=search]').attr('placeholder', 'Search');
    });
    </script>
</body>

</html>
