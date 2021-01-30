<div class="card task-card">
    <div class="card-body">
        <h1>Create Task</h1>

        @error('description') <span class="error">- {{ $message }}</span> @enderror

        <form class="create-task justify-content-center" wire:submit.prevent="submit">
            <input wire:model="description" class="form-text" type="text" placeholder="Build a Todo App...">

            <button class="btn btn-todo">Submit</button>
        </form>
    </div>
</div>
