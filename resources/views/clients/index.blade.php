<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-whiee overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-auto">
                    <a class="mb-4 shadow-sm p-2 bg-gray-800 text-white rounded text-sm  uppercase"href="{{ route('clients.create') }}">Create new client</a>
                    <div class="overflow-auto">
                    {{ $dataTable->table() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
</x-app-layout>
