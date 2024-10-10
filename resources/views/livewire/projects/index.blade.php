<div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
    @foreach($this->projects as $project)
        <a href="{{ route('projects.show', $project) }}">
            <x-projects.card-simple :$project/>
        </a>
    @endforeach
</div>
