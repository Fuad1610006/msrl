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
                    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                            <div class="col-md-6">
                                <h4>Sister Concern Logo</h4>
                                <div class="form-group">
                                    <label for="sister_company_name">Sister Company Name</label>
                                    <input type="text" id="sister_company_name" class="form-control" name="sister_company_name">
                                </div>
                                <div class="form-group">
                                    <label for="sister_image">Sister Image</label>
                                    <input type="file" id="sister_image" class="form-control" name="sister_image[]" multiple>
                                    <div id="sister_preview"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Buyer Logo</h4>
                                <div class="form-group">
                                    <label for="buyer_name">Buyer Name</label>
                                    <input type="text" id="buyer_name" class="form-control" name="buyer_name">
                                </div>
                                <div class="form-group">
                                    <label for="buyer_image">Buyer Image</label>
                                    <input type="file" id="buyer_image" class="form-control" name="buyer_image[]" multiple>
                                    <div id="buyer_preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <h4 class="text-center">Track Records</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_1">Title 1</label>
                                    <input type="text" id="title_1" class="form-control" name="title_1">
                                </div>
                                <div class="form-group">
                                    <label for="title_2">Title 2</label>
                                    <input type="text" id="title_2" class="form-control" name="title_2">
                                </div>
                                <div class="form-group">
                                    <label for="title_3">Title 3</label>
                                    <input type="text" id="title_3" class="form-control" name="title_3">
                                </div>
                                <div class="form-group">
                                    <label for="title_4">Title 4</label>
                                    <input type="text" id="title_4" class="form-control" name="title_4">
                                </div>
                                 </div>
                                 <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="number_1">Number 1</label>
                                    <input type="text" id="number_1" class="form-control" name="number_1">
                                </div>
                                 <div class="form-group">
                                    <label for="number_2">Title 4</label>
                                    <input type="text" id="number_2" class="form-control" name="number_2">
                                </div>
                                 <div class="form-group">
                                    <label for="number_3">Title 4</label>
                                    <input type="text" id="number_3" class="form-control" name="number_3">
                                </div>
                                <div class="form-group">
                                    <label for="number_4">Title 4</label>
                                    <input type="text" id="number_4" class="form-control" name="number_4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <h4>Main Settings</h4>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" id="location" class="form-control" name="location">
                                </div>
                                <div class="form-group">
                                    <label for="email_address">Email Address</label>
                                    <input type="email" id="email_address" class="form-control" name="email_address">
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_no">Contact Number</label>
                                        <input type="text" id="contact_no" class="form-control" name="contact_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="main_logo">Main Logo</label>
                                        <input type="file" id="main_logo" class="form-control" name="main_logo" >
                                    <div id="main_preview"></div>
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

@section('scripts')
<script>
    function previewImages(input, previewId) {
        var preview = document.getElementById(previewId);
        preview.innerHTML = '';
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    var img = document.createElement('img');
                    img.setAttribute('src', event.target.result);
                    img.setAttribute('class', 'img-thumbnail');
                    preview.appendChild(img);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    }

    document.getElementById('sister_image').addEventListener('change', function() {
        previewImages(this, 'sister_preview');
    });

    document.getElementById('buyer_image').addEventListener('change', function() {
        previewImages(this, 'buyer_preview');
    });
</script>
@endsection
