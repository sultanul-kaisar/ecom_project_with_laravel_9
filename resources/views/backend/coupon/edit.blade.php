@extends('admin.admin_master')
@section('title')
    Edit | Coupon
@endsection
@section('main')
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Coupon</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Coupon</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">

            <form action="{{ route('update.coupon', $coupons->id) }}" method="POST">
                @csrf
                <!-- Regular -->
                <div class="content-header col-11 mb-4">
                    <h2 class="content-heading">Update Coupon</h2>
                    <a type="button" href="{{ route('manage.coupon') }}" class="btn btn-primary push mb-md-0"><i class="fa fa-arrow-alt-circle-left me-1"></i>Back</a>
                </div>

                <div class="row push">
                    <div class="col-lg-10 col-xl-10" style="margin-left: 40px">
                        <div class="row mb-4">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="dm-profile-edit-firstname">Coupon Name <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Enter Coupon Name" value="{{ $coupons->coupon_name }}">
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="dm-profile-edit-firstname">Coupon Discount(%) <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="coupon_discount" name="coupon_discount" placeholder="Enter Coupon Discount(%)" value="{{ $coupons->coupon_discount }}">
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="dm-profile-edit-firstname">Coupon Validity Date <span style="color: red">*</span></label>
                                <input type="date" class="form-control" id="coupon_validity" name="coupon_validity" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $coupons->coupon_validity }}">
                            </div>


                        </div>

                    </div>
                </div>

                <!-- Submit -->
                <div class="row push">
                    <div class="col-lg-8 col-xl-5 offset-lg-4">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-check-circle opacity-50 me-1"></i> Update Coupon
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Submit -->
            </form>
        </div>
    </main>


@endsection
