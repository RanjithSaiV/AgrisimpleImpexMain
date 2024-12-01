@extends('layouts.admin')
@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form" action="{{route('doctors.store')}}"
            class="form d-flex flex-column flex-lg-row"
            data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html" method="POST"
            enctype="multipart/form-data">
            @csrf
            <!--begin::Aside column-->

            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_ecommerce_add_product_general">Doctor </a>
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
                                    <h2>Doctor Details</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->

                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label"> Doctor Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" required name="name" class="form-control mb-2"
                                        placeholder="Doctor Name" />
                                    <!--end::Input-->

                                </div>
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label"> Doctor Email</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" required name="email" class="form-control mb-2"
                                        placeholder="Doctor Email" />
                                    <!--end::Input-->

                                </div>
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label"> Doctor Mobile</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" required name="mobile" class="form-control mb-2"
                                        placeholder="Doctor Mobile" />
                                    <!--end::Input-->

                                </div>
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label"> Doctor Qualification</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" required name="qualification" class="form-control mb-2"
                                        placeholder="Doctor Qualification" />
                                    <!--end::Input-->

                                </div>
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label"> Doctor Experience</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" required name="experience" class="form-control mb-2"
                                        placeholder="Doctor experience" />
                                    <!--end::Input-->

                                </div>





                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Hospital</label>
                                    <!--end::Label-->

                                    <select name="hospital" required class="form-control mb-2">

                                        <option value="">select Hospital</option>
                                        <option value="Govt">Govt</option>
                                        <option value="SunRay">SunRay</option>
                                        <option value="Sudharshan">Sudharshan</option>
                                        <option value="Harish">Harish</option>


                                    </select>
                                </div>
                              
                                   
                                    <!--end::Input group-->

                                    <!--begin::Input group-->



                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Address</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="address" class="form-control mb-2"
                                            placeholder="Address" step="0.01" />
                                        <!--end::Input-->

                                    </div>
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Commision</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="commision" class="form-control mb-2" placeholder=""
                                            step="0.01" />
                                        <!--end::Input-->

                                    </div>



                                    <div class="mb-10 fv-row">
                                        <!--begin::Card title-->
                                        <label class="required form-label"> Status</label>
                                        <select class="form-select mb-2" required name="status" data-control="select2"
                                            data-hide-search="true" data-placeholder="Select an option"
                                            id="kt_ecommerce_add_product_status_select">
                                            <option>Status Status</option>
                                            <option value="Show"   selected="Show">Show</option>
                                            <option value="Hide">Hide</option>

                                        </select>
                                    </div>
                                    {{-- description in input --}}


                                    {{-- summerNote for long description --}}







                                    <!--end::Tab content-->



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