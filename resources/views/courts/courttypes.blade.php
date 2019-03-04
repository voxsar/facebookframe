@extends('layouts/dashboard')

@section('page')
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Court Types</h3>
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
                                    <form action="/courttypes/create" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court Type')}}</label>
                                            <div class="col-sm-9">
                                                <input name="name" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Type')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">{{ __('Description of the Court Type') }}</label>
                                            <div class="col-sm-9">
                                                <textarea name="description" class="form-control" placeholder="{{ __('Description of the Court Type') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court Type (Sinhala)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="sname" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Type (Sinhala)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">{{ __('Description of the Court Type  (Sinhala)') }}</label>
                                            <div class="col-sm-9">
                                                <textarea name="sdescription" class="form-control" placeholder="{{ __('Description of the Court Type  (Sinhala)') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court Type (Tamil)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="tname" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Type (Tamil)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-3 form-control-label">{{ __('Description of the Court Type  (Tamil)') }}</label>
                                            <div class="col-sm-9">
                                                <textarea name="tdescription" class="form-control" placeholder="{{ __('Description of the Court Type  (Tamil)') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button class="btn btn-primary btn-block">{{ __('Add New Court Type') }}</button>
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
                                            <th>Court Type</th>
                                            <th>Description</th>
                                            <th>Court Type (Sinhala)</th>
                                            <th>Description (Sinhala)</th>
                                            <th>Court Type (Tamil)</th>
                                            <th>Description (Tamil)</th>
                                            <th style="width: 20%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($court_types as $court_type)
                                            <tr>
                                                <td>{{ $court_type->name }}</td>
                                                <td>{{ $court_type->description }}</td>
                                                <td>{{ $court_type->sname }}</td>
                                                <td>{{ $court_type->sdescription }}</td>
                                                <td>{{ $court_type->tname }}</td>
                                                <td>{{ $court_type->tdescription }}</td>
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