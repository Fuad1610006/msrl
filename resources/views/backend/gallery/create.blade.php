@extends('backend.layout.app')
@section('content')         
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Gallery</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gallery Images</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('track-records.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Ship Name <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" placeholder="Enter Name" required>
                                     @if($errors->has('name'))
                                        <span class="text-danger"> {{ $errors->first('name') }}</span>
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="country">Country <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="country" name="country" value="{{ old('country')}}" placeholder="Enter Country" required>
                                     @if($errors->has('country'))
                                        <span class="text-danger"> {{ $errors->first('country') }}</span>
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="weight">Weight <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight')}}" placeholder="Enter Weight" required>
                                     @if($errors->has('weight'))
                                        <span class="text-danger"> {{ $errors->first('weight') }}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select class="form-control" id="type" name="type">
                                        <option>Select One</option>
                                         <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>General gallery</option>
                                         <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>Bulk Carrier</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option>Select One</option>
                                        <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="Ongoing"{{ old('status') == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                        <option value="Pending"{{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
