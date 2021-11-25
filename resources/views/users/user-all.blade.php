<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="container py-4 mx-auto">
                    <ol class="space-y-2">
                        @foreach ($users as $user)
                            <li class="flex justify-between rounded shadow bg-gray-50 ">
                                <div>{{ $user->name }}</div>
                                <div>
                                    <button disabled="disabled">show</button>
                                    <button disabled="disabled">edit</button>
                                    <button disabled="disabled">delete</button>
                                </div>
                            </li>
                        @endforeach
                    </ol>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
