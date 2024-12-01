@extends('layouts.admin')
@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Fuels</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('admin/dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Fuel Name</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <form action="" method="get">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                {{-- <input type="text" data-kt-ecommerce-product-filter="search" name="search"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Donors" /> --}}
                            </div>
                            <!--end::Search-->
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative m-1">
                                <div class="w-100 mw-150px">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" name="status" data-placeholder="Select Status"
                                        data-kt-ecommerce-product-filter="status">
                                        <option value="">Select Status</option>
                                        <option value="Show">Show</option>
                                        <option value="Hide">Hide</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                    </form>
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5 ml-2">
                        <!--begin::Add product-->
                        <a href="{{ route('fuels.create',['id' => $id]) }}" class="btn btn-primary">Add Fuel</a>
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                                <th class="min-w-100px">S.No</th>
                                <th class="min-w-100px">Image</th>
                                <th class="min-w-100px">Name</th>
                                <th class="min-w-100px">Branch Id</th>
                                <th class="min-w-100px">price</th>
                                <th class="min-w-70px">Status</th>
                                <th class="min-w-70px">Edit</th>
                                {{-- <th class="min-w-70px">Delete</th> --}}
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">

                            @php $i=1; @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset("$item->image")}}" style="width:50px" alt=""></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->branch_id }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td><a href="{{ route('fuels.edit', $item->id) }}">Edit</a></td>
                                    {{-- <td>
                                        <form action="{{ route('fuels.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td> --}}

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
            </ <!--end::Content-->
        @endsection
