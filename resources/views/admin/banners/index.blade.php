@extends('layouts.admin')

@section('page-header')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Banners</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none py-0 mb-3 mb-md-0">
                <div class="breadcrumb">
                    <a href={{ action('Admin\HomeController@index') }} class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Kotamas</a>
                    <span class="breadcrumb-item">Management</span>
                    <span class="breadcrumb-item active">Banners</span>
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
                <div class="row">
                    <div class="col-md-12">
                        <span class="float-right mb-2">
                            <a href="{{ action('Admin\BannerController@add') }}" class="btn btn-sm bg-primary btn-labeled btn-labeled-left"><b><i class="icon-add"></i></b> Banner</a>
                        </span>
                    </div>
                </div>

                <div class="card">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th width="25">#</th>
                            <th>Banner</th>
                            <th width="150" class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $key => $b)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td><img class="img-fluid img-thumbnail" src="{{ Storage::url($b->file_name) }}" /></td>
                            <td class="text-center" width="100">
                                <div class="list-icons">
                                    <a href="{{ action('Admin\BannerController@sort', [$b->id, 'up']) }}" class="list-icons-item mr-2"><i class="mi-arrow-upward"></i></a>
                                    <a href="{{ action('Admin\BannerController@sort', [$b->id, 'down']) }}" class="list-icons-item mr-3"><i class="mi-arrow-downward"></i></a>
                                    <a href="{{ action('Admin\BannerController@edit', $b->id) }}" class="list-icons-item mr-2"><i class="mi-mode-edit"></i></a>
                                    <a href="#" onclick="deleteCfmDialog('{{ action('Admin\BannerController@delete', $b->id) }}')" class="list-icons-item"><i class="mi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->
    </div>
@endsection