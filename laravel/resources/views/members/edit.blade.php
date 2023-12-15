<div class="p-4">
    <button wire:click="closeEditModal" class="bg-red-500 text-white px-4 py-2 rounded">Close</button>

    <form wire:submit.prevent="update">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" wire:model="name" class="p-2 w-full border rounded">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" wire:model="email" class="p-2 w-full border rounded">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
