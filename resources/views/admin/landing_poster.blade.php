@extends('layouts.admin')

@section('page-header')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Landing Poster</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none py-0 mb-3 mb-md-0">
                <div class="breadcrumb">
                    <a href={{ action('Admin\BannerController@index') }} class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Kotamas</a>
                    <span class="breadcrumb-item">Management</span>
                    <span class="breadcrumb-item active">Landing Poster</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->
@endsection

@section('content')
    <div class="page-content pt-0">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
                <div class="card">
                    <div class="card-body">

                        <form method="post" action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success alert-styled-right alert-arrow-right alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label class="font-bold">Select File </label>
                                        <div class="custom-file">
                                            <input type="file" class="form-control-uniform" name="image" id="customFile" required>
                                        </div>
                                        <span class="form-text text-muted"><strong>Recommended poster size:</strong> 800 x 600 (< 1MB, jpg)</span>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn bg-primary pr-5 pl-5">Save</button> <button type="button" id="btn-cancel" class="btn bg-secondary">Cancel</button>
                                        @if(Storage::exists('landing_poster.jpg'))
                                        <a href="{{ action('Admin\HomeController@deleteLandingPoster') }}" class="btn bg-danger float-right">Remove Poster</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @if(Storage::exists('landing_poster.jpg'))
                                    <div class="form-group">
                                        <label class="font-bold">Current Poster</label>
                                        <img class="img-fluid" src="{{ Storage::url('landing_poster.jpg') }}">
                                    </div>
                                    @endif
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
@endsection