<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('user/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/font/css/all.css') }}"
</head>
<body>
    <section class="dashboard-landpage">
     <aside id="menu-items">
            {{-- <div class="close-btn" id="close-sidebar">x</div> --}}

            <div class="logo-container">
                <h1>KOINBETTER</h1>
            </div>
            <div class="link-container"><div class="bar"></div><img src="{{ asset('user/images/overview.png') }}" alt="" class="icon"><a href="{{ route('user.overview') }}" class="dashboard-links">Overview</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{ asset('user/images/salary.png') }}" alt="" class="icon"> <a href="{{ route('user.reinvest') }}" class="dashboard-links">Innvest</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{ asset('user/images/b00b3270-c001-4c1c-88be-1fa129600aff-removebg-preview.png') }}" alt="" class="icon"> <a href="{{ route('user.transaction') }}" class="dashboard-links">transactions</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{ asset('user/images/debit-card.png') }}" alt="" class="icon"><a href="{{ route('user.invested') }}" class="dashboard-links">Plans</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{ asset('user/images/shiba inu.png') }}" alt="" class="icon"><a href="{{ route('user.info') }}" class="dashboard-links">Account info</a></div>
        </aside>

        <div class="info-wrapper">

            <div class="user-info-display">
                <div class="menu-container" id="menubar">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                </div>
                <h1 class="hello-user">hi, {{ auth('web')->user()->first_name }}</h1>
                <div class="user-icon-container">
                    <div class="notification-icon-container">
                        <img src="{{ asset('user/images/th.jfif') }}" alt="" class="user-icon ">
                        <div class="profile-modal">
                            <div class="close-profile">x</div>
                            <div class="change-password">
                                <a href="#">change password</a>
                            </div>
                            <form action="{{ route('logout')}}" method="post">
                                @csrf
                            <button class="logout">logout</button>
                            </form>
                        </div>
                    </div>

                    <div class="profile-icon-container">
                        <img src="{{ asset('user/images/bell_notification.gif') }}" alt="" class="user-icon notification">
                        <div class="notification-modal">
                            <header class="notification-header">
                                <h2>notifications</h2>
                                <div class="header-icon-container">
                                    <div class="dot-container">
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                    </div>
                                    <h3 class="close-notification">x</h3>
                                </div>
                            </header>
                            {{-- <div class="notification-msg-container">
                                <div class="msg-wrapper">
                                    <div class="msg-badge "><h1>R</h1></div>
                                    <div class="msg">
                                        <h3>prove submitted succesfully</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                        <p class="time">2 hours ago</p>
                                    </div>
                                </div>
                                <div class="msg-wrapper">
                                    <div class="msg-badge blue"><h1>S</h1></div>
                                    <div class="msg">
                                        <h3>statistics</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                        <p class="time">1:30 hours ago</p>
                                    </div>
                                </div>
                                <div class="msg-wrapper">
                                    <div class="msg-badge pink"><h1>L</h1></div>
                                    <div class="msg">
                                        <h3>your gold plan has expired</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                        <p class="time">1 hours ago</p>
                                    </div>
                                </div>
                            </div> --}}
                            <footer class="notification-footer">
                                <a href="#">see all</a>
                            </footer>
                        </div>
                    </div>
                    <div class="share-icon-container">
                        <img src="{{ asset('user/images/inbox.gif') }}" alt="" class="user-icon">
                    </div>
                </div>
                <script>
                    // menu-bar codes

                        function OpenMenubar(){
                            const menuList=document.getElementById('menu-items');
                            menuList.style.width='80vw';
                        }
                        function CloseSideBar(){
                            const menuList=document.getElementById('menu-items');
                            menuList.style.width='0px';
                        }
                        const menu=document.getElementById('menubar');
                        menu.addEventListener('click',OpenMenubar);
                        const sidebar=document.getElementById('close-sidebar');
                        sidebar.addEventListener('click',CloseSideBar);
                </script>
            </div>

    @yield('content')
    </div>
    </section>
    <script src="{{ asset('user/js folder/main.js') }}"></script>
</body>
</html>

