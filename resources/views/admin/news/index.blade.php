@extends('layouts.admin')

@section('page-header')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">News</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none py-0 mb-3 mb-md-0">
                <div class="breadcrumb">
                    <a href={{ action('Admin\HomeController@index') }} class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Kotamas</a>
                    <span class="breadcrumb-item">Management</span>
                    <span class="breadcrumb-item active">News</span>
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
                            <a href="{{ action('Admin\NewsController@add') }}" class="btn btn-sm bg-primary btn-labeled btn-labeled-left"><b><i class="icon-add"></i></b> News</a>
                        </span>
                    </div>
                </div>

                <div class="card">
                    <table class="table datatable-basic table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date Published</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $n)
                        <tr>
                            <td><a href="#">{{ $n->title }}</a></td>
                            <td>{{ $n->user->name }}</td>
                            <td>{{ $n->published_at }}</td>
                            <td class="text-center" width="100">
                                <div class="list-icons">
                                    <a target="_blank" href="{{ action('Web\NewsController@view', $n->id) }}" class="list-icons-item mr-2"><i class="mi-info"></i></a>
                                    <a href="{{ action('Admin\NewsController@edit', $n->id) }}" class="list-icons-item mr-2"><i class="mi-mode-edit"></i></a>
                                    <a href="#" onclick="deleteCfmDialog('{{ action('Admin\NewsController@delete', $n->id) }}')" class="list-icons-item"><i class="mi-delete"></i></a>
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