<?php
    $active['location']='active-submenu';
    $breadcrumbs = [
        'States'=>''
    ];
    $styles = ['css/app.css'];
?>
@extends('admin.layouts.main')

@section('content')



        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>States</h3>
            @include('admin.layouts.breadcrumb')
        </div>

        @include('admin.components.errors')

        <div class="dashboard-box">

            <div class="p-4">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        Showing: <b>{{ $states->firstItem() }} - {{ $states->lastItem() }} </b> of <b>  {{ $states->total() }}</b><a href="{{ route('state.create') }}" class="btn btn-outline-dark btn-sm float-right">New State</a>
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
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  LGAs </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($states as $state)
                                <tr class="" role="row">
                                    <td>{{ $state->name }}</td>
                                    <td>{{ $state->code}}</td>
                                    <td>{{ $state->active? 'Active':'Disabled'}}</td>
                                    <td>{{ $state->lgas()->count() }}</td>
                                    <td>
                                        <a href="{{ route('state.show', $state->unid) }}" class="btn btn-outline-dark btn-sm"><i class="icon-line-awesome-eye"></i> Preview</a>
                                        <a href="" class="btn btn-outline-danger btn-sm"><i class="icon-material-outline-delete"></i> Disable</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <p class="text-center">No Records Found</p>
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                        <br>

                        {{ $states->links() }}
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>




@endsection
