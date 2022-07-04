<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>{{ get_option('site_title', config('app.name')) }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ get_favicon() }}">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- DataTables -->
    <link href="{{ asset('public/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('public/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/backend/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/backend/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/backend/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" />

    <!-- App Css -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/styles.css?v=1.1') }}">

    <!-- Modernizr -->
    <script src="{{ asset('public/backend/assets/js/modernizr-2.8.3.min.js') }}"></script>


    @if(get_company_option('backend_direction',get_option('backend_direction')) == "rtl")
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/rtl/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/rtl/style.css') }}">
    @endif

    <!-- Bootstrap Css -->
    <link href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    @include('layouts.others.languages')

</head>

<body class="sb-nav-fixed" data-topbar="dark" data-layout="horizontal" data-layout-scrollable="true">
    <!-- Main Modal -->
    <div id="main_modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert alert-danger d-none m-3"></div>
                <div class="alert alert-primary d-none m-3"></div>
                <div class="modal-body overflow-hidden"></div>

            </div>
        </div>
    </div>

    <!-- Secondary Modal -->
    <div id="secondary_modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title mt-0 text-dark"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert alert-danger d-none m-3"></div>
                <div class="alert alert-primary d-none m-3"></div>
                <div class="modal-body overflow-hidden"></div>
            </div>
        </div>
    </div>

    <!-- Preloader area start -->
    <div id="preloader"></div>
    <!-- Preloader area end -->

    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <a class="navbar-brand text-md-center"
                ></a>
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ route('dashboard') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                {{-- <img src="assets/images/logo.svg" alt="" height="22"> --}}
                                
                            </span>
                            <span class="logo-lg">
                                {{-- <img src="assets/images/logo-dark.png" alt="" height="17"> --}}
                                A
                            </span>
                        </a>
        
                        <a href="{{ route('dashboard') }}" class="logo logo-light">
                            <span class="logo-sm">
                                {{-- <img src="assets/images/logo-light.svg" alt="" height="22"> --}}
                                A
                            </span>
                            <span class="logo-lg">
                                {{-- <img src="assets/images/logo-light.png" alt="" height="19"> --}}
                                {{ get_option('site_title', config('app.name')) }}
                            </span>
                        </a>
                    </div>
        
                    <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
        
                </div>
        
                <div class="d-flex">
        
            
                    
        
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>
        
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small" key="t-view-all"> View_All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1" key="t-your-order">Your_order_is_placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">languages_grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3_min_ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-3.jpg"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">James Lemire</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-simplified">simplified_English</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1_hours_ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1" key="t-shipped">Your_item_is_shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">several_grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3_min_ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
        
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-4.jpg"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-occidental">Cambridge_occidental</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1_hours_ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View_More</span> 
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ profile_picture() }}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            @if(Auth::user()->user_type == 'user' && get_option('membership_system') == 'enabled')
                                    <a class="dropdown-item" href="{{ route('membership.extend') }}"><i class="dripicons-article font-size-16 align-middle me-1"></i> <span key="membership-extend">{{ _lang('Extend Membership') }}</span></a>
                            @endif
                            <a class="dropdown-item"  href="{{ route('profile.index') }}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">{{ _lang('My Profile') }}</span></a>
                            <a class="dropdown-item d-block" href="{{ route('profile.edit') }}"><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">{{ _lang('Profile Settings') }}</span></a>
                            <a class="dropdown-item" href="{{ route('profile.change_password') }}"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">{{ _lang('Change Password') }}</span></a>
                            @if(Auth::user()->user_type == 'admin')      
                            <a class="dropdown-item" href="{{ route('settings.update_settings') }}"><i
                                    class="bx bx-slider-alt font-size-16 align-middle me-1"></i> <span key="t-update_settings">{{ _lang('System Settings') }}</span></a>
                            @elseif(Auth::user()->user_type == 'user')   
                            <a class="dropdown-item" href="{{ route('company.change_settings') }}"><i
                                    class="bx bx-slider-alt font-size-16 align-middle me-1"></i> <span key="t-change_settings">{{ _lang('Company Settings') }}</span></a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ url('logout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">{{ _lang('Logout') }}</span></a>
                        </div>
                    </div>
        
                </div>
            </div>
        </header>
    </div>
    <!--Header Nav-->
    

    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    @include('layouts.menus.'.Auth::user()->user_type)
                </div>
            </nav>
        </div>
    </div>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @if(get_option('membership_system') == 'enabled' && Auth::user()->user_type == 'user')
                    @if( Auth::user()->valid_to < date('Y-m-d'))
                        <div class="alert alert-danger">
                            <b>{{ _lang('Your membership has expired. Please renew your membership !') }}</b>
                            <a href="{{ route('membership.extend') }}">{{ _lang('Extend Membership') }}</a>
                        </div>
                    @endif
				@endif

                <div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
                    <button type="button" id="close_alert" class="close">
						<span aria-hidden="true"><i class="ti-close"></i></span>
					</button>
                    <span class="msg"></span>
                </div>
            
            @yield('content')
            </div>
            
        </div>
        <!-- End Page-content -->
        @include('layouts.footer')
    </div>
    <!-- end main content-->


    <!-- Core Js  -->
    <script src="{{ asset('public/backend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
    <script src="{{ asset('public/backend/assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/moment/moment.js') }}"></script>

    <!-- Datatable js -->
    <script src="{{ asset('public/backend/plugins/datatable/datatables.min.js') }}"></script>

    <script src="{{ asset('public/backend/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('public/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- JQUERY MASK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="{{ asset('public/backend/assets/js/app.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('public/backend/assets/js/scripts.js?v=1.1') }}"></script>

    <script type="text/javascript">

    /* Input Mask formats */
    $('.money').mask("#.##0,00", {reverse: true, removeMaskOnSubmit: true,unmaskAsNumber: true,allowMinus: false,});

    (function($) {

        "use strict";

        //Show Success Message
        @if(Session::has('success'))
			$("#main_alert > span.msg").html(" {{ session('success') }} ");
			$("#main_alert").addClass("alert-success").removeClass("alert-danger");
			$("#main_alert").css('display', 'block');
        @endif

        //Show Single Error Message
        @if(Session::has('error'))
			$("#main_alert > span.msg").html(" {{ session('error') }} ");
			$("#main_alert").addClass("alert-danger").removeClass("alert-success");
			$("#main_alert").css('display', 'block');
        @endif

        @php $i = 0; @endphp

        @foreach($errors->all() as $error)
			@if($loop-> first)
				$("#main_alert > span.msg").html("<i class='ti-info-alt'></i> {{ $error }} ");
				$("#main_alert").addClass("alert-danger").removeClass("alert-success");
			@else
				$("#main_alert > span.msg").append("<br><i class='ti-info-alt'></i> {{ $error }} ");
			@endif

			@if($loop-> last)
				$("#main_alert").css('display', 'block');
			@endif

        	@if(isset($errors-> keys()[$i]))
				var name = "{{ $errors->keys()[$i] }}";

				$("input[name='" + name + "']").addClass('error is-invalid');
				$("select[name='" + name + "'] + span").addClass('error is-invalid');

				$("input[name='" + name + "'], select[name='" + name + "']").parent().append(
					"<span class='v-error'>{{$error}}</span>");
        	@endif

        	@php $i++; @endphp

        @endforeach

    })(jQuery);
    </script>

    <!-- Custom JS -->
    @yield('js-script')

</body>

</html>