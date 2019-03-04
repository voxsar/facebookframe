@extends('layouts/dashboard')

@section('page')
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>New Case Update</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Number')}}</label>
                                        <div class="col-sm-9">
                                            <input name="caseno" type="text" class="form-control" id="default-input" readonly="" value="{{ $case->caseno }}" placeholder="{{ __('Case Number')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Description')}}</label>
                                        <div class="col-sm-9">
                                            <input name="description" readonly="" value="{{ $case->description }}" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Description')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Description (Sinhala)') }}</label>
                                        <div class="col-sm-9">
                                            <input name="sdescription" readonly="" value="{{ $case->sdescription }}" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Description (Sinhala)') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Description (Tamil)') }}</label>
                                        <div class="col-sm-9">
                                            <input name="tdescription" readonly="" value="{{ $case->tdescription }}" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Description (Tamil)') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Type') }}</label>
                                        <div class="col-sm-9">
                                             {{ $case->casetype->name }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Court') }}</label>
                                        <div class="col-sm-9">
                                            {{ $case->court->name }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Client') }}</label>
                                        <div class="col-sm-9">
                                            {{ $case->client->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label">{{ __('Case Update Title') }}</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control" id="default-input" placeholder="{{ __('Case Description') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <textarea name="description" id="ks-summernote-editor-default"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-pagination="true" data-search="true" >
                                        <thead>
                                            <tr>
                                                <th>Case Update Number </th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th style="width: 20%;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($case->caseupdates as $updates)
                                                <tr>
                                                    <td>{{ $case->caseupdateno }}</td>
                                                    <td>
                                                        {{ $case->title }}
                                                    </td>
                                                    <td>{{ $case->description }}</td>
                                                    <td>
                                                        <a href="" name="edit" type="submit" class="btn btn-block btn-success">View Case Updates</a>
                                                        
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
</div>
@endsection