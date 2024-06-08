@extends('admin.layouts.app')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title mb-5">Projects list</h2>

                    <a href="{{ route('admin.projects.create') }}">
                        <button type="button" class="btn btn-secondary">Add new project</button>
                    </a>

                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Edit / Delete</th>
                                <th scope="col">Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($projects->count())
                                @foreach ($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $project->id }}</th>
                                        <td>{{ $project->title }}</td>
                                        <td>
                                            <a href="{{ route('admin.projects.edit', $project->id) }}">
                                                <button type="button" class="btn btn-secondary">Edit</button>
                                            </a>
                                            <a href="{{ route('admin.projects.destroy', $project->id) }}" class="delete">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                        <td>{{ $project->created_at }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>No data available yet</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.delete-modal')

@endsection
