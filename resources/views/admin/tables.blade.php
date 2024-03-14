<x-admin.app-layout>
    <x-slot name="title">Tables</x-slot>

    <x-slot name="page">tables</x-slot>

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tables
            </h2>

            <x-admin.breadcrumb page="Tables" />
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table One Start -->
            <include src="./partials/table-01.html" />
            <!-- ====== Table One End -->

            <!-- ====== Table Two Start -->
            <include src="./partials/table-02.html" />
            <!-- ====== Table Two End -->

            <!-- ====== Table Three Start -->
            <include src="./partials/table-03.html" />
            <!-- ====== Table Three End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</x-admin.app-layout>
