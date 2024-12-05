@extends('layouts.website')
@section('content')

<style>

.single-image{
    margin-bottom: 10px;
}

    </style>

<section class="news-single section">
    <div class="container">
    
        <div class="col-12">
            <div class="blog-comments">
                <h2>All Gallery Images</h2>
                <div class="image-gallery">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/2.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/3.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/2.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/3.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/3.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection