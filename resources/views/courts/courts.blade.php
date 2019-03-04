@extends('layouts/dashboard')

@section('page')
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Courts</h3>
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
                                    <form action="/courts/create" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court Name')}}</label>
                                            <div class="col-sm-9">
                                                <input name="name" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Name')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court Name (Sinhala)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="sname" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Name (Sinhala)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court Name (Tamil)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="tname" type="text" class="form-control" id="default-input" placeholder="{{ __('Court Name (Tamil)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court Name (Tamil)') }}</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="type">
                                                    @forelse ($courttypes as $court_type)
                                                        <option value="{{ $court_type->id }}">{{ $court_type->name }}</option>
                                                    @empty

                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button class="btn btn-primary btn-block">{{ __('Add New Court') }}</button>
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
                                            <th>Court </th>
                                            <th>Court (Sinhala)</th>
                                            <th>Court (Tamil)</th>
                                            <th>Court Type</th>
                                            <th style="width: 20%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($courts as $court)
                                            <tr>
                                                <td>{{ $court->name }}</td>
                                                <td>{{ $court->sname }}</td>
                                                <td>{{ $court->tname }}</td>
                                                <td>{{ $court->courttype->name }}</td>
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