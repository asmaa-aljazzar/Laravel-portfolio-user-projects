@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="eyebrow">My work</div>
    <h1>Projects.</h1>
    <p class="intro">A collection of what I've built and what I'm working on next.</p>
    <a class="button" href="{{ route('projects.create') }}">Add a project</a>
    <div class="grid">
        @forelse($projects as $project)
            <article class="card">
                <div class="number">PROJECT {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                <h2>{{ $project['title'] }}</h2>
                <p>{{ $project['description'] }}</p>
                <span @class(['badge', 'completed' => $project['status'] === 'Completed', 'progress' => $project['status'] === 'In Progress'])>{{ $project['status'] }}</span>
                <div class="actions">
                    <a href="{{ route('projects.show', $project) }}">View</a>
                    <a href="{{ route('projects.edit', $project) }}">Edit</a>
                    @include('portfolio.projects._delete')
                </div>
            </article>
        @empty
            <div class="empty">
                <h2>Projects are on the way</h2>
                <p>New work will appear here soon. Check back for updates.</p>
                <a class="button" href="{{ route('home') }}">Back to home</a>
            </div>
        @endforelse
    </div>
@endsection
