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
                            <div class="container-fluid">
                                <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-pagination="true" data-search="true" >
                                    <thead>
                                        <tr>
                                            <th>Case Number </th>
                                            <th>Case Description</th>
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
                                                <td>
                                                    {{ $case->description }} <br/>
                                                    {{ $case->sdescription }} <br/>
                                                    {{ $case->tdescription }}
                                                </td>
                                                <td>{{ $case->client->name }}</td>
                                                <td>{{ $case->casetype->name }}</td>
                                                <td>{{ $case->court->name }}</td>
                                                <td>{{ $case->created_at }}</td>
                                                <td>
                                                    <a href="{{ url('caseupdate/') }}/{{ $case->id }}" name="edit" type="submit" class="btn btn-block btn-success">View Case Updates</a>
                                                    <a href="{{ url('caseupdate/') }}/{{ $case->id }}/create" name="edit" type="submit" class="btn btn-block btn-primary">Add Case Update</a>
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