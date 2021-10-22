@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Monitoring') }}</h1>

    <!-- Main Content goes here -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id Wisata</th>
                <th scope="col">Id Pengunjung</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Latittude</th>
                <th scope="col">Longitude</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
    <!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
    <div class="alert alert-success border-left-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@endpush
