@extends('application')
@section('title', 'Login')

@section('content')
    <!-- Our Website Content Goes Here -->
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
            <div class="side-menus">
                <nav>
                    <ul class="parent-menu">
                        <li class="menu-item-has-children active">
                            <a title=""><i class="ti-desktop"></i><span>Dashboard</span></a>
                            <ul class="mega" style="display:block">
                                <li><a href="index.html" title=""><i class="ti-user"></i> Leads</a></li>
                                <li><a href="index2.html" title=""><i class="ti-heart"></i> Customers</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a title=""><i class="ti-user"></i><span>Account</span></a>
                            <ul>
                                <li><a href="index.html" title=""><i class="ti-sign-out"></i> Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <span class="footer-line">2017 Copyright Glade by <a title="" href="http://themeforest.net/user/bitlers/portfolio?ref=bitlers">bitlers</a></span>
            </div>
        </div>
    </header>
    <div class="slide-panel" id="panel-scroll">
        <ul role="tablist" class="nav nav-tabs panel-tab-btn">
            <li class="active"><a data-toggle="tab" role="tab" data-target="#panel-tab1"><i class="ti-email"></i><span>Your Emails</span></a></li>
            <li><a data-toggle="tab" role="tab" data-target="#panel-tab2"><i class="ti-settings"></i><span>Your Setting</span></a></li>
        </ul>
        <div class="tab-content panel-tab">
            <div id="panel-tab1" class="tab-pane fade in active">
                <div class="recent-mails-widget">
                    <form><div id="searchMail"></div></form>
                    <h3>Recent Emails</h3>
                    <ul id="mail-list" class="mail-list">
                        <li>
                            <div class="title">
                                <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                <h3><a href="javascript:void(0)" title="">Kim Hostwood</a><span>5 min ago</span></h3>
                                <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                            </div>
                            <h4>Themeforest Admin Template</h4>
                            <p>This product is so good that i manage to buy.</p>
                        </li>
                        <li>
                            <div class="title">
                                <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                <h3><a href="javascript:void(0)" title="">John Doe</a><span>2 hours ago</span></h3>
                                <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                            </div>
                            <h4>Themeforest Admin Template</h4>
                            <p>This product is so good that i manage to buy.</p>
                        </li>
                        <li>
                            <div class="title">
                                <span><img src="http://placehold.it/40x40" alt="" /><i class="offline"></i></span>
                                <h3><a href="javascript:void(0)" title="">Jonathan Doe</a><span>8 min ago</span></h3>
                                <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                            </div>
                            <h4>Themeforest Admin Template</h4>
                            <p>This product is so good that i manage to buy.</p>
                        </li>
                    </ul>
                    <a href="#/pages/inbox" title="" class="red-bg">View All Messages</a>
                </div><!-- Recent Email Widget -->

                <div class="file-transfer-widget">
                    <h3>FILE TRANSFER</h3>
                    <div class="toggle">
                        <ul>
                            <li>
                                <i class="ti-file"></i><h4>my-excel.xls<i>20 min ago</i></h4>
                                <div class="progress">
                                    <div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar red-bg">
                                        90%
                                    </div>
                                </div>
                                <div class="file-action-btn">
                                    <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <li>
                                <i class="ti-zip"></i><h4>my-cv.pdf<i>8 min ago</i></h4>
                                <div class="progress">
                                    <div style="width: 40%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar blue-bg">
                                        40%
                                    </div>
                                </div>
                                <div class="file-action-btn">
                                    <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <li>
                                <i class="ti-files"></i><h4>portfolio-shoot.mp4<i>12 min ago</i></h4>
                                <div class="progress">
                                    <div style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar green-bg">
                                        70%
                                    </div>
                                </div>
                                <div class="file-action-btn">
                                    <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- File Transfer -->
            </div>
            <div id="panel-tab2" class="tab-pane fade">
                <div class="setting-widget">
                    <form>
                        <h3>Accounts</h3>
                        <div class="toggle-setting">
                            <span>Office Account</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Personal Account</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Business Account</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                    </form>

                    <form>
                        <h3>General Setting</h3>
                        <div class="toggle-setting">
                            <span>Notifications</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Notification Sound</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>My Profile</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Show Online</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Public Profile</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                    </form>
                </div><!-- Setting Widget -->
            </div>
        </div>
    </div><!-- Slide Panel -->
    <div class="main-content">
        <div class="panel-content">
            <div class="main-title-sec">
                <div class="row">
                    <div class="col-md-3 column">
                        <div class="heading-profile">
                            <h2>Blank Page</h2>
                            <span>Welcome back, {{{ Auth::user()->name }}}</span>
                        </div>
                    </div>
                </div>
            </div><!-- Heading Sec -->
            <ul class="breadcrumbs">
                <li><a href="javascript:void(0)" title="">Home</a></li>
                <li>Blank</li>
            </ul>
            <div class="main-content-area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget blank">
                            <p>Your Content here...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Panel Content -->
    </div>
@endsection