@extends('layouts/dashboard')

@section('page')
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Case Types</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <form action="/casetypes/create" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Type')}}</label>
                                            <div class="col-sm-9">
                                                <input name="name" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Type')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Type (Sinhala)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="sname" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Type (Sinhala)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Type (Tamil)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="tname" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Type (Tamil)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button class="btn btn-primary btn-block">{{ __('Add New Case Type') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="container-fluid">
                                <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-pagination="true" data-search="true" >
                                    <thead>
                                        <tr>
                                            <th>Case Type</th>
                                            <th>Case Type (Sinhala)</th>
                                            <th>Case Type (Tamil)</th>
                                            <th style="width: 20%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($casetypes as $case)
                                            <tr>
                                                <td>{{ $case->name }}</td>
                                                <td>{{ $case->sname }}</td>
                                                <td>{{ $case->tname }}</td>
                                                <td>
                                                    <button name="edit" type="submit" class="btn btn-warning">Edit</button>
                                                    <button name="delete" type="submit" class="btn btn-danger">Delete</button>
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