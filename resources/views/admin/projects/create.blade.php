@extends('layouts.admin')

@section('content')
    <div class="container my-3">
        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
            <div class="mb-3 w-50 mx-auto has-validation">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>

            <button class="btn btn-success mx-auto d-block mt-3" type="submit">Salva</button>
        </form>
    </div>
@endsection