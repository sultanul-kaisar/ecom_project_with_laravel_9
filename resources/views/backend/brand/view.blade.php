@extends('admin.admin_master')
@section('title')
    Brands | View
@endsection

@section('main')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Brands</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Brands</li>
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
                        Brand List
                    </h3>
                    <a type="button" href="{{ route('add.brand') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-plus me-1"></i>Add Brand</a>
                </div>

                <div class="block-content block-content-full col-lg-6">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Brand Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($brands as $brand)
                            <tr>
                                <td class="text-center">{{ $i++ }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td><img src="{{ url($brand->brand_image) }}"></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Horizontal Outline Primary">
                                        <a type="button" href="{{route('edit.brand', $brand->id)}}" class="btn btn-outline-primary"><i class="fa fa-pen me-1"></i>Edit</a>
                                        <a type="button" id="delete" href="{{route('delete.brand', $brand->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash me-1"></i>Delete</a>
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
