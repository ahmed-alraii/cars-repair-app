<!DOCTYPE html>
<html
        {{--  @if(app()->getLocale() == 'ar') dir="rtl" @endif--}}
>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('Cars Repair')}} - @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/jvectormap/jquery-jvectormap.css')}}">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/demo/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/scss/demo/_sidebar.scss')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/vendor/images/favicon.png')}}"/>

    <!-- Alertity CSS-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    {{-- select 2 --}}
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>

    {{--    DataTable--}}
    <link href="{{ asset('admin/vendor/css/jquery_ui.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/css/dataTable.jqueryui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/css/dataTable.scroller.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href={{ asset('build/assets/app-e5178921.css') }}>

    <link rel="stylesheet" href={{ asset('admin/vendor/css/myStyle.css') }}>

</head>
<body>
<div class="body-wrapper">
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
        <div class="mdc-drawer__header">
            <a href="{{route('dashboard' , app()->getLocale())}}"
               class="brand-logo text-white text-decoration-none text-center">
                <h3>  {{__('Cars Repair')}}</h3>
            </a>
        </div>
        <div class="mdc-drawer__content">
            <div class="user-info">
                <p class="name">{{Auth::user()->name}}</p>
                <p class="email">{{Auth::user()->email}}</p>
            </div>
            <div class="mdc-list-group">
                <nav class="mdc-list mdc-drawer-menu">
                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="{{route('dashboard' , app()->getLocale())}}">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"
                               aria-hidden="true">dashboard</i>
                            @if(app()->getLocale() === 'ar')
                                <h5 class="mt-3 mr-2"> {{__('Dashboard')}}  </h5>
                            @else
                                <h6 class="mt-3 mr-2"> {{__('Dashboard')}}  </h6>
                            @endif

                        </a>
                    </div>
                    @if(Auth::user()->role->name === 'Employee')
                        {{--                        <div class="mdc-list-item mdc-drawer-item">--}}
                        {{--                            <a class="mdc-drawer-link" href="{{route('orders.index' , app()->getLocale())}}">--}}
                        {{--                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"--}}
                        {{--                                   aria-hidden="true">add</i>--}}
                        {{--                                @if(app()->getLocale() === 'ar')--}}
                        {{--                                    <h5--}}
                        {{--                                        class="mt-3 mr-2"> {{__('Orders')}}  </h5>--}}
                        {{--                                @else--}}
                        {{--                                    <h6 class="mt-3 mr-2"> {{__('Orders')}}  </h6>--}}
                        {{--                                @endif--}}
                        {{--                            </a>--}}
                        {{--                        </div>--}}
                    @endif


                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="{{route('containers.index' , app()->getLocale())}}">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"
                               aria-hidden="true">add</i>
                            @if(app()->getLocale() === 'ar')
                                <h5 class="mt-3 mr-2"> {{__('Containers')}}  </h5>
                            @else
                                <h6 class="mt-3 mr-2"> {{__('Containers')}}  </h6>
                            @endif
                        </a>
                    </div>


                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="{{route('_cars.index' , app()->getLocale())}}">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"
                               aria-hidden="true">add</i>
                            @if(app()->getLocale() === 'ar')
                                <h5 class="mt-3 mr-2"> {{__('Shop Cars')}}  </h5>
                            @else
                                <h6 class="mt-3 mr-2"> {{__('Shop Cars')}}  </h6>
                            @endif
                        </a>
                    </div>


                    @if(Auth::user()->role->name === 'Admin')

                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="{{route('bills.index' , app()->getLocale())}}">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"
                                   aria-hidden="true">add</i>
                                @if(app()->getLocale() === 'ar')
                                    <h5 class="mt-3 mr-2"> {{__('Bills')}}  </h5>
                                @else
                                    <h6 class="mt-3 mr-2"> {{__('Bills')}}  </h6>
                                @endif
                            </a>
                        </div>

                    @endif


                    @if(Auth::user()->role->name === 'Admin' || Auth::user()->role->name === 'Supervisor')

                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel"
                               data-target="ui-sub-menu-report">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"
                                   aria-hidden="true">star</i>
                                @if(app()->getLocale() === 'ar')
                                    <h5 class="mt-3 mr-2"> {{__('Reports')}}  </h5>
                                @else
                                    <h6 class="mt-3 mr-2"> {{__('Reports')}}  </h6>
                                @endif

                                <i class="mdc-drawer-arrow material-icons mr-2">chevron_right</i>
                            </a>
                            <div class="mdc-expansion-panel" id="ui-sub-menu-report">
                                <nav class="mdc-list mdc-drawer-submenu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link"
                                           href="{{route('bill_report' , app()->getLocale())}}">
                                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"
                                               aria-hidden="true">book</i>
                                            @if(app()->getLocale() === 'ar')
                                                <h5 class="mt-3 mr-2"> {{__('Bills Report')}}  </h5>
                                            @else
                                                <h6 class="mt-3 mr-2"> {{__('Bills Report')}}  </h6>
                                            @endif
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    @endif

                    {{--  Settings--}}
                    @if(Auth::user()->role->name === 'Admin' || Auth::user()->role->name === 'Supervisor')
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel"
                               data-target="ui-sub-menu">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon mt-2"
                                   aria-hidden="true">settings</i>
                                @if(app()->getLocale() === 'ar')
                                    <h5 class="mt-3 mr-2"> {{__('System Settings')}}  </h5>
                                @else
                                    <h6 class="mt-3 mr-2"> {{__('System Settings')}}  </h6>
                                @endif

                                <i class="mdc-drawer-arrow material-icons mr-2">chevron_right</i>
                            </a>
                            <div class="mdc-expansion-panel" id="ui-sub-menu">
                                <nav class="mdc-list mdc-drawer-submenu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link"
                                           href="{{route('users.index' , app()->getLocale())}}">
                                            @if(app()->getLocale() === 'ar')
                                                <h5 class="mt-3 mr-2"> {{__('Users')}}  </h5>
                                            @else
                                                <h6 class="mt-3 mr-2"> {{__('Users')}}  </h6>
                                            @endif
                                        </a>
                                    </div>

                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link"
                                           href="{{route('bill_types.index' , app()->getLocale())}}">
                                            @if(app()->getLocale() === 'ar')
                                                <h5 class="mt-3 mr-2"> {{__('Bill Types')}}  </h5>
                                            @else
                                                <h6 class="mt-3 mr-2"> {{__('Bill Types')}}  </h6>
                                            @endif
                                        </a>
                                    </div>

                                    {{--                                    <div class="mdc-list-item mdc-drawer-item">--}}
                                    {{--                                        <a class="mdc-drawer-link"--}}
                                    {{--                                           href="{{ route('_restaurants.index' , app()->getLocale()) }}">--}}

                                    {{--                                            @if(app()->getLocale() === 'ar')--}}
                                    {{--                                                <h5--}}
                                    {{--                                                    class="mt-3 mr-2"> {{__('Restaurants')}}  </h5>--}}
                                    {{--                                            @else--}}
                                    {{--                                                <h6 class="mt-3 mr-2"> {{__('Restaurants')}}  </h6>--}}
                                    {{--                                            @endif--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}


                                    {{--                                    <div class="mdc-list-item mdc-drawer-item">--}}
                                    {{--                                        <a class="mdc-drawer-link" href="{{route('menu_items.index' , app()->getLocale())}}">--}}
                                    {{--                                            @if(app()->getLocale() === 'ar')--}}
                                    {{--                                                <h5 class="mt-3 mr-2"> {{__('Menu Items')}}  </h5>--}}
                                    {{--                                            @else--}}
                                    {{--                                                <h6 class="mt-3 mr-2"> {{__('Menu Items')}}  </h6>--}}
                                    {{--                                            @endif--}}

                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}

                                </nav>
                            </div>
                        </div>
                    @endif

                </nav>
            </div>
        </div>
    </aside>

    {{-- Top bar--}}
    <div class="main-wrapper mdc-drawer-app-content">
        <header class="mdc-top-app-bar">
            <div class="mdc-top-app-bar__row">
                <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                    <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu
                    </button>
                </div>
                <div
                        class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                    <div class="menu-button-container menu-profile d-none d-md-block">
                        <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                </span>
                        </button>
                        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-account-edit-outline text-primary"></i>
                                    </div>
                                    <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">Edit profile</h6>
                                    </div>
                                </li>
                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon-only">
                                        <i class="mdi mdi-settings-outline text-primary"></i>
                                    </div>
                                    <div
                                            class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="item-subject font-weight-normal">Logout</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--                    @if(Auth::user()->role->name === 'Employee')--}}
                    {{--                        <div class="menu-button-container">--}}
                    {{--                            <button class="mdc-button mdc-menu-button">--}}
                    {{--                                <i class="mdi mdi-bell mdi-24px mr-3"></i>--}}
                    {{--                                <span class="count-indicator">--}}
                    {{--                              <span--}}
                    {{--                                  class="count font-weight-bold mt-2 p-5"><h6> {{Auth::user()->unreadNotifications->count()}}</h6></span>--}}
                    {{--                            </span>--}}
                    {{--                            </button>--}}
                    {{--                            <div class="mdc-menu mdc-menu-surface" tabindex="-1">--}}
                    {{--                                <h6 class="title"><i class="mdi mdi-bell-outline mr-2 tx-16"></i>--}}
                    {{--                                    {{__('Notifications')}}--}}
                    {{--                                </h6>--}}

                    {{--                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">--}}

                    {{--                                    @if(count(Auth::user()->unreadNotifications))--}}
                    {{--                                        <li class="mdc-list-item" role="menuitem">--}}
                    {{--                                            <form--}}
                    {{--                                                action="{{route('mark_all_read' , [ 'language' =>app()->getLocale() ] )}}"--}}
                    {{--                                                id="form" method="post">--}}
                    {{--                                                @csrf--}}
                    {{--                                                <a onclick="document.querySelector('#form').submit();"--}}
                    {{--                                                   class=" title text-decoration-none text-center text-purple fs-5">--}}
                    {{--                                                    {{__('Mark All As Read')}}--}}
                    {{--                                                </a>--}}
                    {{--                                            </form>--}}
                    {{--                                        </li>--}}
                    {{--                                    @endif--}}

                    {{--                                    @foreach(Auth::user()->unreadNotifications as $notification)--}}
                    {{--                                        <li class="mdc-list-item" role="menuitem">--}}
                    {{--                                            <div class="item-thumbnail item-thumbnail-icon">--}}
                    {{--                                                <i class="mdi mdi-email-outline"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div--}}
                    {{--                                                class="item-content d-flex align-items-start flex-column justify-content-center">--}}
                    {{--                                                <h6 class="item-subject font-weight-normal">--}}
                    {{--                                                    <a href="{{route('orders.show' ,[ 'language' => app()->getLocale() , 'order' => $notification->data['order_id'] , 'notification_id' => $notification->id] )}}"--}}
                    {{--                                                       class="text-decoration-none text-purple">--}}
                    {{--                                                        --}}{{--                                                                                            {{\App\Http\Controllers\BillController::getBillable(\App\Models\Bill::findOrFail($notification->data['bill_id']))->customer_name}}--}}
                    {{--                                                        --}}{{--                                                                                            ---}}
                    {{--                                                        --}}{{--                                                                                            {{\App\Http\Controllers\BillController::getBillable(\App\Models\Bill::findOrFail($notification->data['bill_id']))->customer_phone}}--}}
                    {{--                                                        --}}{{--                                                                                            ---}}
                    {{--                                                        ({{__('Table Number')}}--}}
                    {{--                                                        : {{ \App\Models\Order::findOrFail($notification->data['order_id'])->table_number }}--}}
                    {{--                                                        ) - ({{__('Order Number')}}--}}
                    {{--                                                        : {{ \App\Models\Order::findOrFail($notification->data['order_id'])->id }}--}}
                    {{--                                                        )--}}
                    {{--                                                    </a>--}}
                    {{--                                                </h6>--}}
                    {{--                                                --}}{{--                                                                                    <small class="text-muted">{{Illuminate\Support\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans()}} </small>--}}
                    {{--                                            </div>--}}
                    {{--                                        </li>--}}
                    {{--                                    @endforeach--}}

                    {{--                                    @if(count(Auth::user()->unreadNotifications) === 0)--}}
                    {{--                                        <h6 class="text-center m-2"> {{__('No Data')}}</h6>--}}
                    {{--                                    @endif--}}

                    {{--                                    --}}{{--                                <li class="mdc-list-item" role="menuitem">--}}
                    {{--                                    --}}{{--                                    <div class="item-thumbnail item-thumbnail-icon">--}}
                    {{--                                    --}}{{--                                        <i class="mdi mdi-account-outline"></i>--}}
                    {{--                                    --}}{{--                                    </div>--}}
                    {{--                                    --}}{{--                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">--}}
                    {{--                                    --}}{{--                                        <h6 class="item-subject font-weight-normal">New user registered</h6>--}}
                    {{--                                    --}}{{--                                        <small class="text-muted"> 15 min ago </small>--}}
                    {{--                                    --}}{{--                                    </div>--}}
                    {{--                                    --}}{{--                                </li>--}}
                    {{--                                    --}}{{--                                <li class="mdc-list-item" role="menuitem">--}}
                    {{--                                    --}}{{--                                    <div class="item-thumbnail item-thumbnail-icon">--}}
                    {{--                                    --}}{{--                                        <i class="mdi mdi-alert-circle-outline"></i>--}}
                    {{--                                    --}}{{--                                    </div>--}}
                    {{--                                    --}}{{--                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">--}}
                    {{--                                    --}}{{--                                        <h6 class="item-subject font-weight-normal">System Alert</h6>--}}
                    {{--                                    --}}{{--                                        <small class="text-muted"> 2 days ago </small>--}}
                    {{--                                    --}}{{--                                    </div>--}}
                    {{--                                    --}}{{--                                </li>--}}
                    {{--                                    --}}{{--                                <li class="mdc-list-item" role="menuitem">--}}
                    {{--                                    --}}{{--                                    <div class="item-thumbnail item-thumbnail-icon">--}}
                    {{--                                    --}}{{--                                        <i class="mdi mdi-update"></i>--}}
                    {{--                                    --}}{{--                                    </div>--}}
                    {{--                                    --}}{{--                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">--}}
                    {{--                                    --}}{{--                                        <h6 class="item-subject font-weight-normal">You have a new update</h6>--}}
                    {{--                                    --}}{{--                                        <small class="text-muted"> 3 days ago </small>--}}
                    {{--                                    --}}{{--                                    </div>--}}
                    {{--                                    --}}{{--                                </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}

                    <div class="divider d-none d-md-block"></div>


                    @php
                        // set the laguage with other parames url
                        $params = request()
                            ->route()
                            ->parameterNames();
                        $params_values = [];

                        foreach ($params as $param) {
                            $params_values = request()
                                ->route()
                                ->parameters($param);
                        }

                        if (app()->getLocale() === 'ar') {
                            $params_values['language'] = 'en';
                        } else {
                            $params_values['language'] = 'ar';
                        }

                    @endphp

                    @if (app()->getLocale() === 'ar')

                        <a id="languages" rel="nofollow"
                           href="{{ route(Route::CurrentRouteName(), $params_values) }} "
                           class="nav-link language dropdown-toggle ml-2">
                            <img src={{ asset('admin/vendor/images/flags/GB.png') }} alt="English"><span
                                    class="d-none d-sm-inline-block mr-2 ml-2">English</span></a>

                    @else

                        <a id="languages" rel="nofollow"
                           href="{{ route(Route::CurrentRouteName(), $params_values) }} "
                           class="nav-link language dropdown-toggle mr-2">
                            <img src={{ asset('admin/vendor/images/flags/OM.png') }} alt="Arabic"><span
                                    class="d-none d-sm-inline-block ml-2 mr-2">عربي</span></a>

                    @endif

                    <div class="menu-button-container ">

                        <button class="mdc-button mdc-menu-button" title="{{__('Logout')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout-variant "></i>
                        </button>
                        <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST"
                              class="d-none">
                              @csrf
                        </form>
                    </div>
                </div>
            </div>
        </header>


        <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <div class="mdc-card">

                                <div class="message mt-5">
                                    @if (Session::has('message'))
                                        <p class="alert text-center {{ Session::get('alert-class', 'alert-info') }}">
                                            @foreach(explode(' ' ,Session::get('message')) as $message)
                                                {{  __(str_replace('-' , ' ' ,  $message) )}}
                                            @endforeach
                                        </p>
                                    @endif
                                </div>

                                <div class="justify-content-center"
                                     @if(app()->getLocale() == 'ar') dir="rtl" @endif>
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer>
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © Cars-Repair-Management 2023</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- plugins:js -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>--}}

<script src={{ asset('build/assets/app-5149f3f7.js') }}></script>

<script src="{{asset('admin/vendor/vendors/js/vendor.bundle.base.js')}}"></script>
{{--    select2 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
{{--   Alertify --}}
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('admin/vendor/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('admin/vendor/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('admin/vendor/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('admin/vendor/js/material.js')}}"></script>
<script src="{{asset('admin/vendor/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('admin/vendor/js/dashboard.js')}}"></script>
<script src={{ asset('admin/vendor/js/myScript.js') }}></script>

@yield('scripts')

</body>
</html>
