@extends('backend.layout.app')
@section('content')
 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Moderation Paragraphs') }}</div>

                    <div class="card-body">
                        <div>
                            <h2>Introduction</h2>
                            <p>{{ $moderation->introduction }}</p>
                        </div>

                        <div>
                            <h2>Necessity</h2>
                            <p>{{ $moderation->necessity }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection