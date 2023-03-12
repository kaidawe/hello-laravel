<x-layout>
    <x-slot name="content">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="absolute top-12 left-12 text-black text-md font-regular">
                <a href="/projects" class="ml-3"> ← Back to projects</a>
            </div>

            <x-projects.project-card :project="$project" class="w-4/5" showBody="true" />
        </div>
    </x-slot>
</x-layout>
