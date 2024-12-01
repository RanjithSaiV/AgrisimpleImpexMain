@extends('layouts.admin')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form" action="{{ route('branch.update', $data->id) }}"
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
                                href="#kt_ecommerce_add_product_general">Branch </a>
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
                                        <h2>Branch Details</h2>
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
                                        <label class="required form-label">Name of Branch</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text"  name="name"
                                            value="{{ $data->name }}" class="form-control mb-2"
                                            placeholder="Enter branch's Name" />
                                        <!--end::Input-->

                                    </div>
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Petrol Price</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text"  name="petrol_price"
                                            value="{{ $data->petrol_price }}" class="form-control mb-2"
                                            placeholder="Enter Petrol Price" />
                                        <!--end::Input-->

                                    </div>
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Diesel Price</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text"  name="diesel_price"
                                            value="{{ $data->diesel_price }}" class="form-control mb-2"
                                            placeholder="Enter Diesel Price" />
                                        <!--end::Input-->

                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->

                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Branch Location</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="location_id"
                                            class="form-control mb-2">
                                            <option value="">select option</option>
                                            @foreach ($locations as $item)
                                            <option value="{{$item->id}}" @if ($item->id==$data->location_id) selected @endif>{{$item->city }}</option>
                                             @endforeach

                                        </select>

                                    </div>

                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Land Mark</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="landmark" class="form-control mb-2"
                                            value="{{ $data->landmark }}" placeholder="Enter Land Mark"
                                            step="0.01" />
                                        <!--end::Input-->


                                </div>

                                <div class="mb-10 fv-row">
                                    <!--begin::Card title-->
                                     <label class="required form-label"> Status</label>
                                     <select class="form-select mb-2"  required name="status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                        <option></option>
                                        <option value="Show" @if ( $data->status=='Show')selected @endif >Show</option>
                                        <option value="Hide"  @if ($data->status=='Hide' )selected @endif>Hide</option>

                                    </select>
                                </div>

                                <div class="mb-10 fv-row">
                                    <!--begin::Card title-->
                                     <label class="required form-label">Short Description</label>
                                     <textarea class="form-control mb-2" name="short_description">
                                     {{   $data->short_description}}
                                     </textarea>

                                </div>

                                <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
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
                                                 {!!$data->description!!}

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
                            </div>
                        </div>

                    </div>
                    <!--end::Tab content-->


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
