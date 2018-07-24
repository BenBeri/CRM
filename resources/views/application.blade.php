<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="author" content="bitlers">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="{{ asset('js/jquery-2.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
</head>
<body>
<header class="simple-normal">
    <div class="top-bar">
        <div class="logo">
            <a href="index.html" title=""><i class="fa fa-bullseye"></i> CRM</a>
        </div>
        <div class="menu-options"><span class="menu-action"><i></i></span></div>
        <div class="top-bar-quick-sec">
            <ul class="quick-notify-section custom-dropdowns">
                <li class="message-list dropdown">
                    <span><i class="fa fa-users"></i><strong>7</strong></span>
                </li>
                <li class="message-list dropdown">
                    <span><i class="fa fa-heart"></i><strong>7</strong></span>
                </li>
                <li class="message-list dropdown">
                    <span><i class="fa fa-bell-o"></i><strong class="skyblue-bg">7</strong></span>
                    <div class="message drop-list">
                        <span>You have 4 New Messages</span>
                        <ul>
                            <li>
                                <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Labrina Scholer</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status blue-bg">New</p></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Jonathan</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status red-bg">Unsent</p></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Barada knol</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status green-bg">Reply</p></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Samtha Gee</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status">New</p></a>
                            </li>
                        </ul>
                        <a href="inbox.html" title="">See All Messages</a>
                    </div><!-- Message Drop List -->
                </li>
            </ul>
            <div class="name-area">
                <a href="javascript:void(0)" title=""><strong>{{{ Auth::user()->name }}}</strong></a>
            </div>
        </div>
    </div><!-- Top Bar -->
    <div class="side-menu-sec" id="header-scroll">
        <ul id="side-menu-nav">
            <li class="{{(Request::is("/") || Request::is("leads")) ? "active" : ""}}">
                <a href="{{url('/leads')}}"><span class="fa fa-users"></span><span>Leads</span></a>
            </li>
            <li class="{{Request::is("customers") ? "active" : ""}}">
                <a href="{{url('/customers')}}"><span class="fa fa-diamond"></span><span>Customers</span></a>
            </li>
        </ul>
    </div>
</header>
@yield('content')
</body>
</html>
