<div>
    <h2 class="text-2xl font-semibold mb-4">Edit Member</h2>

    <form wire:submit="update">
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-semibold mb-2">Name:</label>
            <input wire:model="name" type="text" id="name" name="name" class="w-full border p-2">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Email:</label>
            <input wire:model="email" type="email" id="email" name="email" class="w-full border p-2">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="button" wire:click="closeEditModal" class="bg-gray-400 text-white px-4 py-2 rounded mr-2">Cancel</button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>
