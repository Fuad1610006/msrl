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
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Carousel</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                {{--<div class="form-group">
                                    <label for="about_link">About Link<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="about_link" name="about_link" value="{{ old('about_link')}}" placeholder="Enter Link" required>
                                     @if($errors->has('about_link'))
                                        <span class="text-danger"> {{ $errors->first('about_link') }}</span>
                                     @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="project_link">Project Link <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="project_link" name="project_link" value="{{ old('project_link')}}" placeholder="Enter Link" required>
                                     @if($errors->has('project_link'))
                                        <span class="text-danger"> {{ $errors->first('project_link') }}</span>
                                     @endif
                                </div>--}}

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control" name="image">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="short_description">Description <i class="text-danger">*</i></label>
                                     <textarea name="short_description" cols="30" rows="8" id="short_description" class="form-control"></textarea>
                                     @if($errors->has('short_description'))
                                        <span class="text-danger"> {{ $errors->first('short_description') }}</span>
                                     @endif
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
