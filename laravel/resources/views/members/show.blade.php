<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 overflow-hidden overflow-x-auto bg-white border-b border-gray-200">
                    @if ($isEditModalOpen)
                        @include('members.edit')
                    @endif

                    <div class="p-4">

                        @if (session()->has('status'))
                            <div class="bg-green-200 text-green-800 p-2 mb-4">{{ session('status') }}</div>
                        @endif

                        <table class="w-full border-collapse border border-gray-400">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="p-2">Name</th>
                                    <th class="p-2">Email</th>
                                    <th class="p-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr class="hover:bg-gray-100">
                                        <td class="p-2">{{ $member->name }}</td>
                                        <td class="p-2">{{ $member->email }}</td>
                                        <td class="p-2">
                                            <button wire:click="openEditModal({{ $member->id }})" class="bg-blue-500 text-black px-2 py-1 rounded">Edit</button>
                                            <button wire:click="destroy({{ $member->id }})" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <button wire:click="create" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Create Member</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
