<div class="
w-full
min-w-full border divide-y divide-gray-200
px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500
rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300
dark:hover:bg-gray-700
dark:focus:ring-offset-gray-800
">
    <div class="flex justify-start">
    <h2 class="text-2xl font-semibold mb-4">
        Editar sócio
    </h2>
    </div>

    <form wire:submit="update">
            <input wire:model="name" type="text" id="name" name="name"
                class="border-gray-300 dark:border-gray-700
                dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                dark:focus:border-indigo-600 focus:ring-indigo-500
                dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1
                block w-full"
            >
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
 <br>
            <input wire:model="email" type="email" id="email" name="email"
                class="border-gray-300 dark:border-gray-700
                dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                dark:focus:border-indigo-600 focus:ring-indigo-500
                dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1
                block w-full"
            >
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

        <br>
            <input type="text" id="cep" wire:model="cep"
                placeholder="cep"
                class="border-gray-300 dark:border-gray-700
                dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                dark:focus:border-indigo-600 focus:ring-indigo-500
                dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1
                block w-full"
            >
            <div>@error('cep') {{ $message }} @enderror</div>
        <br>
            <input type="text" id="endereco" wire:model="endereco"
                placeholder="endereco"
                class="border-gray-300 dark:border-gray-700
                dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                dark:focus:border-indigo-600 focus:ring-indigo-500
                dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1
                block w-full"
            >
            <div>@error('endereco') {{ $message }} @enderror</div>
        <br><br>
        <div class="flex justify-end mt-2">
            <button type="button" wire:click="closeEditModal" class="
            bg-red-500 mr-2
            inline-flex items-center px-4 py-2
            border border-gray-300 dark:border-gray-500 rounded-md font-semibold
            tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700
            focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
            dark:focus:ring-offset-gray-800 disabled:opacity-25 transition
            ease-in-out duration-150
            ">cancelar</button>
            <button type="submit" class="
            inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800
            border border-gray-300 dark:border-gray-500 rounded-md font-semibold
            tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700
            focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
            dark:focus:ring-offset-gray-800 disabled:opacity-25 transition
            ease-in-out duration-150
            ">atualizar</button>
        </div>
    </form>
</div>

