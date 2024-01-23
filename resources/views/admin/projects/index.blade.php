@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="text-end my-3">
            <a class="btn btn-success" href="{{route('admin.projects.create')}}">New Project</a>
        </div>

        <table class="table table-striped border border-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td>{{$project->title}}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"><i class="fa-solid fa-info"></i></a>
                            {{-- <a class="btn btn-warning" href="{{ route('projects.edit', ['project' => $project->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('projects.destroy', ['project' => $project->id]) }}"" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                            </form>  --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection