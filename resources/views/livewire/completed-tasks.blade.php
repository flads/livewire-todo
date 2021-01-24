<div class="card tasks-card">
    <div class="card-body justify-content-center">
        <h2>Completed Tasks</h2>

        <p class="card-separator"></p>
        
        <ul class="task-list">
            @foreach($tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </ul>
    </div>
</div>
