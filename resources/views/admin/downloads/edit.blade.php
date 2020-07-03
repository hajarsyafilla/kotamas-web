@extends('layouts.admin')

@section('page-header')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Edit Download</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none py-0 mb-3 mb-md-0">
                <div class="breadcrumb">
                    <a href={{ action('Admin\HomeController@index') }} class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Kotamas</a>
                    <span class="breadcrumb-item">Management</span>
                    <a href="{{ action('Admin\DownloadController@index') }}" class="breadcrumb-item">Downloads</a>
                    <span class="breadcrumb-item active">Edit</span>
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
                            @include('admin.downloads._form')
                        </form>
                    </div>
                </div>

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
@endsection