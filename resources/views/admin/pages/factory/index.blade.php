<?php
    $breadcrumbs = [
        'Generator'=>''
    ];
    $active['generate']='active-submenu';
?>
@extends('admin.layouts.main')

@section('content')



        <!-- Dashboard Headline -->
        <div class="dashboard-headline">

            <h3>Generate Data</h3>

            @include('admin.layouts.breadcrumb')
        </div>

        @include('admin.components.errors')

        <form action="{{ route('factory.build') }}" method="post">
            @csrf

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-folder-plus"></i> Data Generating Form</h3>
                        </div>

                        <div class="content with-padding padding-bottom-10">
                            <div class="row">

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Number of Data <small> (less than 200)</small></h5>
                                        <input type="text" class="with-border" placeholder="numbers. e.g. 10" name="data_number" required>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Build Type <small>(only 'All' works)</small></h5>
                                        <select class="selectpicker with-border" data-size="6" title="Select Category" name="build_type" required>
                                            <option value="lga">LGA Only</option>
                                            <option value="area">Area Only</option>
                                            <option value="keke">Keke Only</option>
                                            <option value="rider">Rider Only</option>
                                            <option value="owner">Owner Only</option>
                                            <option value="assoc">Association</option>
                                            <option value="KR">Keke & Rider</option>
                                            <option value="RO">Rider & Owner</option>
                                            <option value="OK">Owner  & Keke</option>
                                            <option value="all">All</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>State  <i class="help-icon" data-tippy-placement="right" title="Select All for all states"></i></h5>
                                        <select class="selectpicker with-border" data-size="6" title="Select State" name="data_states" required>
                                            @foreach($states as $state)
                                                <option value="{{ $state->unid }}">{{ $state->name }}</option>
                                            @endforeach
                                            <option value="all">All</option>

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Build Data</button>
                </div>

            </div>
            <!-- Row / End -->
        </form>



@endsection
