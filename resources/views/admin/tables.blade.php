<x-admin.app-layout>
    <x-slot name="title">Tables</x-slot>

    <x-slot name="page">tables</x-slot>

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <x-admin.breadcrumb page="Tables" />

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            @include('admin.partials.table-01')
            
            @include('admin.partials.table-02')

            @include('admin.partials.table-03')
        </div>
        <!-- ====== Table Section End -->
    </div>
</x-admin.app-layout>
