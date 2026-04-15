<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Data Kategori
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="category/create" class="block mb-2">
                 <x-primary-button>Tambah Kategori  </x-primary-button>
                </a>
               <table class="w-full">
                <thead class="bg-gray-100">
                <td class="p-3">No</td>
                <td class="p-3">Nama</td>
                <td class="p-3">Keterangan</td>
                <td class="p-3">Aksi</td>
                </thead>
                <tbody>
                    @foreach($categories as $c)
                    <tr class="border-b">
                     <td class="p-3">{{ $loop->iteration}}</td>   
                      <td class="p-3">{{$c->name}}</td> 
                       <td class="p-3">{{$c->description}}</td>
                       <td class="p-3">
                        <div class="flex items-center gap-2">
                            <a href="{{route('category.edit', $c->id)}}">
                                <x-secondary-button>Edit</x-secondary-button>
                            </a>
                            <form method="POST" action="{{ route('category.destroy',$c->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <x-danger-button>Hapus</x-danger-button>
                            </form>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                   </table>
            </div>
        </div>
    </div>
</x-app-layout>
