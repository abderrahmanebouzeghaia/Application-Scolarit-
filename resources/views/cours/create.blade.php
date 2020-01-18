@extends('layouts.app')

@section('content')
<div class="container">
<form action="/cours" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-1">
        <div class="row ml-1 mb-4 text-light">
            <h1>
            Add new chapitre    </h1>
            </div>

            <div class="col-md-8 ml-n3">
                    <input
                    id="title"
                    placeholder="Title"
                    type="text"
                    class="form-control @error('title') is-invalid @enderror"
                    for="title"
                    name="title"
                    value="{{ old('title') }}"
                    required autocomplete="title" autofocus>

                     @error('title')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            <div class="custom-file mt-3">
              <input type="file" class="custom-file-input" id="pdf" name="pdf" >
              <label class="custom-file-label" for="pdf"> Choose a PDF file</label>
                    @if($errors->has('pdf'))
                           <strong>{{ $errors->first('pdf') }}</strong>
                    @endIF
            </div>

            <div class="row pt-3 ml-1">
            <button class="btn btn-primary">
            Add new chapitre
            </button>
            </div>
        </div>
    </div>
    </form>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
</div>
@endsection
