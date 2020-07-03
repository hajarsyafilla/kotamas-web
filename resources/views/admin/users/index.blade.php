@extends('layouts.admin')

@section('page-header')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Users</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none py-0 mb-3 mb-md-0">
                <div class="breadcrumb">
                    <a href={{ action('Admin\HomeController@index') }} class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Kotamas</a>
                    <span class="breadcrumb-item">Management</span>
                    <span class="breadcrumb-item active">Users</span>
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
                            <a href="{{ action('Admin\UserController@add') }}" class="btn btn-sm bg-primary btn-labeled btn-labeled-left"><b><i class="icon-add"></i></b> Users</a>
                        </span>
                    </div>
                </div>

                <div class="card">
                    <table class="table datatable-basic table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $u)
                        <tr>
                            <td><a href="#">{{ $u->name }}</a></td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->user_group->name }}</td>
                            <td class="text-center" width="100">
                                <div class="list-icons">
                                    <a href="{{ action('Admin\UserController@edit', $u->id) }}" class="list-icons-item mr-2"><i class="mi-mode-edit"></i></a>
                                    <a href="#" onclick="deleteCfmDialog('{{ action('Admin\UserController@delete', $u->id) }}')" class="list-icons-item"><i class="mi-delete"></i></a>
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