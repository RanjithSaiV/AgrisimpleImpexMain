@extends('layouts.admin')

@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Contact Messages
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Contacts</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <!-- Search can be implemented later if needed -->
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">S.No</th>
                                    <th class="min-w-100px">Date</th>
                                    <th class="min-w-100px">Name</th>
                                    <th class="min-w-100px">Email</th>
                                    <th class="min-w-100px">Phone</th>
                                    <th class="min-w-100px">Subject</th>
                                    <!-- <th class="min-w-200px">Message</th> -->
                                    <th class="min-w-70px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($contacts as $key => $contact)
                                    <tr>
                                        <td>{{ $contacts->firstItem() + $key }}</td>
                                        <td>{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                                        <td>
                                            <a href="javascript:void(0)"
                                                class="text-gray-800 text-hover-primary fw-bold view-contact"
                                                data-name="{{ $contact->name }}" data-email="{{ $contact->email }}"
                                                data-mobile="{{ $contact->mobile }}" data-subject="{{ $contact->subject }}"
                                                data-message="{{ $contact->mssage }}"
                                                data-date="{{ $contact->created_at->format('d M Y, h:i A') }}">
                                                {{ $contact->name }}
                                            </a>
                                        </td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->mobile }}</td>
                                        <td>{{ Str::limit($contact->subject, 25) }}</td>
                                        <!-- <td>{{ Str::limit($contact->mssage, 50) }}</td> -->
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <button class="btn btn-sm btn-icon btn-light-primary view-contact"
                                                    data-name="{{ $contact->name }}" data-email="{{ $contact->email }}"
                                                    data-mobile="{{ $contact->mobile }}" data-subject="{{ $contact->subject }}"
                                                    data-message="{{ $contact->mssage }}"
                                                    data-date="{{ $contact->created_at->format('d M Y, h:i A') }}">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this message?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-icon btn-light-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Contact Modal -->
    <div class="modal fade" id="viewContactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold">Contact Message Details</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="d-flex flex-column scroll-y me-n7 pe-7">
                        <div class="mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Date</label>
                            <input type="text" class="form-control form-control-solid" id="modal_date" readonly />
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <label class="required fs-6 fw-semibold mb-2">Name</label>
                                <input type="text" class="form-control form-control-solid" id="modal_name" readonly />
                            </div>
                            <div class="col-md-6">
                                <label class="required fs-6 fw-semibold mb-2">Mobile</label>
                                <input type="text" class="form-control form-control-solid" id="modal_mobile" readonly />
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Email</label>
                            <input type="text" class="form-control form-control-solid" id="modal_email" readonly />
                        </div>
                        <div class="mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Subject</label>
                            <input type="text" class="form-control form-control-solid" id="modal_subject" readonly />
                        </div>
                        <div class="mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Message</label>
                            <textarea class="form-control form-control-solid" id="modal_message" rows="5"
                                readonly></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.view-contact').click(function () {
                var name = $(this).data('name');
                var email = $(this).data('email');
                var mobile = $(this).data('mobile');
                var subject = $(this).data('subject');
                var message = $(this).data('message');
                var date = $(this).data('date');

                $('#modal_name').val(name);
                $('#modal_email').val(email);
                $('#modal_mobile').val(mobile);
                $('#modal_subject').val(subject);
                $('#modal_message').val(message);
                $('#modal_date').val(date);

                $('#viewContactModal').modal('show');
            });
        });
    </script>
@endsection