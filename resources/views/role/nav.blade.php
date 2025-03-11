<div>
    <ul>
        @if(auth()->user()->can('role-view'))

        <li>
            <a href="{{ route('role.index') }}">Role Home</a>
        </li>
        @endif

        @if(auth()->user()->can('role-view'))
        <li>
            <a href="{{ route('role.create') }}">Create</a>
        </li>
        @endif
    </ul>
</div>
