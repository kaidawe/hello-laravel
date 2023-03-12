<x-layout>
    <x-slot name="content">
<div
    class="relative flex justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="mt-6">

    @if (isset($category))
        <div class="absolute top-12 left-12 text-black text-md font-regular">
            <a href="/projects" class="ml-3"> ← Back to projects</a>
        </div>
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold">{{ $category->name }}</h1>
        </div>
    @endif

    @if (isset($tag))
        <div class="absolute top-12 left-12 text-black text-md font-regular">
            <a href="/projects" class="ml-3"> ← Back to projects</a>
        </div>
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold">{{ $tag->name }}</h1>
        </div>
    @endif

        <section class="grid grid-cols-2 md:grid-cols-2 gap-2">
            @foreach ($projects as $project)
                <x-projects.project-card :project="$project" class="w-4/5" />
            @endforeach
        </section>

        @if (count($projects))
        <div class="text-xs mt-4 w-full text-right">
            @if($projects instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $projects->links() }}
            @elseif (isset($category))
                Found {{ count($projects) }} Projects in {{ $categoryName }}
            @else
                Found {{ count($projects) }} Projects in {{ $tagName }}
            @endif
        </div>
        @else
            <div>Nothing to showcase, yet.</div>
        @endif

    </div>
</div>
    </x-slot>
</x-layout>
