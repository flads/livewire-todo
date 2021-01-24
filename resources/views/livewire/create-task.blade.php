<div class="card task-card">
    <div class="card-body">
        <h1>Create task</h1>

        <form class="create-task justify-content-center" wire:submit.prevent="submit">
            <input wire:model="description" class="form-text" type="text">

            <button class="btn btn-todo">Submit</button>
        </form>
    </div>
</div>
