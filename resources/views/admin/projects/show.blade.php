@extends('layouts.admin')

@section('content')
    <div class="container m-3">
        <h2>{{$project->title}}</h2>
        <p>{{$project->description}}</p>
    </div>
@endsection