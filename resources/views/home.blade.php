<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          @foreach($complaints as $c)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
               <h3 class="font-bold text-xl mb-2">{{$c->nis}} - {{$c->student_name}}</h3>
            <span>adminid</span> - <span>{{$c->created_at->format('d M Y')}}</span> - <span>{{ ucfirst($c->status) }}</span>
            <p class="mt-2">{{$c->complaint}}</p>
           
            @if($c->feedback)
             <p class="mt-4 italic"> Tanggapan: {{$c->feedback}}</p>
            @endif
                </div>
            </div>
  @endforeach
  {{$complaints ->links()}}
        </div>
    </div>
</x-app-layout>
