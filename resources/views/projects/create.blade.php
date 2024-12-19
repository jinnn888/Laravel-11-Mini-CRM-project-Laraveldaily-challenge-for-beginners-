<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-whiee overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-white">
                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf
                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <!-- Description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                         <!-- Deadline -->
                        <div class="mt-4">
                            <x-input-label for="deadline_at" :value="__('Deadline')" />
                            <x-text-input id="deadline_at" class="block mt-1 w-full" type="date" name="deadline_at" required/>
                            <x-input-error :messages="$errors->get('deadline_at')" class="mt-2" />
                        </div>
                        <!-- Assign User -->
                        <div class="mt-4">
                            <x-input-label for="user" :value="__('Assign User')" />

                            <x-select name="user_id" :items="$users"/>

                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        </div>
                        <!-- Assign Client -->
                        <div class="mt-4">
                            <x-input-label for="client" :value="__('Assign Client')" />
                            <x-select name="client_id" id="client" :items="$clients"/>
                            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                        </div>
                        <!-- Status -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')" />
                            @php
                                $status = collect(['open', 'in-progress', 'blocked', 'cancelled', 'completed']);
                            @endphp

                            <select name="status" class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-capitalize w-full' id="status">
                                @foreach ($status as $status)
                                    <option value="{{ $status }}">{{ $status }}</option>
                                @endforeach
                            </select>


                            <x-input-error :messages="$errors->get('company_city')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('CREATE') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
