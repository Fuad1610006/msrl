@extends('backend.layout.app')
@section('content') 
<style>
    .ck-editor__editable_inline {
        min-height: 400px;
        border:1px solid #AAA !important;
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
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">About Page</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('about_us.update', encryptor('encrypt',$about->id)) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div id="editor">
                            <p>This is some sample content.</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script src="asset{{'assets/js/pages/ckeditor.js'}}"></script>
@endpush