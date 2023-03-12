<x-layout>
    <x-slot name="content">
        
            <section class="px-10">
                <h2 class="text-xl px-1 mb-5 uppercase">Projects</h2>

                <header class="text-right">
                    <div class="p-4">
                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded flex-end">
                            <a href="/admin/projects/create">Create Project</a>
                          </button>
                    </div>
                </header>

                <div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
                @foreach ($projects as $project)
                    <article class="flex justify-between w-full odd:bg-gray-100"">
                        <h2 class="text-lg font-bold">{!! $project->title !!}</h2>
                        <div>
                            <a href="/admin/projects/{{ $project->id }}/edit">Edit</a> |
                            <form method="POST" action="/admin/projects/{{$project->id}}/delete" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-600">Delete
                                </button>
                            </form>
                        </div>
                    </article>
                @endforeach
                </div>
            </section>

        <section class="px-10">
            <h2 class="text-xl px-1 mb-5 uppercase">Users</h2>

            <header class="text-right">
                <div class="p-4">
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded flex-end">
                        <a href="/admin/users/create">Create User</a>
                      </button>
                </div>
            </header>

            <div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
                @foreach ($users as $user)
                <article class="flex justify-between w-full odd:bg-gray-100">
                    <h2 class="text-lg font-bold">{!! $user->name !!}</h2>
                    <div>
                        <a href="/admin/users/{{ $user->id }}/edit">Edit</a> |
                        <form method="POST" action="/admin/users/{{$user->id}}/delete" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600">Delete
                            </button>
                        </form>
                    </div>
                </article>
                @endforeach
            </div>
        </section>

        <section class="px-10">
            <h2 class="text-xl px-1 mb-5 uppercase">Categories</h2>

            <header class="text-right">
                <div class="p-4">
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded flex-end">
                        <a href="/admin/categories/create">Create Category</a>
                      </button>
                </div>
            </header>
            <div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
                @foreach ($categories as $category)
                <article class="flex justify-between w-full odd:bg-gray-100">
                    <h2 class="text-lg font-bold">{!! $category->name !!}</h2>
                    <div>
                        <a href="/admin/categories/{{ $category->id }}/edit">Edit</a> |
                        <form method="POST" action="/admin/categories/{{$category->id}}/delete" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600">Delete
                            </button>
                        </form>
                    </div>
                </article>
                @endforeach
            </div>
            </section>

            <section class="px-10">
                <h2 class="text-xl px-1 mb-5 uppercase">Tags</h2>

                <header class="text-right">
                    <div class="p-4">
                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded flex-end">
                            <a href="/admin/tags/create">Create Tag</a>
                          </button>
                    </div>
                </header>

            <div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
                @foreach ($tags as $tag)
                <article class="flex justify-between w-full odd:bg-gray-100">
                    <h2 class="text-lg font-bold">{!! $tag->name !!}</h2>
                    <div>
                        <a href="/admin/tags/{{ $tag->id }}/edit">Edit</a> |
                        <form method="POST" action="/admin/tags/{{$tag->id}}/delete" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600">Delete
                            </button>
                        </form>
                    </div>
                </article>
                @endforeach
            </div>

        </section>

    </x-slot>
</x-layout>