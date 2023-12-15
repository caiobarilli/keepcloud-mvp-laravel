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

                    <div class="min-w-full align-middle">
                        <form wire:submit="save">
                            <label for="name">
                                name:
                                <input type="text" id="name" wire:model="name">
                            </label>
                            <label for="email">
                                email:
                                <input type="text" id="email" wire:model="email">
                            </label>

                            <button type="submit">Save</button>
                        </form>
                    </div>

                    <div class="mt-5 min-w-full align-middle">
                        <table class="min-w-full border divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 text-left bg-gray-50">
                                    <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Name</span>
                                </th>
                                <th class="px-6 py-3 text-left bg-gray-50">
                                    <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Email</span>
                                </th>
                                <th class="px-6 py-3 text-left bg-gray-50">
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                @forelse($members as $member)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            {{ $member->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            {{ $member->email }}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            <button
                                                type="button"
                                                wire:click="destroy({{ $member->id }})"
                                                wire:confirm="Are you sure you want to delete this post?"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white">
                                        <td colspan="3" class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                            No Member found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
