<?php
    $active['owner']='active-submenu';
    $breadcrumbs = [
        'Owner'=>''
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
                        Showing: <b>{{ $owners->firstItem() }} - {{ $owners->lastItem() }} </b> of <b>  {{ $owners->total() }}</b><a href="{{ route('owner.create') }}" class="btn btn-outline-dark btn-sm float-right">New Keke</a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 20px">
                        <table class="table table-striped table-hover table-checkable order-column valign-middle dataTable no-footer"
                               id="" role="grid" aria-describedby="">
                            <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Names </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Phone </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Keke </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1">  Association </th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($owners as $owner)
                                <tr class="" role="row">
                                    <td>{{ $owner->names() }}</td>
                                    <td>{{ $owner->phone }}</td>
                                    <td>{{ $owner->kekeId() }}</td>
                                    <td>{{ !empty($owner->assoc)?$owner->assoc->name:'Not Updated' }}</td>
                                    <td>
                                        <a href="{{ route('owner.show', $owner->unid) }}" class="btn btn-outline-dark btn-sm"><i class="icon-line-awesome-eye"></i> Preview</a>
                                        <a href="" class="btn btn-outline-danger btn-sm"><i class="icon-material-outline-delete"></i> Disable</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <p class="text-center">No Records Found</p>
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                        <br>

                        {{ $owners->links() }}
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>




@endsection
