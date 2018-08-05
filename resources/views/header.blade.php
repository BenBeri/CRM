<header class="simple-normal">
    <div class="top-bar">
        <div class="logo">
            <a href="index.html" title=""><i class="fa fa-bullseye"></i> Glade</a>
        </div>
        <div class="menu-options"><span class="menu-action"><i></i></span></div>
        <div class="search-dashboard">
            <div class="responsive-search">
                <i class="fa fa-search"></i>
            </div>
            <form>
                <input type="text" placeholder="Search here" />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- Search Dashboard -->
        <div class="top-bar-quick-sec">
            <ul class="quick-notify-section custom-dropdowns">
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
                <li class="notification-list dropdown">
                    <span><i class="fa fa-envelope-o"></i><strong class="red-bg">12</strong></span>
                    <div class="notification drop-list">
                        <span>You have 3 New Notifications</span>
                        <ul>
                            <li>
                                <a href="javascript:void(0)" title=""><span><i class="ti-pulse red-bg"></i></span>Server 3 is Over Loader Please Check... <h6>2 min ago..</h6></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>MD Daisal</i>New User Registered<h6>4 min ago..</h6><p class="status red-bg">Urgent</p></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title=""><span><i class="ti-crown green-bg"></i></span>Envato Has change the policies<h6>7 min ago..</h6></a>
                            </li>
                        </ul>
                        <a href="javascript:void(0)" title="">See All Notifications</a>
                    </div><!-- Notification Drop list -->
                </li>
                <li class="activity-list dropdown">
                    <span><i class="fa fa-bug"></i><strong class="blue-bg">12</strong></span>
                    <div class="activity drop-list">
                        <span>Recent Activity</span>
                        <ul>
                            <li>
                                <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Jona Than</i>Uploading new files<h6>2 min ago..</h6><p class="status green-bg">Online</p></a>
                                <div class="progress">
                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar blue-bg">
                                        60%
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Bela Nisaa</i>Downloading new Documents<h6>2 min ago..</h6></a>
                                <div class="progress">
                                    <div style="width: 34%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="34" role="progressbar" class="progress-bar red-bg">
                                        34%
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="javascript:void(0)" title="">See All Activity</a>
                    </div><!-- Activity Drop list -->
                </li>
            </ul>
            <span class="open-panel"><i class="fa fa-cog fa-spin"></i></span>
            <span id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt"></i></span>
            <div class="name-area">
                <a href="javascript:void(0)" title=""><img src="http://placehold.it/100x100" alt="" /> <strong>John Doe</strong></a>
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