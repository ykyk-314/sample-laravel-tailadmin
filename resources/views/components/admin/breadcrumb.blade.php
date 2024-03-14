<!-- Breadcrumb Start -->
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        {{ $page ?? '' }}
    </h2>

    <nav>
        <ol class="flex items-center gap-2">
            <li>
                <a class="font-medium" href="{{ route('admin.index') }}">Dashboard /</a>
            </li>
            <li class="text-primary">{{ $page ?? '' }}</li>
        </ol>
    </nav>
</div>
<!-- Breadcrumb End -->
