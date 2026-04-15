<x-app-layout>
   
<form method="POST" action="{{ route('category.store') }}" class="p-6" style="max-width: 500px; margin: 0 auto;">
        @csrf
 
        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="description" :value="__('Keterangan')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
    
                 <x-primary-button class="mt-4">
                 SIMPAN
                 </x-primary-button>
                </div>
</form>

</x-app-layout>