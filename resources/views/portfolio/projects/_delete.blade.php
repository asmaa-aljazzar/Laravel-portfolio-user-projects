<form method="POST" action="{{ route('projects.destroy', $project) }}" onsubmit="return confirm('Delete this project? This cannot be undone.');">
    @csrf
    @method('DELETE')
    <button class="button danger" type="submit" aria-label="Delete {{ $project->title }}">Delete</button>
</form>
