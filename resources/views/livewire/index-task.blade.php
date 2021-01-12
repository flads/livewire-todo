<div class="card task-card">
    <div class="card-body">
        <h1>Livewire TODO</h1>
        
        <ul class="task-list">
            @foreach($tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </ul>
    </div>
</div>
