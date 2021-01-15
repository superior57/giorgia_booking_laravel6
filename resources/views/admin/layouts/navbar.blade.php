<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <div class="iq-sidebar-logo">
            <div class="top-logo">
                <a href="welcome" class="logo">
                    <span>Home</span>
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="line-menu half start"></div>
                    <div class="line-menu"></div>
                    <div class="line-menu half end"></div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                </ul>
            </div>
            <ul class="navbar-list">
                <li>
                    <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="{{asset('admin_home/images/user/1.jpg')}}"
                            class="img-fluid rounded" alt="user"></a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                               
                                <div class="d-inline-block w-100 text-center p-3">
                                    <a class="iq-bg-danger iq-sign-btn" href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout<i
                                            class="ri-login-box-line ml-2"></i></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- TOP Nav Bar END -->