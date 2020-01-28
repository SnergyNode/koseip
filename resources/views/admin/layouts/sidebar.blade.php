<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
                <span class="trigger-title">Dashboard Navigation</span>
            </a>

            <!-- Navigation -->
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">

                    <ul data-submenu-title="Menu">
                        <li class="{{ @$active['dashboard'] }}"><a href="{{ route('admin.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                        <li class="{{ @$active['admin'] }}"><a href="{{ route('admin.admin') }}"><i class="icon-material-outline-account-circle"></i> Admin {!! !empty($admin_count)?"<span class='nav-tag'>$admin_count</span>":'' !!}</a></li>
                    </ul>

                    <ul data-submenu-title="Organize and Manage">
                        <li class="{{ @$active['keke'] }}"><a href="#"><i class="icon-line-awesome-motorcycle"></i> Keke</a>
                            <ul>
                                <li><a href="{{ route('keke.index') }}">Manage Keke</a></li>
                                <li><a href="#">Find a Keke</a></li>
                            </ul>
                        </li>
                        <li class="{{ @$active['location'] }}"><a href="#"><i class="icon-feather-map"></i> Geo Locations</a>
                            <ul>
                                <li><a href="{{ route('state.index') }}">Manage States </a></li>
                                <li><a href="{{ route('lga.index') }}">Manage LGA</a></li>
                                <li><a href="{{ route('area.index') }}">Manage Area</a></li>

                            </ul>
                        </li>
                        <li class="{{ @$active['assoc'] }}"><a href="#"><i class="icon-feather-flag"></i> Associations</a>
                            <ul>
                                <li><a href="{{ route('assoc.index') }}">Manage Association</a></li>
                                {{--<li><a href="#">Manage Contact Person</a></li>--}}

                            </ul>
                        </li>
                        <li class="{{ @$active['owners'] }}"><a href="#"><i class="icon-feather-users"></i> Owners</a>
                            <ul>
                                <li><a href="{{ route('owner.index') }}">Manage Owners
                                        {{--<span class="nav-tag">3</span>--}}
                                    </a></li>
                                <li><a href="{{ route('rider.index') }}">Manage Riders</a></li>
                            </ul>
                        </li>
                        <li class="{{ @$active['generate'] }}"><a href="#"><i class="icon-line-awesome-industry"></i> Factory</a>
                            <ul>
                                <li><a href="{{ route('generator') }}">Generator</a></li>
                                <li><a href="#">Data Manager</a></li>


                            </ul>
                        </li>


                        <!--
                        <li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
                            <ul>
                                <li><a href="dashboard-manage-tasks.html">Manage Tasks <span class="nav-tag">2</span></a></li>
                                <li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
                                <li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>
                                <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                            </ul>
                        </li>
                        -->
                    </ul>

                    <ul data-submenu-title="Account">
                        <li><a href="#"><i class="icon-material-outline-settings"></i> Settings</a></li>
                        <li>
                            <a href="#" class="tryLogout2"
                               data-out="{{ route('logout') }}"
                               onclick="event.preventDefault(); window.location = $('.tryLogout2').data('out') ">
                                <i class="icon-material-outline-power-settings-new"></i> Logout
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- Navigation / End -->

        </div>
    </div>
</div>