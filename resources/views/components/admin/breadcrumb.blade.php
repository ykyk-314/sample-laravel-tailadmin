<nav>
    <ol class="flex items-center gap-2">
        <li>
            <a class="font-medium" href="{{ route('admin.index') }}">Dashboard /</a>
        </li>
        <li class="text-primary">{{$page ?? ''}}</li>
    </ol>
</nav>