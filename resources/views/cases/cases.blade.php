@extends('layouts/dashboard')

@section('page')
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>All Cases</h3>
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
                                    <form action="/cases/create" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Number')}}</label>
                                            <div class="col-sm-9">
                                                <input name="caseno" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Number')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Description')}}</label>
                                            <div class="col-sm-9">
                                                <input name="description" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Description')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Description (Sinhala)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="sdescription" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Description (Sinhala)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Description (Tamil)') }}</label>
                                            <div class="col-sm-9">
                                                <input name="tdescription" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Description (Tamil)') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Type') }}</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="casetype">
                                                    @forelse ($casetypes as $case_type)
                                                        <option value="{{ $case_type->id }}">{{ $case_type->name }}</option>
                                                    @empty

                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court') }}</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="court">
                                                    @forelse ($courts as $court)
                                                        <option value="{{ $court->id }}">{{ $court->name }}</option>
                                                    @empty

                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label">{{ __('Client') }}</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="user">
                                                    @forelse ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @empty

                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button class="btn btn-primary btn-block">{{ __('Add New Case') }}</button>
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
                                            <th>Case Number </th>
                                            <th>Case Description</th>
                                            <th>Case Description (Sinhala)</th>
                                            <th>Case Description (Tamil)</th>
                                            <th>Client Name</th>
                                            <th>Case Type</th>
                                            <th>Court Type</th>
                                            <th>Fileling Date</th>
                                            <th style="width: 20%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($cases as $case)
                                            <tr>
                                                <td>{{ $case->caseno }}</td>
                                                <td>{{ $case->description }}</td>
                                                <td>{{ $case->sdescription }}</td>
                                                <td>{{ $case->tdescription }}</td>
                                                <td>{{ $case->casetype->name }}</td>
                                                <td>{{ $case->court->name }}</td>
                                                <td>{{ $case->client->name }}</td>
                                                <td>{{ $case->created_at }}</td>
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