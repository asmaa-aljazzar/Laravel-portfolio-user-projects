@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <a href="{{ route('projects.index') }}">&larr; All projects</a>
    <article class="section">
        <div class="eyebrow">Project details</div>
        <h1>{{ $project->title }}</h1>
        <span @class(['badge', 'completed' => $project->status === 'Completed', 'progress' => $project->status === 'In Progress'])>{{ $project->status }}</span>
        <p class="intro description">{{ $project->description }}</p>
        <div class="actions">
            <a class="button" href="{{ route('projects.edit', $project) }}">Edit project</a>
            @include('portfolio.projects._delete')
        </div>
    </article>
@endsection
