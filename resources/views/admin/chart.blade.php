<x-admin.app-layout>
    <x-slot name="title">Charts</x-slot>

    <x-slot name="page">Chart</x-slot>

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <x-admin.breadcrumb page="Chart" />

        <div class="grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
            <div class="col-span-12">
                @include('admin.partials.chart-04')
            </div>

            @include('admin.partials.chart-01')

            @include('admin.partials.chart-02')

            @include('admin.partials.chart-03')
        </div>
    </div>
</x-admin.app-layout>
