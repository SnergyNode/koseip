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

        <div class="dashboard-box">

            <div class="p-4">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        Showing: <b>{{ $kekes->firstItem() }} - {{ $kekes->lastItem() }} </b> of <b>  {{ $kekes->total() }}</b><a href="{{ route('keke.create') }}" class="btn btn-outline-dark btn-sm float-right">New Keke</a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 20px">
                        <table class="table table-striped table-hover table-checkable order-column valign-middle dataTable no-footer"
                               id="" role="grid" aria-describedby="">
                            <thead>
                            <tr role="row">

                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"> ID </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"> Plate </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  State </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Lga </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Area </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Association </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Unique ID </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($kekes as $keke)
                                <tr class="" role="row">
                                    <td>{{ $keke->keke_id }}</td>
                                    <td>{{ $keke->plate}}</td>
                                    <td>{{ $keke->state->name }}</td>
                                    <td>{{ $keke->lga->name }}</td>
                                    <td>{{ $keke->area->name }}</td>
                                    <td>{{ $keke->assoc->name }}</td>
                                    <td>{{ $keke->code }}</td>
                                    <td>
                                        <a href="{{ route('keke.show', $keke->unid) }}" class="btn btn-outline-dark btn-sm"><i class="icon-line-awesome-eye"></i> Preview</a>
                                        <a href="" class="btn btn-outline-danger btn-sm"><i class="icon-material-outline-delete"></i> Disable</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        <p class="text-center">No Records Found</p>
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                        <br>

                        {{ $kekes->links() }}
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>




@endsection
