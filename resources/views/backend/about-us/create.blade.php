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
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                    <form action="{{ route('about_us.store') }}" method="POST">
                        @csrf
                        <div id="toolbar-container"></div>

                        <div class="form-group">
                            <label for="editor">Content</label>
                             <div id="editor"></div>
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
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/decoupled-document/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/plugins/image/image.js"></script>
<script>
  DecoupledEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
      // Get the toolbar container element from your blade template
      const toolbarContainer = document.getElementById('toolbar-container');

      // Append the toolbar to the container
      toolbarContainer.appendChild(editor.ui.view.toolbar.element);

      // Add a hidden input to store the editor data
      const hiddenInput = document.createElement('input');
      hiddenInput.type = 'hidden';
      hiddenInput.name = 'content'; // Adjust the name according to your form

      // Update the hidden input value whenever the editor data changes
      editor.model.document.on('change', () => {
        hiddenInput.value = editor.getData();
      });

      // Add the hidden input to the form
      const form = document.querySelector('form');
      form.appendChild(hiddenInput);
    })
    
    .catch(error => {
      console.error(error);
    });
</script>

@endpush
