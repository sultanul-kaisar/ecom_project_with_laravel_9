@extends('admin.admin_master')
@section('title')
    Footer | View
@endsection

@section('main')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Footer</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Footer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Footer Data
                    </h3>
                </div>

                <div class="block-content block-content-full col-lg-6">
                    @if (!empty($footer))
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th >Logo</th>
                                <th >Address</th>
                                <th >Phone</th>
                                <th >Email</th>
                                <th >Details</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="fw-semibold fs-sm" style="text-align: justify"><img src="{{ url($footer->footer_logo) }}" height="80px" width="80px" ></td>
                                <td class="fw-semibold fs-sm" style="text-align: justify">{{ $footer->address }}</td>
                                <td class="fw-semibold fs-sm" style="text-align: justify">{{ $footer->phone }}</td>
                                <td class="fw-semibold fs-sm" style="text-align: justify">{{ $footer->email }}</td>
                                <td class="fw-semibold fs-sm" style="text-align: justify">{!! $footer->details !!}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Horizontal Outline Primary">
                                        <a type="button" href="{{ route('edit.footer', $footer->id) }}" class="btn btn-outline-primary"><i class="fa fa-pen me-1"></i>Edit</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                        <a href="{{ route('add.footer') }}" class="float-center btn btn-primary" >+ Add Footer Details</a>
                    @endif
                </div>
            </div>
        </div>
    </main>


@endsection
