<div class="min-w-full border divide-y divide-gray-200





px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300
w-full
 dark:hover:bg-gray-700
 dark:focus:ring-offset-gray-800
 transition ease-in-out duration-150



">
    <form wire:submit="save">

            <input type="text" id="name" wire:model="name"
                placeholder="nome"
                class="border-gray-300 dark:border-gray-700
                dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                dark:focus:border-indigo-600 focus:ring-indigo-500
                dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1
                block w-full"
            >
            <div>@error('name') {{ $message }} @enderror</div>
        <br>

            <input type="text" id="email" wire:model="email"
                placeholder="email"
                class="border-gray-300 dark:border-gray-700
                dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                dark:focus:border-indigo-600 focus:ring-indigo-500
                dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1
                block w-full"
            >
            <div>@error('email') {{ $message }} @enderror</div>
        <br><br>
        <button type="button" wire:click="closeCreateModal" class="bg-gray-400 text-white px-4 py-2 rounded mr-2">cancelar</button>
        <button type="submit">salvar</button>
    </form>
</div>
