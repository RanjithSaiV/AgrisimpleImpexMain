@extends('layouts.admin')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form" action="{{ route('location.update', $data->id) }}"
                class="form d-flex flex-column flex-lg-row"
                data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Donor</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <!--begin::Image input placeholder-->
                            <style>
                                .image-input-placeholder {
                                    background-image: url('{{ asset('admin') }}/{{ asset('admin') }}/assets/media/svg/files/blank-image.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('{{ asset('admin') }}/{{ asset('admin') }}/assets/media/svg/files/blank-image-dark.svg');
                                }
                            </style>
                            <!--end::Image input placeholder-->
                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file"  name="image" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Remove-->
                                <div>
                                    <img src="{{ asset($data->donor_image) }}" alt="{{ $data->name_of_donor }}" width="50">
                                </div>
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the donor image. Only *.png, *.jpg and *.jpeg image files are
                                accepted</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2> Iamge in Donors list</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status">
                                </div>
                            </div>
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select class="form-select mb-2"  name="image_status"
                                data-control="select2" data-hide-search="true" data-placeholder="Select an option"
                                id="kt_ecommerce_add_product_status_select">
                                <option value="Yes" @if ($data->isDisplay == 'Yes') selected @endif >Show</option>
                                <option value="No" @if ($data->isDisplay == 'No') selected @endif>Hide</option>



                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            {{-- <div class="text-muted fs-7">Set the Donor status.</div> --}}
                            <!--end::Description-->

                        </div>
                        <!--end::Card body-->
                    </div>
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2> Status</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status">
                                </div>
                            </div>
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select class="form-select mb-2"  name="status" data-control="select2"
                                data-hide-search="true" data-placeholder="Select an option"
                                id="kt_ecommerce_add_product_status_select">
                                <option></option>
                                <option value="Show" @if ($data->status == 'Show') selected @endif>Show</option>
                                <option value="Hide"  @if ($data->status == 'Hide') selected @endif>Hide</option>

                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            {{-- <div class="text-muted fs-7">Set the Donor status.</div> --}}
                            <!--end::Description-->

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->



                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">Donors </a>
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
                                        <h2>Donor Details</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Date</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="date"  name="date" class="form-control mb-2"
                                            value="{{ $data->date }}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Select the date of donation.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Name of Donor</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text"  name="name_of_donor"
                                            value="{{ $data->name_of_donor }}" class="form-control mb-2"
                                            placeholder="Enter Donor's Name" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the name of the donor.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Designation</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="designation" value="{{ $data->designation }}"
                                            class="form-control mb-2" placeholder="Enter Donor's Designation" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Optional: Enter the donor's designation.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Nature of Donation</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="nature_of_donation"
                                            class="form-control mb-2">
                                            <option value="Student Adaption for Education"  @if ($data->nature_of_donation == 'Student Adaption for Education') selected @endif >Student Adaption for Education
                                            </option>
                                            <option value="Trust Development" @if ($data->nature_of_donation == 'Trust Development') selected @endif>Trust Development</option>
                                            <option value="Professional Services Contribution" @if ($data->nature_of_donation == 'Professional Services Contribution') selected @endif>Professional Services
                                                Contribution</option>
                                            <option value="Job Source Contribution" @if ($data->nature_of_donation == 'Job Source Contribution') selected @endif>Job Source Contribution</option>
                                            <option value="Education, Career Guidance and Counselling" @if ($data->nature_of_donation == 'Education, Career Guidance and Counselling') selected @endif>Education, Career
                                                Guidance and Counselling</option>
                                            <option value="Wellness Contribution" @if ($data->nature_of_donation == 'Wellness Contribution') selected @endif>Wellness Contribution</option>
                                            <option value="Finance Support" @if ($data->nature_of_donation == 'Finance Support') selected @endif>Finance Support</option>
                                            <option value="Trust Alumni Contribution" @if ($data->nature_of_donation == 'Trust Alumni Contribution') selected @endif>Trust Alumni Contribution</option>
                                            <option value="Event Contribution" @if ($data->nature_of_donation == 'Student Relevant Donation') selected @endif>Event Contribution</option>
                                            <option value="Student Relevant Donation" @if ($data->nature_of_donation == 'Student Adaption for Education') selected @endif>Student Relevant Donation</option>
                                            <option value="Trust Development Initiation and Develop various places" @if ($data->nature_of_donation == 'Trust Development Initiation and Develop various places') selected @endif>Trust
                                                Development Initiation and Develop various places</option>
                                        </select>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Select the nature of the donation.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->

                                    {{-- <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Education Level</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="education_level" class="form-control mb-2">
                                        <option value="">-- Select Education Level (if applicable) --</option>
                                        <option value="Primary">Primary</option>
                                        <option value="High School">High School</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Graduation">Graduation</option>
                                        <option value="Post Graduation">Post Graduation</option>
                                        <option value="Doctorate">Doctorate</option>
                                        <option value="Post Doctoral Fellowship (PDF)">Post Doctoral Fellowship (PDF)</option>
                                    </select>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Select the education level if applicable.</div>
                                    <!--end::Description-->
                                </div> --}}
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Amount (for Financial Support)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" name="amount" class="form-control mb-2"
                                            value="{{ $data->amount }}" placeholder="Enter Amount (if applicable)"
                                            step="0.01" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the amount if the donation involves financial
                                            support.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    {{-- <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Donation Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea id="donation_description" name="donation_description" class="form-control" placeholder="Enter Donation Description"></textarea>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Provide a brief description of the donation.</div>
                                    <!--end::Description-->
                                </div> --}}
                                    <!--end::Input group-->

                                    <!--begin::Input group-->

                                    <!--end::Input group-->
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
