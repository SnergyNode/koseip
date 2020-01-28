<?php
    $breadcrumbs = [

    ];
    $active['dashboard']='active';
?>
@extends('admin.layouts.main')

@section('content')



        <!-- Dashboard Headline -->
        <div class="dashboard-headline">

            <h3>Dashboard</h3>

            @include('admin.layouts.breadcrumb')
        </div>

        <!-- Fun Facts Container -->
        <div class="fun-facts-container">
            <div class="fun-fact" data-fun-fact-color="#36bd78">
                <div class="fun-fact-text">
                    <span>Registered Keke</span>
                    <h4>{{ $keke }}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-line-awesome-motorcycle"></i></div>
            </div>
            <div class="fun-fact" data-fun-fact-color="#b81b7f">
                <div class="fun-fact-text">
                    <span>Owners</span>
                    <h4>{{ $owners }}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-feather-users"></i></div>
            </div>
            <div class="fun-fact" data-fun-fact-color="#efa80f">
                <div class="fun-fact-text">
                    <span>Riders</span>
                    <h4>{{ $riders }}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-line-awesome-user"></i></div>
            </div>

            <!-- Last one has to be hidden below 1600px, sorry :( -->
            <div class="fun-fact" data-fun-fact-color="#2a41e6">
                <div class="fun-fact-text">
                    <span>Associations</span>
                    <h4>{{ $assoc }}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-line-awesome-flag"></i></div>
            </div>
        </div>



        <!-- Row -->
        <div class="row">

            <!-- Dashboard Box -->
            <div class="col-xl-6">
                <div class="dashboard-box">
                    <div class="headline">
                        <h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
                        <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
                            <i class="icon-feather-check-square"></i>
                        </button>
                    </div>
                    <div class="content">
                        <ul class="dashboard-box-list">
                            <li>
                                <span class="notification-icon"><i class="icon-feather-info"></i></span>
                                <span class="notification-text">
										<strong>No New Notifications</strong>
									</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Dashboard Box -->
            <div class="col-xl-6">
                <div class="dashboard-box">
                    <div class="headline">
                        <h3><i class="icon-material-outline-assignment"></i> Requests</h3>
                    </div>
                    <div class="content">
                        <ul class="dashboard-box-list">
                            <li>
                                <div class="invoice-list-item">
                                    <strong>No New Requests</strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row / End -->




@endsection
