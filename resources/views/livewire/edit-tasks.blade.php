@foreach($tasks as $task)
    <div class="card task-edit-card">
        <h2>Task Editing</h2>

        <div class="card-body">
            <form class="edit-task" wire:submit.prevent="submit">
                <div class="form-group">
                    <input class="form-text" type="text" value="{{$task['description']}}">
                    <button class="btn btn-todo">Update</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
