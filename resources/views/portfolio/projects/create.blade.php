@extends('layouts.app')

@section('title', 'Create project')

@section('content')
    <div class="eyebrow">Build something new</div>
    <h1>Add a project.</h1>
    <p class="intro">New projects start with Pending status.</p>
    <form class="card form-panel" method="POST" action="{{ route('projects.store') }}">
        @csrf
        @include('portfolio.projects._form')
        <div class="actions">
            <button class="button" type="submit">Create project</button>
            <a href="{{ route('projects.index') }}">Cancel</a>
        </div>
    </form>
@endsection
