@extends('backend.layout.app')
@section('content')
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Moderation Paragraphs') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('moderation.update') }}">
                            @csrf
                            <div class="form-group">
                                <label for="introduction">Introduction:</label>
                                <textarea id="introduction" name="introduction" class="form-control">{{ old('introduction', $moderation->introduction) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="necessity">Necessity:</label>
                                <textarea id="necessity" name="necessity" class="form-control">{{ old('necessity', $moderation->necessity) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection
@push('scripts')
    <script src="assets/extensions/tinymce/tinymce.min.js"></script>
    <script src="assets/js/pages/tinymce.js"></script> 
@endpush