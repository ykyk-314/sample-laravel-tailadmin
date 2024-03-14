<x-admin.app-layout>
    <x-slot name="title">Charts</x-slot>

    <x-slot name="page">Chart</x-slot>

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Chart
            </h2>

            <x-admin.breadcrumb page="Chart" />
        </div>
        <!-- Breadcrumb End -->

        <div class="grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
            <!-- ====== Chart Four Start -->
            <div class="col-span-12">
                <include src="./partials/chart-04.html" />
            </div>
            <!-- ====== Chart Four End -->

            <!-- ====== Chart One Start -->
            <include src="./partials/chart-01.html" />
            <!-- ====== Chart One End -->

            <!-- ====== Chart Two Start -->
            <include src="./partials/chart-02.html" />
            <!-- ====== Chart Two End -->

            <!-- ====== Chart Three Start -->
            <include src="./partials/chart-03.html" />
            <!-- ====== Chart Three End -->
        </div>
    </div>
</x-admin.app-layout>
