<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg gap-8 flex flex-col">
                <p>
                    https://dev.to/ericchapman/laravel-blade-components-5c9c
                </p>
                <p>
                    https://www.diigo.com/user/ady_gould?query=laravel+component
                </p>
                <p>
                    https://www.youtube.com/watch?v=7E76PPoIVW4&ab_channel=CodeWithDary
                </p>
                <p>
                    https://www.youtube.com/watch?v=kfvLppwhmgQ&ab_channel=LaravelDaily
                </p>
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-alert type="error" :message="$message" />
                    <x-alert type="warning" :message="$message" />
                    <x-alert type="info" :message="$message" />
                    <x-alert type="success" :message="$message" />
                    <x-alert type="alert" :message="$message" />

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
