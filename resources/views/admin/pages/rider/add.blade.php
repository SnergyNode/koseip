<?php
    $breadcrumbs = [
        'Rider'=>route('rider.index'),
        'New'=>'',
    ];
    $active['owners']='active-submenu';
?>
@extends('admin.layouts.main')

@section('content')



        <!-- Dashboard Headline -->
        <div class="dashboard-headline">

            <h3>New Rider</h3>

            @include('admin.layouts.breadcrumb')
        </div>

        @include('admin.components.errors')

        <form action="{{ route('rider.store') }}" method="post">
            @csrf

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-folder-plus"></i> Rider</h3>
                        </div>

                        <div class="content with-padding padding-bottom-10">
                            <div class="row">

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Name</h5>
                                        <input type="text" class="with-border" placeholder="First Name" name="name" required>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Surname</h5>
                                        <input type="text" class="with-border" placeholder="Surname" name="surname" required>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Phone</h5>
                                        <input type="text" class="with-border" placeholder="Phone" name="phone" required>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5>Address</h5>
                                        <textarea type="text" class="with-border" placeholder="Address" name="address" required></textarea>
                                    </div>
                                </div>


                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>State  <i class="help-icon" data-tippy-placement="right" title="Select Owner State"></i></h5>
                                        <select class="selectpicker with-border" data-size="5" title="Select State" name="data_state" required>
                                            <option value="" disabled>Select</option>
                                            @foreach($states as $state)
                                                <option value="{{ $state->unid }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Association  <i class="help-icon" data-tippy-placement="right" title="Select Association"></i></h5>
                                        <select class="selectpicker with-border" data-size="5" title="Select Association" name="data_assoc" required>
                                            <option value="" disabled>Select</option>
                                            @foreach($assoc as $asso)
                                                <option value="{{ $asso->unid }}">{{ $asso->name }} | {{ $asso->state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Keke  <i class="help-icon" data-tippy-placement="right" title="Select Keke from plate number"></i></h5>
                                        <select class="selectpicker with-border" data-size="5" title="Select Keke" name="data_keke" required>
                                            <option value="" disabled>Select</option>
                                            @foreach($kekes as $keke)
                                                <option value="{{ $keke->unid }}">{{ $keke->plate }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Complete</button>
                </div>

            </div>
            <!-- Row / End -->
        </form>



@endsection
