@php
    $configData = Helper::applClasses();
@endphp
<div
        class="main-menu menu-fixed {{($configData['theme'] === 'light') ? "menu-light" : "menu-dark"}} menu-accordion menu-shadow"
        data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{route('admin.home')}}">
                    <div class="brand-logo d-flex">
                        <!-- <img src="{{asset(config('app.logo'))}}" alt="app logo"/> -->
                        <svg class="logo-abbr" width="40" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect class="react-logo" width="60" height="60" rx="30" fill="#00A15D"></rect>
                                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="60" height="60">
                                <rect class="react-logo" width="60" height="60" rx="30" fill="#00A15D"></rect>
                                </mask>
                                <g mask="url(#mask0)">
                                <path d="M130 51.3929L126.5 45.2109C123 38.9626 116 26.6981 109 23.1017C102 19.5715 95 24.875 88 29.3002C81 33.6591 74 37.3053 67 39.0124C60 40.7857 53 40.7857 46 36.3606C39 32.0017 32 23.0519 25 17.7981C18 12.4448 11 10.7874 4 16.9197C-3 23.0519 -10 37.3053 -17 40.7857C-24 44.2662 -31 37.3053 -34.5 33.7088L-38 30.1786V62H-34.5C-31 62 -24 62 -17 62C-10 62 -3 62 4 62C11 62 18 62 25 62C32 62 39 62 46 62C53 62 60 62 67 62C74 62 81 62 88 62C95 62 102 62 109 62C116 62 123 62 126.5 62H130V51.3929Z" fill="url(#paint0_linear)"></path>
                                <path d="M-54 55.7741L-50.5 50.9799C-47 46.1343 -40 36.623 -33 33.8339C-26 31.0962 -19 35.2092 -12 38.641C-5 42.0213 2 44.849 9 46.1728C16 47.5481 23 47.5481 30 44.1164C37 40.736 44 33.7954 51 29.721C58 25.5694 65 24.2841 72 29.0398C79 33.7954 86 44.849 93 47.5481C100 50.2473 107 44.849 110.5 42.0599L114 39.3222V64H110.5C107 64 100 64 93 64C86 64 79 64 72 64C65 64 58 64 51 64C44 64 37 64 30 64C23 64 16 64 9 64C2 64 -5 64 -12 64C-19 64 -26 64 -33 64C-40 64 -47 64 -50.5 64H-54V55.7741Z" fill="url(#paint1_linear)"></path>
                                </g>
                                <defs>
                                <linearGradient id="paint0_linear" x1="46" y1="13" x2="46" y2="62" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#23D58A"></stop>
                                <stop offset="1" stop-color="#00A15D"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear" x1="30" y1="26" x2="30" y2="64" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#FFED4B"></stop>
                                <stop offset="1" stop-color="#FF8C4B"></stop>
                                </linearGradient>
                                </defs>
                            </svg>
                            <div class="brand-title">
<h2 class="">Workload</h2>
<span class="brand-sub-title">Project Management Admin</span>
</div>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-none primary collapse-toggle-icon"
                       data-ticon="icon-disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- Foreach menu item starts --}}
            @if(isset($menuData[0]))
                @php
                    if (auth()->user()->active_portal == 'admin'){
                        $sidebarMenu = $menuData['0']->admin;
                     }else{
                        $sidebarMenu = $menuData['0']->customer;
                     }
                @endphp

                @foreach($sidebarMenu as $menu)
                    @if(isset($menu->navheader))
                        <li class="navigation-header">
                            <span>{{ $menu->navheader }}</span>
                        </li>
                    @else
                        {{-- Add Custom Class with nav-item --}}
                        @php
                            $custom_classes = "";
                            if(isset($menu->classlist)) {
                            $custom_classes = $menu->classlist;
                            }
                            $translation = "";
                            if(isset($menu->i18n)){
                            $translation = $menu->i18n;
                            }
                            $permission = explode('|', $menu->access);
                        @endphp
                        @canany($permission, auth()->user())

                            <li class="nav-item {{ isset($menu->slug) &&  str_contains(request()->path(),$menu->slug) ? 'active' : '' }} {{ $custom_classes }}">
                                <a href="{{ $menu->url }}">
                                    <i class="{{ $menu->icon }}"></i>
                                    <span class="menu-title"
                                          data-i18n="{{ $translation }}">{{ __('locale.menu.'.$menu->name) }}</span>
                                </a>
                                @if(isset($menu->submenu))
                                    @include('panels/submenu', ['menu' => $menu->submenu])
                                @endif
                            </li>
                        @endcanany
                    @endif
                @endforeach
            @endif
            {{-- Foreach menu item ends --}}
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
