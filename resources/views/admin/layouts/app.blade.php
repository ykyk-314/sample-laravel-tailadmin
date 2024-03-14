<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . ' | ' : '' }}{{ config('app.name', 'Tailwind-Admin') }}</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body 
    x-data="{
        page: '{{$page}}', 
        'loaded': true, 
        'darkMode': true, 
        'stickyMenu': false, 
        'sidebarToggle': false, 
        'scrollTop': false
    }" 
    x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" 
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true }">
    {{-- Preloader --}}
    @include('admin.layouts.preloader')

    <!-- Wrapper Start -->
    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar --}}
        @include('admin.layouts.sidebar')

        <!-- Content Start -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            {{-- Header --}}
            @include('admin.layouts.header')

            <main>
                {{ $slot }}
            </main>
        </div>
        <!-- Content End -->
    </div>
    <!-- Wrapper End -->
</body>

</html>
