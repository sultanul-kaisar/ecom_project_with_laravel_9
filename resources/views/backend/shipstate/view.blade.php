@extends('admin.admin_master')
@section('title')
State | View
@endsection

@section('main')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Ship States</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ship States</li>
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
                        Ship States List
                    </h3>
                    <a type="button" href="{{ route('add.state') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-plus me-1"></i>Add Ship State</a>
                </div>

                <div class="block-content block-content-full col-lg-6">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 80px;">#</th>
                                <th>Shipping Country Name </th>
                                <th>Shipping State Name </th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($states as $item)
                            <tr>
                                <td class="text-center">{{ $i++ }}</td>
                                <td> {{ $item->country->country_name }}  </td>
                                <td> {{ $item->shipstate_name }}  </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Horizontal Outline Primary">
                                        <a type="button" href="{{route('edit.state', $item->id)}}" class="btn btn-outline-primary"><i class="fa fa-pen me-1"></i>Edit</a>
                                        <a type="button" id="delete" href="{{route('delete.state', $item->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash me-1"></i>Delete</a>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


@endsection
