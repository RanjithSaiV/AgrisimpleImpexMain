<div id="kt_app_footer" class="app-footer">
    <!--begin::Footer container-->
    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">{{Carbon\Carbon::now()->format('Y')}}&copy;</span>
            <a href="{{url('/')}}" target="_blank" class="text-gray-800 text-hover-primary">{{ $site->site_name }}</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->

        <!--end::Menu-->
    </div>
    <!--end::Footer container-->
</div>
<!--end::Footer-->
