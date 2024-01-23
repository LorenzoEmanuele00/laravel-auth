@extends('layouts.admin')

@section('content')
    <div class="container my-3">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
            <div class="mb-3 w-50 mx-auto">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>

            <button class="btn btn-success mx-auto d-block mt-3" type="submit">Salva</button>
        </form>
    </div>
@endsection