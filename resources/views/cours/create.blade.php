@extends('layouts.app')

@section('content')
<div class="container">
<form action="/cours" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
        <div class="row">
            <h1>
            Add new chapitre    </h1>
            </div>
            <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">title</label>
            </div>
            <div class="col-md-8">
                    <input 
                    id="title" 
                    type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    name="title" 
                    value="{{ old('title') }}" 
                    required autocomplete="title" autofocus>

                     @error('title')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            <div class="row">
            <label for="pdf" class="col-md-4 col-form-label">PDF
            <input type="file", class="form-control-file" id="pdf" name="pdf">
                    @if($errors->has('pdf'))
                           <strong>{{ $errors->first('pdf') }}</strong>
                    @endIF
            </div></label>
            <div class="row" pt-4>
            <button class="btn btn-primary">
            Add new chapitre
            </button>
            </div>
        </div>
    </div>      
    </form>         
</div>
@endsection
