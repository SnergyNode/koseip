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

                            <div class="col-xl-12">
                                <div class="submit-field">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="text-muted">Keke ID: <b>{{ $keke->keke_id }}</b></p>
                                            <p class="text-muted">Keke Plate: <b>{{ $keke->plate }}</b></p>
                                            <p class="text-muted">Keke Code: <b>{{ $keke->code }}</b></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p content="m-0"><small>Scan Code to Get Keke Details</small></p>
                                            {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(150)->generate(route('qr.scan',$keke->code)) !!}
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-4 ">
                                <div class="dashboard-box p-3 mb-4">
                                    <h5>LGA  </h5>
                                    <p class="text-muted">{{ $keke->lga->name }}</p>

                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="dashboard-box p-3 mb-4">
                                    <h5>Area  </h5>
                                    <p class="text-muted">{{ $keke->area->name }}</p>

                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="dashboard-box p-3 mb-4">
                                    <h5>Association </h5>
                                    <p class="text-muted">{{ $keke->assoc->name }} </p>
                                </div>
                            </div>

                            @if(!empty($keke->owner))
                                <div class="col-xl-4">
                                    <div class="dashboard-box p-3 mb-4">
                                        <h5>Owner </h5>
                                        <h5>{{ strtoupper($keke->owner->names()) }} </h5>
                                        <p class="text-muted">Phone: <b>{{ $keke->owner->phone }}</b></p>
                                        <p class="text-muted">Association: <b>{{ $keke->owner->assoc->name }}</b></p>
                                        <a href="#" class="btn btn-outline-dark btn-sm">View</a>

                                    </div>
                                </div>
                            @else
                                <div class="col-xl-4">
                                    <div class="dashboard-box p-3 mb-4">
                                        <h5>Owner </h5>
                                        <p class="text-muted">{{ !empty($keke->owner)?$keke->owner->name:'Not Registered' }}</p>
                                    </div>
                                </div>
                            @endif


                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <h4>Riders</h4>
                            </div>

                            @forelse($keke->riders as $rider)
                                <div class="col-xl-4">
                                    <div class="dashboard-box p-3 mb-4">
                                        <h5>{{ $rider->names() }} </h5>
                                        <p class="text-muted">Phone: <b>{{ $rider->phone }}</b></p>
                                        <p class="text-muted">Association: <b>{{ $rider->assoc->name }}</b></p>
                                        <a href="#" class="btn btn-outline-dark btn-sm">View</a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-xl-4">
                                    <div class="dashboard-box p-3 mb-4">
                                        <p class="text-muted">No Registered Rider</p>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <a href="{{ route('keke.edit', $keke->unid) }}" class="button ripple-effect big margin-top-30"><i class="icon-feather-edit-3"> </i> Edit Keke</a>
            </div>

        </div>




@endsection
