<?php
    $active['assoc']='active-submenu';
    $breadcrumbs = [
        'Association'=>''
    ];
    $styles = ['css/app.css'];
?>
@extends('admin.layouts.main')

@section('content')



        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>Area</h3>
            @include('admin.layouts.breadcrumb')
        </div>

        @include('admin.components.errors')

        <div class="dashboard-box">

            <div class="p-4">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        Showing: <b>{{ $assoc->firstItem() }} - {{ $assoc->lastItem() }} </b> of <b>  {{ $assoc->total() }}</b><a href="{{ route('assoc.create') }}" class="btn btn-outline-dark btn-sm float-right">New Association</a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 20px">
                        <table class="table table-striped table-hover table-checkable order-column valign-middle dataTable no-footer"
                               id="" role="grid" aria-describedby="">
                            <thead>
                            <tr role="row">

                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"> Name </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Code </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Status </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  State </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($assoc as $asso)
                                <tr class="" role="row">
                                    <td>{{ $asso->name }}</td>
                                    <td>{{ $asso->code}}</td>
                                    <td>{{ $asso->active? 'Active':'Disabled'}}</td>
                                    <td>{{ $asso->state->name }}</td>
                                    <td>
                                        <a href="{{ route('assoc.show', $asso->unid) }}" class="btn btn-outline-dark btn-sm"><i class="icon-line-awesome-eye"></i> Preview</a>
                                        <a href="" class="btn btn-outline-danger btn-sm"><i class="icon-material-outline-delete"></i> Disable</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <p class="text-center">No Records Found</p>
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                        <br>

                        {{ $assoc->links() }}
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>




@endsection
