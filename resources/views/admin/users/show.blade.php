<x-admin.app-layout>
    <x-slot name="title">ユーザー</x-slot>

    <x-slot name="page">ユーザー</x-slot>

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <x-admin.breadcrumb page="User" />

        <!-- ====== Form Layout Section Start -->
        <div class="grid grid-cols-1 gap-9">

            <!-- Sign Up Form -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        更新
                    </h3>
                </div>
                <form method="post" action="{{ route('admin.users.update', $user) }}">
                    @csrf
                    @method('patch')
                    <div class="p-6.5">
                        <div class="mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Name
                            </label>
                            <input id="name" name="name" type="text" value="{{old('name', $user->name)}}" placeholder="Enter your full name"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Email
                            </label>
                            <input id="email" name="email" type="email" value="{{old('email', $user->email)}}" placeholder="Enter your email address"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <button class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                            更新する
                        </button>
                    </div>
                    @if (session('status') === 'user-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 3000)"
                            class="text-sm text-green-600 dark:text-green-400"
                        >{{ __('Saved.') }}</p>
                    @endif
                    @if (session('status') === 'user-update-failed')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 3000)"
                            class="text-sm text-red-600 dark:text-red-400"
                        >{{ __('Saved.') }}</p>
                    @endif
                </form>
            </div>
        </div>
        <!-- ====== Form Layout Section End -->
    </div>
</x-admin.app-layout>
