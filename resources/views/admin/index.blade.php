@extends('admin.admin_master')
@section('title')
    Admin | Dashboard
@endsection

@section('main')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Quick Overview -->
            <div class="row items-push">
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="be_pages_ecom_orders.html">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold text-primary mb-1">78</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Pending Orders
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold text-success mb-1">26%</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Profit
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold mb-1">126</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Orders Today
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold mb-1">$16.485</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Earnings Today
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Quick Overview -->

            <!-- Orders Overview -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Orders Overview</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Chart.js is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js) -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <div style="height: 420px;"><canvas id="js-chartjs-overview"></canvas></div>
                </div>
            </div>
            <!-- END Orders Overview -->

            <!-- Top Products and Latest Orders -->
            <div class="row">
                <div class="col-xl-6">
                    <!-- Top Products -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Top Products</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped table-vcenter fs-sm">
                                <tbody>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.965</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Diablo III</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.154</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Control</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.523</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Minecraft</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.423</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Hollow Knight</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.391</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Sekiro: Shadows Die Twice</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.218</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">NBA 2K20</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.995</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Forza Motorsport 7</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.761</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Minecraft</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.860</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Dark Souls III</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.952</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Age of Mythology</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Top Products -->
                </div>
                <div class="col-xl-6">
                    <!-- Latest Orders -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Latest Orders</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped table-vcenter fs-sm">
                                <tbody>
                                <tr>
                                    <td class="fw-semibold text-center" style="width: 100px;">
                                        <a href="be_pages_ecom_order.html">ORD.7116</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Amanda Powell</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$544,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7115</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Jose Wagner</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Canceled</span>
                                    </td>
                                    <td class="fw-semibold text-end">$129,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7114</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Scott Young</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$822,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7113</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Scott Young</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="fw-semibold text-end">$750,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7112</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Amber Harvey</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$562,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7111</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Jesse Fisher</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="fw-semibold text-end">$165,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7110</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Amanda Powell</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$425,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7109</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Amanda Powell</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="fw-semibold text-end">$607,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7108</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Alice Moore</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$238,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7107</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Brian Cruz</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Canceled</span>
                                    </td>
                                    <td class="fw-semibold text-end">$167,00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Latest Orders -->
                </div>
            </div>
            <!-- END Top Products and Latest Orders -->
        </div>
        <!-- END Page Content -->
    </main>
@endsection

