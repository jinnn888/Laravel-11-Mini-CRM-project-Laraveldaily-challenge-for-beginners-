<x-app-layout>
    {{-- {{dd($client);}} --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-whiee overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-white">
                    <form method="POST" action="{{ route('clients.update', $client->id ) }}">
                        @method("PUT")
                        @csrf
                        <!-- Contact Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('name', $client->contact_name)" required autofocus/>
                            <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
                        </div>
                        <!-- Contact Email -->
                        <div class="mt-4">
                            <x-input-label for="contact_email" :value="__('Contact Email')" />
                            <x-text-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" :value="old('contact_email', $client->contact_email) " required />
                            <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
                        </div>
                         <!-- Contact Phone Number -->
                        <div class="mt-4">
                            <x-input-label for="contact_phone_number" :value="__('Contact Phone Number')" />
                            <x-text-input id="contact_phone_number" class="block mt-1 w-full" type="text" name="contact_phone_number" required :value="old('contact_phone_number', $client->contact_phone_number)"/>
                            <x-input-error :messages="$errors->get('contact_phone_number', $client->contact_phone_number)" class="mt-2" />
                        </div>
                        <!-- Company Name -->
                        <div class="mt-4">
                            <x-input-label for="company_name" :value="__('Company Name')" />
                            <x-text-input id="company_name" class="block mt-1 w-full" type="text" :value="old('company_name', $client->company_name)" name="company_name" required/>
                            <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                        </div>
                        <!-- Company Address -->
                        <div class="mt-4">
                            <x-input-label for="company_address" :value="__('Company Address')" />
                            <x-text-input id="company_address" class="block mt-1 w-full" type="text" :value="old('company_address', $client->company_address)" name="company_address" required/>
                            <x-input-error :messages="$errors->get('company_address')" class="mt-2" />
                        </div>
                        <!-- Company City -->
                        <div class="mt-4">
                            <x-input-label for="company_city" :value="__('Company City')" />
                            <x-text-input id="company_city" class="block mt-1 w-full" type="text" name="company_city" required :value="old('company_city', $client->company_city)" />
                            <x-input-error :messages="$errors->get('company_city')" class="mt-2" />
                        </div>
                        
                        {{-- Company ZIP --}}

                        <div>
                            <x-input-label for="company_zip" :value="__('Company ZIP')" />
                            <x-text-input :value="old('company_zip', $client->company_zip)"
                                id="company_zip" class="block mt-1 w-full" type="text" name="company_zip" required />
                            <x-input-error :messages="$errors->get('company_zip')" class="mt-2" />
                        </div>
                        <!-- Company Vat -->
                        <div class="mt-4">
                            <x-input-label for="company_vat" :value="__('Company VAT')" />
                            <x-text-input id="company_vat" class="block mt-1 w-full" type="text" name="company_vat" :value="old('company_vat', $client->company_vat)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('company_vat')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('update') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
