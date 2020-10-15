<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item " >
                <a class="nav-item-hold" href="{{route('admin')}}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('sessions/*') ? 'active' : '' }}" data-item="sessions">
                <a class="nav-item-hold" href="/test.html">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Leads</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('uikits/*') ? 'active' : '' }}" data-item="uikits">
                <a class="nav-item-hold" href="#">
                    <!-- <i class="nav-icon i-Split-Horizontal-2-Window"></i> -->
                    <i class="nav-icon i-Map2"></i>
                    <span class="nav-text">Locations</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" >
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Support"></i>
                    <span class="nav-text">Support</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">

        <ul class="childNav" data-parent="uikits">
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='#' ? 'open' : '' }}" href="{{route('leads')}}">
                    <i class="nav-icon i-Cursor-Click"></i>
                    <span class="item-name">Provinces</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='#' ? 'open' : '' }}" href="{{route('leads')}}">
                    <i class="nav-icon i-Cursor-Click "></i>
                    <span class="item-name">Areas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='#' ? 'open' : '' }}" href="{{route('leads')}}">
                    <i class="nav-icon i-Cursor-Click"></i>
                    <span class="item-name">Municipalities</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='#' ? 'open' : '' }}" href="{{route('leads')}}">
                    <i class="nav-icon i-Cursor-Click"></i>
                    <span class="item-name">Wards</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='#' ? 'open' : '' }}" href="{{route('leads')}}">
                    <i class="nav-icon i-Cursor-Click"></i>
                    <span class="item-name">Voting Stations</span>
                </a>
            </li>

        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item">
                <a href="/admin/leads">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">View Leads</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/leads/create">
                    <i class="nav-icon i-Add-User"></i>
                    <span class="item-name">Add Leads</span>
                </a>
            </li>

        </ul>

    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
