@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="eyebrow">Welcome to my portfolio</div>
    <h1>Hello, I'm<br>{{ $developer['name'] }}.</h1>
    <p class="intro">{{ $developer['job_title'] ?: 'Developer' }}</p>
    <p class="intro">Explore my projects and the skills I bring to my work.</p>
    <a class="button" href="{{ route('projects.index') }}">Explore my projects &rarr;</a>
    <section class="section" aria-labelledby="skills-title">
        <div class="eyebrow">My toolkit</div>
        <h2 id="skills-title">Skills &amp; technologies</h2>
        <ul class="skills">
            @forelse(($developer['skills'] ?? []) as $skill)
                <li>{{ $skill }}</li>
            @empty
                <li>Skills coming soon</li>
            @endforelse
        </ul>
    </section>
@endsection
