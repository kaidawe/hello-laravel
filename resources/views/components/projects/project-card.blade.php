@props(['project', 'showBody' => false])

<div class="p-6  bg-white overflow-hidden shadow sm:rounded-lg">
    <div class="text-xl font-bold mb-2">
        <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
    </div>

    @if (!$showBody)
        @if($project->thumb)
            <img src="{{url('storage/' . $project->thumb )}}" width="100px">
        @else
            <img src="{{url('storage/images/gary.png')}}" width="100px">
        @endif
        <div>{!! $project->excerpt !!}</div>
    @elseif ($showBody)
        @if($project->image)
            <img src="{{url('storage/' . $project->image )}}" width="300px">
        @else
            <img src="{{url('storage/images/krabs.png')}}" width="300px">
        @endif
        <div class="space-y-4">{!! $project->body !!}</div>
    @endif

    <footer>
        @if ($project->category)
            <span class="text-xs">Category: <a href="/categories/{{ $project->category->slug }}">{{ $project->category->name }}</a></span>
        @endif

        @if (count($project->tags))
            <div class="text-xs">Tags:
                @foreach($project->tags as $tag)
                    <a href="/tags/{{$tag->slug }}">{{ $tag->name}}</a>
                    <br>
                @endforeach
            </div>
        @endif
    </footer>
</div>

