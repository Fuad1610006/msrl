@extends('backend.layout.app')
@section('content')           
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Home</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('track-no.create') }}" class="btn btn-primary mb-3">Add New</a>
            </div>
            <div class="card-body">
                @foreach($data as $record)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_1">Title 1</label>
                                <input type="text" value="{{ $record->title_1 }}" class="form-control" name="title_1" readonly>
                            </div>
                            <div class="form-group">
                                <label for="title_2">Title 2</label>
                                <input type="text" value="{{ $record->title_2 }}" class="form-control" name="title_2" readonly>
                            </div>
                            <div class="form-group">
                                <label for="title_3">Title 3</label>
                                <input type="text" value="{{ $record->title_3 }}" class="form-control" name="title_3" readonly>
                            </div>
                            <div class="form-group">
                                <label for="title_4">Title 4</label>
                                <input type="text" value="{{ $record->title_4 }}" class="form-control" name="title_4" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="number_1">Number 1</label>
                                <input type="text" value="{{ $record->number_1 }}" class="form-control" name="number_1" readonly>
                            </div>
                            <div class="form-group">
                                <label for="number_2">Number 2</label>
                                <input type="text" value="{{ $record->number_2 }}" class="form-control" name="number_2" readonly>
                            </div>
                            <div class="form-group">
                                <label for="number_3">Number 3</label>
                                <input type="text" value="{{ $record->number_3 }}" class="form-control" name="number_3" readonly>
                            </div>
                            <div class="form-group">
                                <label for="number_4">Number 4</label>
                                <input type="text" value="{{ $record->number_4 }}" class="form-control" name="number_4" readonly>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
