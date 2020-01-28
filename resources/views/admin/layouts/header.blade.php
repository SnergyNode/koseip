<header id="header-container" class="fullwidth dashboard-header not-sticky">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="#"><img src="{{ url('images/logo.png') }}" alt=""></a>
                </div>

                <nav id="navigation">
                    <ul id="responsive" class="pt-2">
                        <li><h5> Hello {{ $person->first_name }}!</h5></li>
                    </ul>
                </nav>



            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">

                <!--  User Notifications -->
                <div class="header-widget hide-on-mobile">

                    <!-- Notifications -->
                    <div class="header-notifications">

                        <!-- Trigger -->
                        <div class="header-notifications-trigger">
                            <a href="#"><i class="icon-feather-bell"></i><!--<span>4</span>--></a>
                        </div>

                        <!-- Dropdown -->
                        {{--@include('admin.components.notifications')--}}

                    </div>


                </div>
                <!--  User Notifications / End -->

                <!-- User Menu -->
                <div class="header-widget">

                    <!-- Messages -->
                    <div class="header-notifications user-menu">
                        <div class="header-notifications-trigger">
                            <a href="#"><div class="user-avatar status-online"><img src="{{ $person->setPhoto() }}" alt=""></div></a>
                        </div>

                        <!-- Dropdown -->
                        <div class="header-notifications-dropdown">

                            <!-- User Status -->
                            <div class="user-status">

                                <!-- User Name / Avatar -->
                                <div class="user-details">
                                    <div class="user-avatar status-online"><img src="{{ $person->setPhoto() }}" alt=""></div>
                                    <div class="user-name">
                                        {{ $person->setName() }} <span>{{ $person->pos() }}</span>
                                    </div>
                                </div>

                                <!-- User Status Switcher -->
                                <!--
                                <div class="status-switch" id="snackbar-user-status">
                                    <label class="user-online current-status">Online</label>
                                    <label class="user-invisible">Invisible</label>
                                    <span class="status-indicator" aria-hidden="true"></span>
                                </div>
                                -->
                            </div>

                            <ul class="user-menu-small-nav">
                                <li><a href="{{ route('admin.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                <li><a href="#"><i class="icon-material-outline-settings"></i> Settings</a></li>

                                <li><a href="#" class="tryLogout" data-out="{{ route('logout') }}" onclick="event.preventDefault(); window.location = $('.tryLogout').data('out') "><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>

                        </div>
                    </div>

                </div>
                <!-- User Menu / End -->

                <!-- Mobile Navigation Button -->
                <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>