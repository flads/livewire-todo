<div class="card tasks-card">
    <div class="card-body">
        <h2>Tasks:</h2>
        
        <ul class="task-list">
            @foreach($tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </ul>
    </div>
</div>
