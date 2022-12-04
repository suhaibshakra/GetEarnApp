<!-- ***** Preloader Start ***** -->
<div class="preloader-wrapper">
    <div class="slice"></div>
    <div class="slice"></div>
    <div class="slice"></div>
    <div class="slice"></div>
    <div class="slice"></div>
    <div class="slice"></div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="assets/images/logo-green.png" alt="Get & Earn " />
                    </a>
                    <!-- ***** Logo End ***** -->


                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    @guest
                        <li><a href="/">Home</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register" class="btn-nav-line"><span>Sing up</span></a></li>
                    @else
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/clients">My Clients</a></li>
                    @if(Auth::user()->isAdmin())
                    <li><a href="/users">Users</a></li>
                    @endif
                    <li>
                        <a  class="btn-nav-line" href="{{ route('logout.perform') }}">Logout</a>
                    </li>
                    @endguest
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
