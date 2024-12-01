@extends('layouts.admin')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form" action="{{ route('fuels.update', $data->id) }}"
                class="form d-flex flex-column flex-lg-row"
                data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Aside column-->

                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">Fuel </a>
                        </li>

                    </ul>
                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Fuel Details</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Image Input group-->


                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                        data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="image" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>

                                        <div>
                                            <img src="{{ asset($data->image) }}" alt="image" width="50">
                                        </div>
                                    </div>

                                    <!--end::Image input-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Name of Fuel</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="name" value="{{ $data->name }}"
                                            class="form-control mb-2" placeholder="Enter Name" />
                                        <!--end::Input-->

                                    </div>
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Price</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="price" value="{{ $data->price }}"
                                            class="form-control mb-2" placeholder="Enter Price" />
                                        <!--end::Input-->

                                    </div>

                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Branch Id</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="branch_id" value="{{$branch->id}}" class="form-control mb-2" readonly hidden />
                                        <input type="text"  value="{{$branch->name}}" class="form-control mb-2" readonly />
                                        {{-- <select name="branch_id" class="form-control mb-2" readonly>

                                            <option value="{{$branch->id}}">{{$branch->name}}</option>


                                        </select> --}}

                                    </div>



                                    <div class="mb-10 fv-row">
                                        <!--begin::Card title-->
                                        <label class="required form-label"> Status</label>
                                        <select class="form-select mb-2" required name="status" data-control="select2"
                                            data-hide-search="true" data-placeholder="Select an option"
                                            id="kt_ecommerce_add_product_status_select">
                                            <option></option>
                                            <option value="Show" @if ($data->status == 'Show') selected @endif>Show
                                            </option>
                                            <option value="Hide" @if ($data->status == 'Hide') selected @endif>Hide
                                            </option>

                                        </select>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::General options-->
                            </div>
                            <!--end::Tab pane-->




                        </div>
                        <!--end::Tab content-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html"
                                id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>



                    </div>
                    <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
