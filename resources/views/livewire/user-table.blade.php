<div class="flex flex-col">
    <div class="overflow-x-auto rounded-2xl shadow-2xs border border-gray-200 dark:border-gray-700">
        <table class="w-full table-auto text-sm">
            <thead class="bg-gray-100 dark:bg-gray-800">
                <tr class="border-b text-left font-semibold uppercase text-gray-600 dark:text-gray-400">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Criado em</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="border-b hover:bg-gray-100 dark:hover:bg-neutral-700">
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-400">{{ $user->id }}</td>
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-400">{{ $user->name }}</td>
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-400">{{ $user->email }}</td>
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-400">
                            {{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-400 text-center">
                            <x-dropdown>
                                <x-dropdown.item label="Ver" icon="eye" wire:click="view({{ $user }})" />

                                <x-dropdown.item label="Editar" icon="pencil" wire:click="edit({{ $user }})" />

                                <x-dropdown.item label="Apagar" icon="trash"
                                    wire:click="delete({{ $user }})" />
                            </x-dropdown>
                        </td>
                    </tr>
                @empty
                    <tr class="border-b hover:bg-gray-100 dark:hover:bg-neutral-700">
                        <td colspan="5" class="px-4 py-2 text-gray-800 dark:text-gray-400 text-center font-bold">
                            Nenhum usuário encontrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                @if ($users->hasPages())
                    <tr>
                        <td colspan="5" class="px-4 py-2 bg-gray-100 dark:bg-gray-800">
                            {{ $users->links() }}
                        </td>
                    </tr>
                @endif
            </tfoot>
        </table>
    </div>
</div>
