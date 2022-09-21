<style>
    h3{

        font-family: Verdana, Arial, Helvetica, sans-serif; 


    }
</style>


@if($configData["mainLayoutType"] == 'horizontal' && isset($configData["mainLayoutType"]))
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarColor'] }} navbar-fixed">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="{{url('/')}}">
                        <div class="brand-logo">
                            <!-- <img src="{{asset(config('app.logo'))}}" alt="app logo"/> -->
                            <svg class="logo-abbr" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        @else
            <nav
                    class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarClass'] }} navbar-dark navbar-shadow {{ $configData['navbarColor'] }}">
                @endif
                <div class="navbar-wrapper">
                    <div class="navbar-container content">
                        <div class="navbar-collapse" id="navbar-mobile">
                            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                                <ul class="nav navbar-nav">  
                                    <li class="nav-item mobile-menu d-xl-block mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                                                          href="#"><i class="ficon feather icon-menu"></i></a></li>
                                    <li>
                                        <h3 class="nav-item" style="font-weight:bolder; padding: 1.4rem 0.5rem 1.35rem; ">@yield('title')</h3>
                                    </li>
                                </ul>

                            </div>
                            <ul class="nav navbar-nav float-right">
                                <li class="dropdown dropdown-language nav-item" hidden>
                                    <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flag-icon flag-icon-us"></i>
                                        <span class="selected-language">English</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                        @foreach(\App\Helpers\Helper::languages() as $lang)
                                            <a class="dropdown-item" href="{{url('lang/'.$lang['code'])}}" data-language="{{$lang['code']}}">
                                                <i class="flag-icon flag-icon-{{$lang['iso_code']}}"></i> {{ $lang['name'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>

                                <li class="dropdown dropdown-notification nav-item">
                                    <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                        {{-- <i class="ficon feather icon-bell"></i> --}}
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -4px">
                                            <path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#717579"></path>
                                            <path d="M9.98192 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1839 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.98192Z" fill="#717579"></path>
                                            </svg>
                                        @php
                                            $count = \App\Models\Notifications::where('user_id', Auth::user()->id)->where('mark_read', 0)->count();
                                        @endphp
                                        @if($count)
                                            <span class="badge badge-pill badge-success badge-up " style="color: #fff !important" >{{ $count }}</span>
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                        <li class="dropdown-menu-header">
                                            <div class="dropdown-header m-0 p-2">
                                                <h3 class="white">{{ $count }} New</h3><span class="grey darken-2">App Notifications</span>
                                            </div>
                                        </li>


                                        <li class="scrollable-container media-list">

                                            @foreach(\App\Models\Notifications::where('user_id', Auth::user()->id)->where('mark_read', 0)->latest()->take('10')->cursor() as $value)
                                                <a class="d-flex justify-content-between" href="{{ route('user.account') }}">
                                                    <div class="media d-flex align-items-start">
                                                        @switch($value->notification_type)
                                                            @case('user')
                                                            <div class="media-left text-primary"><i class="feather icon-plus-square font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="primary media-heading text-primary darken-1">You have new user</h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 30) }}</small>
                                                            </div>
                                                            @break

                                                            @case('plan')
                                                            <div class="media-left text-success"><i class="feather icon-shopping-cart font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="success media-heading text-success darken-1">You have new subscription</h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 30) }}</small>
                                                            </div>
                                                            @break

                                                            @case('senderid')
                                                            <div class="media-left text-danger"><i class="feather icon-user-check font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="danger media-heading text-danger darken-1">New Sender ID notification</h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 30) }}</small>
                                                            </div>
                                                            @break

                                                            @case('number')
                                                            <div class="media-left text-info"><i class="feather icon-phone font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="info media-heading text-info darken-1">New Number sales </h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 30) }}</small>
                                                            </div>
                                                            @break

                                                            @case('keyword')
                                                            <div class="media-left text-warning"><i class="feather icon-clipboard font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="warning media-heading text-warning darken-1">New Keyword sales</h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 30) }}</small>
                                                            </div>
                                                            @break

                                                            @case('chatbox')
                                                            <div class="media-left text-danger"><i class="feather icon-message-square font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="danger media-heading text-danger darken-1">New Inbox Message</h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 30) }}</small>
                                                            </div>
                                                            @break


                                                            @case('subscription')
                                                            <div class="media-left text-danger" hidden><i class="feather icon-shopping-cart font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="danger media-heading text-danger darken-1">Subscription Expired!</h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 60) }}</small>
                                                            </div>
                                                            @break

                                                            @case('smsunit')
                                                            <div class="media-left text-danger"><i class="feather icon-message-square font-medium-5"></i></div>
                                                            <div class="media-body">
                                                                <h6 class="danger media-heading text-danger darken-1">SMS Unit Running Low!</h6>
                                                                <small class="notification-text">{{ str_limit($value->message, 60) }}</small>
                                                            </div>
                                                            @break
                                                        @endswitch


                                                        <small>
                                                            <time class="media-meta">{{ \App\Library\Tool::formatHumanTime($value->created_at) }}</time>
                                                        </small>

                                                    </div>
                                                </a>

                                            @endforeach
                                        </li>


                                        <li class="dropdown-menu-footer">
                                            <a class="dropdown-item p-1 text-center" href="{{ route('user.account') }}">Read all notifications</a>
                                        </li>
                                    </ul>
                                </li>

                                @if(Auth::user()->active_portal == 'customer' && Auth::user()->is_customer == 1 && Auth::user()->customer->activeSubscription())
                                    <li class="nav-item balance-top-up" hidden>
                                        <div class="show-balance">
                                            <span class="show-balance-text">{{ __('locale.labels.balance') }}</span>
                                            <span class="show-balance-unit">{{ Auth::user()->sms_unit == '-1' ? __('locale.labels.unlimited') : Auth::user()->sms_unit  }}</span>
                                        </div>
                                        <a class="nav-link top-up-url" href="{{ route('user.account.top_up') }}">
                                            <button type="button" class="btn btn-sm btn-outline-success">
                                                <span class="text-white font-weight-bold" style="font-size: 12px">{{ __('locale.labels.top_up') }}</span>
                                            </button>
                                        </a>
                                    </li>
                                @endif

                                <li class="dropdown dropdown-user nav-item">
                                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                        <span><img class="round"
                                            src="{{ route('user.avatar', Auth::user()->uid)  }}" alt="avatar" height="40"
                                            width="40"/></span>
                                        <div class="user-nav d-sm-flex d-none">
                                            
                                            <span class="user-name text-bold-600">{{Auth::user()->displayName()}}</span><span class="user-status">{{ __('locale.labels.available') }}</span>
                                        </div>
                                            
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">

                                        @if(Auth::user()->active_portal == 'admin' && Auth::user()->is_customer == 1)
                                            <a class="dropdown-item" href="{{ route('user.switch_view', ['portal' => 'customer']) }}"><i class="feather icon-log-in"></i>{{ __('locale.labels.switch_view') }}</a>
                                            <div class="dropdown-divider"></div>
                                        @endif

                                        @if(Auth::user()->active_portal == 'customer' && Auth::user()->is_admin == 1)
                                            <a class="dropdown-item" href="{{ route('user.switch_view', ['portal' => 'admin']) }}"><i class="feather icon-log-in"></i>{{ __('locale.labels.switch_view') }}</a>
                                            <div class="dropdown-divider"></div>
                                        @endif

                                        <a class="dropdown-item" href="{{ route('user.account') }}"><i class="feather icon-user"></i>{{ __('locale.labels.profile') }}</a>

                                        @if(Auth::user()->active_portal == 'customer' && Auth::user()->is_customer == 1)
                                            <a hidden class="dropdown-item" href="{{route('customer.subscriptions.index')}}">
                                                <i class="feather icon-shopping-cart"></i>
                                                {{ __('locale.labels.billing') }}
                                            </a>
                                        @endif

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Logout</a>
                                            {{-- <i class="feather icon-power"></i> Logout</a> --}}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- END: Header-->
