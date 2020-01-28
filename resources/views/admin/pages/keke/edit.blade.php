<?php
    $active['keke']='active-submenu';
    $breadcrumbs = [
        'Keke'=>''
    ];
    $styles = ['css/app.css'];
?>
@extends('admin.layouts.main')

@section('content')



        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>Keke</h3>
            @include('admin.layouts.breadcrumb')
        </div>

        @include('admin.components.errors')

        <form action="{{ route('keke.store') }}" method="post">
        @csrf

        <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-folder-plus"></i> Keke Information</h3>
                        </div>

                        <div class="content with-padding padding-bottom-10">
                            <div class="row">

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>State  <i class="help-icon" data-tippy-placement="right" title="Select state"></i></h5>
                                        <select class=" with-border" data-size="{{ count($states) }}" title="Select State" name="state_unid" required>
                                            @foreach($states as $state)
                                                <option value="{{ $state->unid }}" {{ old('state_unid')===$state->unid?'selected':'' }}>{{ $state->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>LGA  <i class="help-icon" data-tippy-placement="right" title="Select LGA"></i></h5>
                                        <select class=" with-border" data-size="{{ count($lgas) }}" title="Select State" name="lga_unid" required>
                                            @foreach($lgas as $lga)
                                                <option value="{{ $lga->unid }}" {{ old('lga_unid')===$lga->unid?'selected':'' }}>{{ $lga->name }} | {{ $lga->state->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Area  <i class="help-icon" data-tippy-placement="right" title="Select area"></i></h5>
                                        <select class=" with-border" data-size="{{ count($lgas) }}" title="Select State" name="area_unid" required>
                                            @foreach($areas as $area)
                                                <option value="{{ $area->unid }}" {{ old('area_unid')===$area->unid?'selected':'' }}>{{ $area->name }} | {{ $area->state->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Association  <i class="help-icon" data-tippy-placement="right" title="Select the association"></i></h5>
                                        <select class=" with-border" data-size="{{ count($assoc) }}" title="Select State" name="asst_unid" required>
                                            @foreach($assoc as $asso)
                                                <option value="{{ $asso->unid }}" {{ old('asst_unid')===$asso->unid?'selected':'' }}>{{ $asso->name }} | {{ $asso->state->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Plate Number
                                            {{--<small><i>(5 characters only)</i></small>--}}
                                        </h5>
                                        <input type="text" class="with-border" placeholder="Plate Number" name="plate" required value="{{ old('plate') }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Add Keke</button>
                </div>

            </div>
            <!-- Row / End -->
        </form>




@endsection
