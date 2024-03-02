@extends('backend.layout.app')
@section('content')         
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Settings</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4>Settings List</h4>
                    @if ($settings->isEmpty())
                        <p>No settings found.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Sister Image</th>
                                    <th scope="col">Buyer Image</th>
                                    <th scope="col">Title 1</th>
                                    <th scope="col">Title 2</th>
                                    <th scope="col">Title 3</th>
                                    <th scope="col">Title 4</th>
                                    <th scope="col">Number 1</th>
                                    <th scope="col">Number 2</th>
                                    <th scope="col">Number 3</th>
                                    <th scope="col">Number 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($settings as $setting)
                                    <tr>
                                        <td>{{ $setting->id }}</td>
                                        <td><img src="{{ asset($setting->sister_image) }}" alt="Sister Image" width="100"></td>
                                        <td><img src="{{ asset($setting->buyer_image) }}" alt="Buyer Image" width="100"></td>
                                        <td>{{ $setting->title_1 }}</td>
                                        <td>{{ $setting->title_2 }}</td>
                                        <td>{{ $setting->title_3 }}</td>
                                        <td>{{ $setting->title_4 }}</td>
                                        <td>{{ $setting->number_1 }}</td>
                                        <td>{{ $setting->number_2 }}</td>
                                        <td>{{ $setting->number_3 }}</td>
                                        <td>{{ $setting->number_4 }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('assets/extensions/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/pages/simple-datatables.css')}}">
@endpush
@push('scripts')
<script src="{{asset('assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{asset('assets/js/pages/simple-datatables.js')}}"></script>
@endpush