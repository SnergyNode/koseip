<?php
    $active['admin']='active';
    $breadcrumbs = [
        'Admin'=>''
    ];
    $styles = ['css/app.css'];
?>
@extends('admin.layouts.main')

@section('content')



        <!-- Dashboard Headline -->
        <div class="dashboard-headline">

            <h3>Administrators</h3>
            @include('admin.layouts.breadcrumb')
        </div>

        @include('admin.components.errors')

        <div class="dashboard-box">
            <div class=" p-4">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        Showing: <b>{{ $admins->firstItem() }} - {{ $admins->lastItem() }} </b> of <b>  {{ $admins->total() }}</b>
                        <a href="{{ route('admin.create') }}" class="btn btn-outline-dark btn-sm float-right">New Admin</a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 20px">
                        <table class="table table-striped table-hover table-checkable order-column valign-middle dataTable no-footer"
                               id="" role="grid" aria-describedby="">
                            <thead>
                            <tr role="row">

                                <th class="sorting" tabindex="0" aria-controls="example4"
                                    rowspan="1" colspan="1"> Name </th>
                                <th class="sorting" tabindex="0" aria-controls="example4"
                                    rowspan="1" colspan="1">Photo </th>
                                <th class="sorting" tabindex="0" aria-controls="example4"
                                    rowspan="1" colspan="1">  User </th>
                                <th class="sorting" tabindex="0" aria-controls="example4"
                                    rowspan="1" colspan="1">  Tel </th>
                                <th class="sorting" tabindex="0" aria-controls="example4"
                                    rowspan="1" colspan="1"> Last Seen </th>
                                <th class="sorting" tabindex="0"
                                    aria-controls="example4" rowspan="1" colspan="1"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($admins as $user)
                                <tr class="gradeX odd" role="row">
                                    <td>{{ $user->setName() }}</td>
                                    <td>
                                        <div class="user-pic" style="width: 52px;height: 52px">
                                            <div class="img_box">
                                                <div class="img_container">
                                                    <img src="{{ $user->setPhoto() }}" class="img-large-fit" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $user->pos() }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->seen() }}</td>
                                    <td>
                                        <a href="{{ route('admin.show', $user->unid) }}" class="btn btn-outline-dark btn-sm"><i class="icon-line-awesome-eye"></i> Preview</a>
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
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>




@endsection
