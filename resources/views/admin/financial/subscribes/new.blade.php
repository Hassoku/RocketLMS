@extends('admin.layouts.app')
@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/daterangepicker/daterangepicker.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/bootstrap-timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/bootstrap-tagsinput/bootstrap-tagsinput.min.css">
    <link rel="stylesheet" href="/assets/vendors/summernote/summernote-bs4.min.css">
    <style>
        .bootstrap-timepicker-widget table td input {
            width: 35px !important;
        }
    </style>
@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle}}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-body">



                            <form method="post" action="{{ url('admin/financial/subscribes/store') }}" id="webinarForm" class="webinar-form">
                                {{ csrf_field() }}





                                                              <section>
                                    <h2 class="section-title after-line">Create Subscription Plane<h2>

                                    <div class="row">
                                        <div class="col-12 col-md-5">

                                            <div class="form-group mt-15">
                                                <label class="input-label">title</label>
                                                <div class="input-group">

                                                    <input type="text" name="title" id="title" value="" class="form-control @error('title')  is-invalid @enderror"/>

                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mt-15">
                                                <label class="input-label">Usable Count</label>
                                                <input type="text" name="usable_count" value="" class="form-control @error('usable_count')  is-invalid @enderror" placeholder="Usable Count"/>
                                                @error('usable_count')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-15">
                                                <label class="input-label">Days</label>
                                                <input type="text" name="days" value="" class="form-control @error('days')  is-invalid @enderror" placeholder="Days"/>
                                                @error('days')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-15">
                                                <label class="input-label">Price</label>
                                                <input type="text" name="price" value="" class="form-control @error('price')  is-invalid @enderror" placeholder="Price"/>
                                                @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-15">
                                                <label class="input-label">Icon</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="input-group-text admin-file-manager" data-input="icon" data-preview="holder">
                                                            <i class="fa fa-upload"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="icon" id="icon" value="" class="form-control @error('icon')  is-invalid @enderror"/>
                                                    <div class="input-group-append">
                                                        <button type="submit" class="input-group-text admin-file-view" data-input="icon">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                    </div>
                                                    @error('icon')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>






                                        </div>
                                    </div>


                                </section>





                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" id="aveAndPublish" class="btn btn-success">Save</button>

                                    </div>
                                </div>
                            </form>




                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection


@push('scripts_bottom')
    {{-- <script>
        ;(function (){
        'use strict'
        var saveSuccessLang = '{{ trans('webinars.success_store') }}';
        var zoomJwtTokenInvalid = '{{ trans('admin/main.teacher_zoom_jwt_token_invalid') }}';
        }())
    </script> --}}

    <script src="{{ asset('assets/default/vendors/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('/assets/default/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/assets/default/vendors/moment.min.js') }}"></script>
    <script src="{{ asset('/assets/default/vendors/daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/default/vendors/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/default/vendors/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/webinar.min.js') }}"></script>
@endpush
