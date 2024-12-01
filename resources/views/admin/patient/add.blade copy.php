@extends('layouts.admin')
@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form" action="{{route('patients.store')}}" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Aside column-->

            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">Branch </a>
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
                                    <h2>Patient Details</h2>
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
                                    <label class="required form-label"> Patient Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" required name="name" class="form-control mb-2" placeholder="Branch Name" />
                                    <!--end::Input-->

                                </div>





                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Age</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="doctor" required class="form-control mb-2">

                                        <option value="">select Doctor</option>
                                        <option value="Ranjith">Ranjith</option>
                                        <option value="Venkatesh">Venkatesh</option>
                                        <option value="Lakshmi">Lakshmi</option>
                                        <option value="Harish">Harish</option>

                               
                                    </select>
                                    <select name="hospital" required class="form-control mb-2">

                                        <option value="">select Hospital</option>
                                        <option value="Govt">Govt</option>
                                        <option value="SunRay">SunRay</option>
                                        <option value="Sudharshan">Sudharshan</option>
                                        <option value="Harish">Harish</option>

                                     
                                    </select>
                                    <select name="test_name" required class="form-control mb-2">

                                        <option value="">select Test</option>
                                        <option value="CTscan">CT scan</option>
                                        <option value="Xray">Xray</option>
                                      

                                        <!-- @foreach ($location as $item)
                                        <option value="{{$item->id}}">{{$item->city}}({{$item->districts}})</option>
                                        @endforeach -->
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
                                    <input type="text" name="address" class="form-control mb-2" placeholder="Address" step="0.01" />
                                    <!--end::Input-->

                                </div>
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Amount</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="amount" class="form-control mb-2" placeholder="" step="0.01" />
                                    <!--end::Input-->

                                </div>
                               


                                <div class="mb-10 fv-row">
                                    <!--begin::Card title-->
                                     <label class="required form-label"> Status</label>
                                     <select class="form-select mb-2"  required name="status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                        <option>Status Status</option>
                                        <option value="Completed" selected="Show">Completed</option>
                                        <option value="Pending">Pending</option>

                                    </select>
                                </div>
                                {{-- description in input --}}
                               

                                {{-- summerNote for long description --}}


                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Description</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">

                                        <!--end::Card body-->
                                        <!--begin::Card body-->
                                        <div class="mb-10 fv-row">

                                            <head>
                                                <meta charset="UTF-8">
                                                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
                                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
                                                <link
                                                    href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css"
                                                    rel="stylesheet">
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
                                            </head>
                                            <!--begin::Input group-->
                                            <!--begin::Label-->
                                            {{-- <label class="form-label">Content</label> --}}
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea id="description" name="description"  required >


                                                </textarea>
                                            <!--end::Input-->
                                            <!--start::Script-->
                                            <script>
                                                $('textarea#description').summernote({
                                                    placeholder: 'Description',
                                                    tabsize: 2,
                                                    height: 200,
                                                    toolbar: [
                                                        ['style', ['style']],
                                                        ['font', ['bold', 'italic', 'underline', 'clear']],
                                                        ['color', ['color']],
                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                        ['height', ['height']],
                                                        ['table', ['table']],
                                                        ['insert', ['link', 'picture', 'hr']],
                                                        ['help', ['help']]
                                                    ],
                                                });
                                            </script>
                                            <!--end::Script-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Place the Description</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>




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
                    <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
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
