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
                <h3>History</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">History</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">History Page</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('history.update', encryptor('encrypt',$data->id)) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <div id="toolbar-container"></div>
                            <textarea name="history_text" id="ckeditordetails" class="d-none">{{ old('history_text')}}</textarea>
                            <div class="form-control ck-editor__editable ck-editor__editable_inline" id="ckeditor"  rows="5">{{ old('history_text', $data->history_text)}}</div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('assets/ckeditor5-build-decoupled-document/ckeditor.js') }}"></script>
<script>
    $('#ckeditor').blur(function(){
        $('#ckeditordetails').val($(this).html());
    })
DecoupledEditor
.create( document.querySelector( '#ckeditor' ),{
                ckfinder: {
                    uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
                }
            })
            .then( editor => {
                const toolbarContainer = document.querySelector( '#toolbar-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            } );
    
</script>

@endpush
