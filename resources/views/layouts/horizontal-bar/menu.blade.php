<div class="horizontal-bar-wrap">
    <div class="header-topnav">
        <div class="container-fluid">
            <div class=" topnav rtl-ps-none" id="" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="menu float-left">
                    <li class="{{ request()->is('admin/*') ? 'active' : '' }}">

                        <div>


                            <div>
                                <label class="toggle" for="drop-2">

                                    Starter Kits
                                </label>
                                <a href="#">
                                    <i class="nav-icon mr-2 i-Bar-Chart"></i>
                                    Starter Kits
                                </a>

                                <input type="checkbox" id="drop-2">
                                <ul>

                                    <li class="nav-item ">
                                        <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}"
                                            href="{{route('dashboard')}}">
                                            <i class="nav-icon mr-2 i-Clock-3"></i>
                                            <span class="item-name">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('normal')}}"
                                            class="{{ Route::currentRouteName()=='normal' ? 'open' : '' }}">
                                            <i class="nav-icon mr-2 i-Clock-4"></i>
                                            <span class="item-name">Normal</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Route::currentRouteName()=='compact' ? 'open' : '' }}"
                                            href="{{route('compact')}}">
                                            <i class="nav-icon mr-2 i-Over-Time"></i>
                                            <span class="item-name">Compact</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Route::currentRouteName()=='horizontal' ? 'open' : '' }}"
                                            href="{{route('horizontal')}}">
                                            <i class="nav-icon mr-2 i-Clock"></i>
                                            <span class="item-name">Horizontal</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>





                </ul>


            </div>
        </div>
    </div>

</div>
<!--=============== Horizontal bar End ================-->
