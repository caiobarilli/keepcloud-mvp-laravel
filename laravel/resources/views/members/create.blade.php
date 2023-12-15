<div class="min-w-full border divide-y divide-gray-200">
    <form wire:submit="save">
        <label for="name">
            Name
            <input type="text" id="name" wire:model="name">
            <div>@error('name') {{ $message }} @enderror</div>
        </label>
        <br>
        <label for="email">
            Email
            <input type="text" id="email" wire:model="email">
            <div>@error('email') {{ $message }} @enderror</div>
        </label>
        <br><br>
        <button type="submit">Save</button>
        <button type="button" wire:click="closeCreateModal" class="bg-gray-400 text-white px-4 py-2 rounded mr-2">Cancel</button>

    </form>
</div>
