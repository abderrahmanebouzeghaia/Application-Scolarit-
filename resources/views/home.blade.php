@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-9 pb-3">
        <div class="d-flex justify-content-between align-items-baseline text-light">
        <h1>{{$user->name}}</h1>
        </div>
        <div class="pr-5 h5 text-success"><strong>Module </strong>{{$user->module}}</div>
        </div>
    </div>

    <a class="btn btn-primary m-10" href="/cours/create" role="button">Ajouter un nouveau cours</a>
    <div class="row pt-10">
        @foreach($user->cours as $cour)
        <div class="col-4 pt-3 ">
        <img src="/svg/abc.png" height="50px" width="50px">
        <a href="/storage/{{$cour->pdf}}">{{$cour->title}}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
