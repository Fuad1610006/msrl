@extends('backend.layout.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ship</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ship</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ship Info</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('ship-info.update', encryptor('encrypt',$ship->id)) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Ship Name <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $ship->name) }}" placeholder="Enter Name" required>
                                    @if($errors->has('name'))
                                        <span class="text-danger"> {{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label for="country">Country <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $ship->country) }}" placeholder="Enter Country" required>
                                    @if($errors->has('country'))
                                        <span class="text-danger"> {{ $errors->first('country') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="weight">Weight <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight', $ship->weight) }}" placeholder="Enter Weight" required>
                                    @if($errors->has('weight'))
                                        <span class="text-danger"> {{ $errors->first('weight') }}</span>
                                    @endif
                                </div> --}}

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control" name="image">
                                     @if ($ship->image)
                                        <p class="mt-2">Current Image: {{ $ship->image }}</p>
                                        <input type="hidden" name="old_image" value="{{ $ship->image }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{-- <div class="form-group">
                                    <label for="type">Type</label>
                                    <select class="form-control" id="type" name="type">
                                        <option>Select One</option>
                                        <option value="1" {{ old('type', $ship->type) == '1' ? 'selected' : '' }}>General Ship</option>
                                        <option value="2" {{ old('type', $ship->type) == '2' ? 'selected' : '' }}>Bulk Carrier</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option>Select One</option>
                                        <option value="Completed" {{ old('status', $ship->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="Ongoing"{{ old('status', $ship->status) == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                        <option value="Pending"{{ old('status', $ship->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="category">category</label>
                                    <select class="form-control" id="category" name="category">
                                        <option>Select One</option>
                                        <option value="1" {{ old('category', $ship->category) == '1' ? 'selected' : '' }}>Corporate</option>
                                        <option value="2" {{ old('category', $ship->category) == '2' ? 'selected' : '' }}>Project</option>
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
