<div>
    <ul>
        @if(auth()->user()->can('post-view'))
        <li>
            <a href="{{ route('post.index') }}">Post Home</a>
        </li>
        @endif

        @if(auth()->user()->can('post-create'))
        <li>
            <a href="{{ route('post.create') }}">Create</a>
        </li>
        @endif
    </ul>
</div>
