@extends('admin.admin_master')
@section('title')
    Edit | State
@endsection
@section('main')
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit State</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit State</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">

            <form action="{{ route('update.state', $state->id) }}" method="POST">
                @csrf
                <!-- Regular -->
                <div class="content-header col-11 mb-4">
                    <h2 class="content-heading">Update Shipping State</h2>
                    <a type="button" href="{{ route('manage.state') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-arrow-alt-circle-left me-1"></i>Back</a>
                </div>

                <div class="row push">
                    <div class="col-lg-10 col-xl-10" style="margin-left: 40px">
                        <div class="row mb-4">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="val-skill">Shipping Country <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="shipcountry_id" name="shipcountry_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="dm-ecom-product-category" tabindex="-1" aria-hidden="true">
                                    <option selected="" disabled="" >Select Country</option>
                                    @foreach($countries as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $state->shipcountry_id ? 'selected': '' }} >{{ $item->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Shipping State Name <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="shipstate_name" name="shipstate_name" placeholder="Enter Country Name" value="{{ $state->shipstate_name }}">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Submit -->
                <div class="row push">
                    <div class="col-lg-8 col-xl-5 offset-lg-4">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-check-circle opacity-50 me-1"></i> Update Shipping State
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Submit -->
            </form>
        </div>
    </main>


@endsection
