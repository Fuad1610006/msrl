@extends('backend.layout.app')
@section('content')
<style>
    /* Hide CKEditor specific elements */
    .ck.ck-widget__type-around__button.ck-widget__type-around__button_before,
    .ck.ck-widget__type-around__button.ck-widget__type-around__button_after {
        display: none;
    }
    /* Additional styles to remove unwanted space */
    .ck.ck-content > div {
        margin-bottom: 0;
    }
</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>About</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('about-us.create') }}" class="btn btn-primary mb-3">Add New</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $m)
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{!!$m->about_us_text!!}</td>

                           <td class="white-space-nowrap">
                                <a href="{{route('about-us.edit',encryptor('encrypt',$m->id))}}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="javascript:void()" onclick="$('#form{{$m->id}}').submit()">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <form id="form{{$m->id}}" action="{{route('about-us.destroy',encryptor('encrypt',$m->id))}}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                             @empty
                             <td colspan="3" class="text-center">No Data Found</td>
                        </tr>
                         @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </section>
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
