<!-- Sidebar  -->
<div class="iq-sidebar sidebar-dark">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="welcome">
            <!-- <img src="images/logo.png" class="img-fluid" alt=""> -->
            <span>Admin</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{ Request::segment(2) === 'home' ? 'active' : '' }}">
                    <a href="home" class="iq-waves-effect collapsed"><i class="ri-home-4-line"></i><span>Home</span>
                    </a>
                </li>
                <li class=" {{ Request::segment(2) === 'vessel' ? 'active' : '' }}">
                    <a href="vessel" class="iq-waves-effect collapsed" ><i class="ri-pencil-ruler-line"></i><span>Vessel</span>
                    </a>
                </li>
                <li class=" {{ Request::segment(2) === 'experience' ? 'active' : '' }}">
                    <a href="experience" class="iq-waves-effect collapsed"><i class="ri-store-3-line"></i><span>Experience</span>
                    </a>
                </li>
                <li class=" {{ Request::segment(2) === 'crew' ? 'active' : '' }}">
                    <a href="crew" class="iq-waves-effect collapsed" ><i class="ri-group-line"></i><span>Crew</span>
                    </a>
                </li>
                <li class=" {{ Request::segment(2) === 'enquire' ? 'active' : '' }}">
                    <a href="enquire" class="iq-waves-effect collapsed"><i class="ri-shopping-cart-line"></i><span>Enquire</span>
                    </a>
                </li>
                <li class=" {{ Request::segment(2) === 'contact' ? 'active' : '' }}">
                    <a href="contact" class="iq-waves-effect collapsed"><i class="ri-mail-line"></i><span>Contact</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>