<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('data pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full">
    <thead class="bg-gray-100">
        <tr>
            <td class="p-3">No</td>
            <td class="p-3">NIS</td>
            <td class="p-3">Nama Siswa</td>
            <td class="p-3">Kategori</td>
            <td class="p-3">Keluhan</td>
            <td class="p-3">Tanggal</td>
            <td class="p-3">Status</td>
            <td class="p-3">Feedback</td>
            <td class="p-3">Aksi</td>
        </tr>
    </thead>
    <tbody>
        @foreach($complaints as $c)
            <tr class="border-b">
                <td class="p-3">{{ $loop->iteration }}</td>
                <td class="p-3">{{ $c->nis }}</td>
                <td class="p-3">{{ $c->student_name }}</td>
                <td class="p-3">{{ $c->category->name }}</td>
                <td class="p-3">{{ $c->complaint }}</td>
                <td class="p-3">{{ $c->created_at }}</td>
                <td class="p-3">{{ $c->status }}</td>
                <td class="p-3">{{ $c->feedback }}</td>
                <td>
                    <a href="{{ route('complaint.edit' , $c->id)}}">
                        <x-secondary-button> Edit </x-secondary-button>
                        <form method="post" action="{{ route('complaint.destroy', $c->id) }}"
    class="inline ml-1">
    @csrf
    @method('delete')

    <x-danger-button>Hapus</x-danger-button>
</form>
                                       </td>
            </tr>
        @endforeach
    </tbody>
</table>
            </div>
        </div>
    </div>
</x-app-layout>
