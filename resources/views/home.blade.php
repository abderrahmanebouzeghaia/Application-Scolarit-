@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{$user->name}}</h1>
        </div>
        <div class="pr-5"><strong>Module </strong>{{$user->module}}</div>
        </div>
    </div>
    <a href="/cours/create">Ajouter un nouveau cours</a>
    <div class="row pt-10">
        @foreach($user->cours as $cour)
        <div class="col-4 pb-3">
        <img src="/svg/abc.png" height="30px" width="30px">
        <a href="/storage/{{$cour->pdf}}">{{$cour->title}}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
