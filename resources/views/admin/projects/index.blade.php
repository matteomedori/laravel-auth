@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.create') }}">Aggiungi un nuovo progetto</a>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection
