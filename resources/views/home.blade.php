<x-layout>
    <x-slot name="content">
        <div class="text-center mt-6">
            <h1 class="text-3xl font-bold"> Haley Dawe portfolio showcase</h1>
            </div>

            @if ($project)
            <div class="relative w-full h-screen bg-cover bg-no-repeat bg-center"
            style="background-image: url('{{asset('storage/images/background.png')}}')">
           <div class="absolute top-0 left-0 bg-white p-4 pt-15 z-10">
               <h2 class="text-2xl">Project Example</h2>
               <div class="mt-2 text-lg leading-7">
                This is an exmaple of body text for my main project being displayed here.
                   {!! $project->body !!}
               </div>
           </div>
       </div>
        @else
            <p>No project selected.</p>
        @endif

        <div class="flex justify-center mt-6">
            @foreach($projects->take(3) as $project)
            <div class="w-1/3 p-4">
                <h3 class="text-lg font-bold">{{ $project->title }}</h3>
                <p class="mt-2 text-sm">{{ $project->excerpt }}</p>
            </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-6">
        <a href="/projects">
            <button class=" mx-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-6">
                View all projects
            </button>
        </a>
        </div>

    </x-slot>
</x-layout>
