@extends('layouts/dashboard')

@section('page')
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>All {{ $usertype_title }}</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="container-fluid">
                                <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-pagination="true" data-search="true" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Created At</th>
                                            <th style="width: 10%;">Edit</th>
                                            <th style="width: 10%;">Delete</th>
                                            <th style="width: 10%;">Approve</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->fname }}</td>
                                                <td>{{ $user->lname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <button name="edit" type="submit" class="btn btn-warning">Edit</button>
                                                </td>
                                                <td>
                                                    <button name="delete" type="submit" class="btn btn-danger">Delete</button>
                                                </td>
                                                <td>
                                                    <button name="delete" type="submit" class="btn btn-success">Approve</button>
                                                </td>
                                            </tr>
                                        @empty
                                            
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection