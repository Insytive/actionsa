<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item {{ request()->is('admin/*') ? 'active' : '' }}" data-item="starter">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Starter pages</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Doc</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="starter">
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('normal')}}" class="{{ Route::currentRouteName()=='normal' ? 'open' : '' }}">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Normal Sidebar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='compact' ? 'open' : '' }}" href="{{route('compact')}}">
                    <i class="nav-icon i-Over-Time"></i>
                    <span class="item-name">Compact Sidebar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='horizontal' ? 'open' : '' }}" href="{{route('horizontal')}}">
                    <i class="nav-icon i-Clock"></i>
                    <span class="item-name">Horizontal Sidebar</span>
                </a>
            </li>
        </ul>

    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
