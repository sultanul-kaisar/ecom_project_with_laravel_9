@extends('admin.admin_master')
@section('title')
    Country | Create
@endsection

@section('main')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Create Shipping Country</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Shipping Country</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <form action="{{ route('store.country') }}" method="POST">
                @csrf
                <!-- Regular -->
                <div class="content-header col-11 mb-4">
                    <h2 class="content-heading">Add New Shipping Country</h2>
                    <a type="button" href="{{ route('manage.country') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-arrow-alt-circle-left me-1"></i>Back</a>
                </div>

                <div class="row push">
                    <div class="col-lg-10 col-xl-10" style="margin-left: 40px">
                        <div class="row mb-4">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Shipping Country Name <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="country_name" name="country_name" placeholder="Enter Country Name" required>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="row push">
                    <div class="col-lg-8 col-xl-5 offset-lg-4">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-plus-circle opacity-50 me-1"></i> Add Country Name
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Submit -->
            </form>
        </div>
    </main>

@endsection
