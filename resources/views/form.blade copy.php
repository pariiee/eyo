<form method="POST" action="{{ route('pengaduan.store') }}">
    @csrf

    <div class="mt-4">
        <x-input-label for="category_id" :value="__('Kategori')" />

        <x-select-input id="category_id" class="block mt-1 w-full"
            type="text"
            value="{{ old('category_id') }}"
            name="category_id">
            @foreach($categories as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
        </x-select-input>

        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="nama" :value="__('Nama')" />
        <x-text-input id="nama" class="block mt-1 w-full" 
            type="text" 
            name="nama" 
            value="{{ old('nama') }}" 
            required />
        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="nis" :value="__('NIS')" />
        <x-text-input id="nis" class="block mt-1 w-full" 
            type="text" 
            name="nis" 
            value="{{ old('nis') }}" 
            required />
        <x-input-error :messages="$errors->get('nis')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="isi_pengaduan" :value="__('Isi Pengaduan')" />
        <textarea id="isi_pengaduan" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
            name="isi_pengaduan" 
            rows="4"
            required>{{ old('isi_pengaduan') }}</textarea>
        <x-input-error :messages="$errors->get('isi_pengaduan')" class="mt-2" />
    </div>

    <div class="mt-6">
        <x-primary-button class="w-full">
            {{ __('KIRIM PENGADUAN') }}
        </x-primary-button>
    </div>
</form>