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
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Sister Concern Logo</h4>
                                <form action="{{ route('sister-logo.store') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </form>  
                            </div>
                            <div class="col-md-6">
                                <h4>Buyer Logo</h4>
                                <form action="{{ route('buyer-logo.store') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </form>  
                            </div>
                        </div>
                </div>
            </div>
        </section>
      
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4>Track Record Cards</h4>
                    <form action="{{ route('track.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_1">Card Title 1<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="title_1" name="title_1" required>
                                    @if($errors->has('title_1'))
                                        <span class="text-danger"> {{ $errors->first('title_1') }}</span>
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="title_2">Card Title 2 <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="title_2" name="title_2" required>
                                    @if($errors->has('title_2'))
                                        <span class="text-danger"> {{ $errors->first('title_2') }}</span>
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="title_3">Card Title 3 <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="title_3" name="title_3" required>
                                    @if($errors->has('title_3'))
                                        <span class="text-danger"> {{ $errors->first('title_3') }}</span>
                                     @endif
                                </div>
                                 <div class="form-group">
                                    <label for="title_4">Card Title 4 <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="title_4" name="title_4" required>
                                    @if($errors->has('title_4'))
                                        <span class="text-danger"> {{ $errors->first('title_4') }}</span>
                                     @endif
                                </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>  
                            </div>

                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number_1">Card Number 1<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="number_1" name="number_1" required>
                                        @if($errors->has('number_1'))
                                            <span class="text-danger"> {{ $errors->first('number_1') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="number_2">Card Number 2<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="number_2" name="number_2" required>
                                        @if($errors->has('number_2'))
                                            <span class="text-danger"> {{ $errors->first('number_2') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="number_3">Card Number 3<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="number_3" name="number_3" required>
                                        @if($errors->has('number_3'))
                                            <span class="text-danger"> {{ $errors->first('number_3') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="number_4">Card Number 4<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="number_4" name="number_4" required>
                                        @if($errors->has('number_4'))
                                            <span class="text-danger"> {{ $errors->first('number_4') }}</span>
                                        @endif
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </form>
                </div>
                
                
            </div>
        </section>

         <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4>Track Record Cards</h4>
                    <form action="{{ route('settings.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_1">Card Title 1<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="title_1" name="title_1" required>
                                    @if($errors->has('title_1'))
                                        <span class="text-danger"> {{ $errors->first('title_1') }}</span>
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="title_2">Card Title 2 <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" id="title_2" name="title_2" required>
                                    @if($errors->has('title_2'))
                                        <span class="text-danger"> {{ $errors->first('title_2') }}</span>
                                     @endif
                                </div>
                                
                                 <button type="submit" class="btn btn-primary">Submit</button>  
                            </div>

                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number_1">Card Number 1<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="number_1" name="number_1" required>
                                        @if($errors->has('number_1'))
                                            <span class="text-danger"> {{ $errors->first('number_1') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="number_2">Card Number 2<i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" id="number_2" name="number_2" required>
                                        @if($errors->has('number_2'))
                                            <span class="text-danger"> {{ $errors->first('number_2') }}</span>
                                        @endif
                                    </div>
                                   
                                </div>  
                            </div>
                        </div>
                    </form>
                </div>
                
                
            </div>
        </section>

    </div>
</div>
@endsection
