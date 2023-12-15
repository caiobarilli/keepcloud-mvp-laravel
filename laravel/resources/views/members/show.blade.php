<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Quadro Societário') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="overflow-hidden bg-white dark:bg-gray-800 ">
                    <div class="flex justify-end px-4 py-3 bg-white dark:bg-gray-800 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md mt-2">
                        <button wire:click="openCreateModal()" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150 ">Adicionar novo sócio</button>
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-white dark:bg-gray-800 text-end sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                        <form wire:submit="search" class="flex block w-full">
                            <input placeholder="Buscar sócio" type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" wire:model="query">
                            <button type="submit" class="ml-2">
                                <svg width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                    <g   stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-256.000000, -1139.000000)" fill="#6b7280">
                                            <path d="M269.46,1163.45 C263.17,1163.45 258.071,1158.44 258.071,1152.25 C258.071,1146.06 263.17,1141.04 269.46,1141.04 C275.75,1141.04 280.85,1146.06 280.85,1152.25 C280.85,1158.44 275.75,1163.45 269.46,1163.45 L269.46,1163.45 Z M287.688,1169.25 L279.429,1161.12 C281.591,1158.77 282.92,1155.67 282.92,1152.25 C282.92,1144.93 276.894,1139 269.46,1139 C262.026,1139 256,1144.93 256,1152.25 C256,1159.56 262.026,1165.49 269.46,1165.49 C272.672,1165.49 275.618,1164.38 277.932,1162.53 L286.224,1170.69 C286.629,1171.09 287.284,1171.09 287.688,1170.69 C288.093,1170.3 288.093,1169.65 287.688,1169.25 L287.688,1169.25 Z" id="search" sketch:type="MSShapeGroup">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </div>

                    @if ($isCreateModalOpen)
                        <div class="w-full flex justify-end px-4 py-3 bg-white dark:bg-gray-800 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md mt-2">
                            @include('members.create')
                        </div>
                    @endif

                    @if ($isEditModalOpen)
                        <div
                            class="
                            flex items-center justify-end px-4 py-3
                            bg-white dark:bg-gray-800 text-end sm:px-6
                            sm:rounded-bl-md sm:rounded-br-md
                            "
                        >
                        @include('members.edit')
                        </div>
                    @endif

                    <div class="p-2">
                        @if ($members->count() > 0)
                            {{ $members->links() }}
                        @endif
                    </div>

                    <div class="p-4">

                        @if (session()->has('status'))
                            <div class="bg-green-200 text-green-800 p-2 mb-4">{{ session('status') }}</div>
                        @endif

                        <table class="w-full border-collapse px-4 py-5 sm:p-6 bg-white dark:bg-gray-800 sm:rounded-lg0">
                            <thead>
                                <tr class="bg-gray flex">
                                    <th class=""></th>
                                    <th class=""></th>
                                    <th class=""></th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($members->count() > 0)

                                @foreach ($members as $member)
                                    <tr class="hover:bg-gray-100 text-gray-500 dark:text-gray-400 ">
                                        <td class="p-2">{{ $member->name }}</td>
                                        <td class="p-2">{{ $member->email }}</td>
                                        <td class="p-2">
                                            <button wire:click="openEditModal({{ $member->id }})"  class="bg-gray-500 text-white px-2 py-1 rounded">
                                                <svg width="22px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                                                    <path fill="#FFFFFF"  d="M15.747 2.97a.864.864 0 011.177 1.265l-7.904 7.37-1.516.194.653-1.785 7.59-7.044zm2.639-1.366a2.864 2.864 0 00-4-.1L6.62 8.71a1 1 0 00-.26.39l-1.3 3.556a1 1 0 001.067 1.335l3.467-.445a1 1 0 00.555-.26l8.139-7.59a2.864 2.864 0 00.098-4.093zM3.1 3.007c0-.001 0-.003.002-.005A.013.013 0 013.106 3H8a1 1 0 100-2H3.108a2.009 2.009 0 00-2 2.19C1.256 4.814 1.5 7.848 1.5 10c0 2.153-.245 5.187-.391 6.81A2.009 2.009 0 003.108 19H17c1.103 0 2-.892 2-1.999V12a1 1 0 10-2 0v5H3.106l-.003-.002a.012.012 0 01-.002-.005v-.004c.146-1.62.399-4.735.399-6.989 0-2.254-.253-5.37-.4-6.99v-.003zM17 17c-.001 0 0 0 0 0zm0 0z"/>
                                                </svg>
                                            </button>
                                            <button wire:click="destroy({{ $member->id }})" class="bg-red-500 text-white px-2 py-1 rounded">
                                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 12L14 16M14 12L10 16M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                                @else
                                    <tr>
                                        <td colspan="3" class="p-4">
                                            <p class="text-gray-800 dark:text-gray-200 leading-tight">
                                                Nenhum sócio encontrado.
                                            </p>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
