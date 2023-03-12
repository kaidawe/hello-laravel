<header class="px-6 py-4 w-full h-fit">
    <nav class="flex justify-between items-end">
        <div class="flex-start flex-grow">
            <a href="/" class="text-s font-bold uppercase">Home</a>
            <a href="/projects" class="ml-4 text-xs font-bold uppercase">Projects</a>
            <a href="/about" class="ml-4 text-xs font-bold uppercase">About</a>
        </div>

        <div>
            @auth
                <span class="text-xs font-bold uppercase">{{ auth()->user()->name }}</span>
                @if (auth()->user()->isAdmin())
                    <a href="/admin" class="ml-4 text-xs font-bold uppercase">Admin</a>
                @endif
                <a href="/logout" class="ml-3 text-xs font-bold uppercase">Logout</a>
            @else
                <a href="/login" class="ml-3 text-xs font-bold uppercase">Log In</a>
            @endauth
        </div>
    </nav>
</header>


