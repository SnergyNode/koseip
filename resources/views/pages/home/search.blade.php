<?php
$styleInject = ".transparent-header #header {background-color: #303030 !important;}";
?>
@extends('layouts.main')

@section('content')


    <div class="full-page-content-container">
        <div class="full-page-content-inner">

            <h3 class="page-title">Search Results</h3>

            <div class="notify-box margin-top-15">

                <div class="sort-by">
                    <span>Sort by:</span>
                    <select class="selectpicker hide-tick">
                        <option>Relevance</option>
                        <option>Newest</option>
                        <option>Oldest</option>
                        <option>Random</option>
                    </select>
                </div>
            </div>

            <!-- Tasks Container -->
            <div class="tasks-list-container tasks-grid-layout margin-top-35">

                @forelse($kekes as $keke)
                    <a href="#" class="task-listing">

                        <!-- Job Listing Details -->
                        <div class="task-listing-details">

                            <!-- Details -->
                            <div class="task-listing-description">
                                <h3 class="task-listing-title">{{ $keke->code }}</h3>
                                <ul class="task-icons">
                                    <li><i class="icon-material-outline-location-on"></i> {{ $keke->state->name }}</li>
                                </ul>

                                <h3 class="task-listing-title">Rider</h3>
                                <ul class="task-icons">
                                    <li><i class="icon-feather-user"></i> {{ $keke->riderOne('name') }}</li>
                                </ul>
                            </div>

                        </div>

                        <div class="task-listing-bid">
                            <div class="task-listing-bid-inner">
                                <div class="task-offers">
                                    <strong>Owner</strong>
                                    @if(!empty($keke->owner))
                                        <span>{{ $keke->owner->name }}</span>
                                        <span>{{ $keke->owner->phone }}</span>
                                    @else
                                        <span>Not Registered </span>
                                    @endif


                                </div>

                            </div>
                        </div>
                    </a>
                @empty
                    <h5 class="text-center">No Results Found</h5>
                @endforelse

                <!-- Task -->


            </div>
            <!-- Tasks Container / End -->
        </div>
    </div>

@endsection
