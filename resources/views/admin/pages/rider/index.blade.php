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
                        Showing: <b>{{ $riders->firstItem() }} - {{ $riders->lastItem() }} </b> of <b>  {{ $riders->total() }}</b><a href="{{ route('rider.create') }}" class="btn btn-outline-dark btn-sm float-right">New Rider</a>
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
                            @forelse($riders as $rider)
                                <tr class="" role="row">
                                    <td>{{ $rider->names() }}</td>
                                    <td>{{ $rider->phone }}</td>
                                    <td>{{ $rider->kekeId() }}</td>
                                    <td>{{ !empty($rider->assoc)?$rider->assoc->name:'Not Updated' }}</td>
                                    <td>
                                        <a href="{{ route('owner.show', $rider->unid) }}" class="btn btn-outline-dark btn-sm"><i class="icon-line-awesome-eye"></i> Preview</a>
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

                        {{ $riders->links() }}
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>




@endsection
