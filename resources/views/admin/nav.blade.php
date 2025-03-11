<div>
    <ul>
        @if(auth()->user()->can('admin-view'))
        <li>
            <a href="{{ route('admin.index') }}">Admin Home</a>
        </li>
        @endif
        @if(auth()->user()->can('admin-create'))
        <li>
            <a href="{{ route('admin.create') }}">Create</a>
        </li>
        @endif

    </ul>
</div>
