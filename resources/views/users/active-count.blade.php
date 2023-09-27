<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl">{{ __('Users count by Status') }}</h2>

                    <table class="table-auto w-full">
                        <thead class="bg-gray-100 border border-gray-200">
                        <tr>
                            <th class="px-4 py-2">{{ __('Status') }}</th>
                            <th class="px-4 py-2">{{ __('Count') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="border px-4 py-2">{{ __('Active') }}</td>
                                <td class="border px-4 py-2">{{ $statusCount['1']->count }}</td>
                            </tr>
                            <tr class="bg-slate-50">
                                <td class="border px-4 py-2">{{ __('Inactive') }}</td>
                                <td class="border px-4 py-2">{{ $statusCount['0']->count }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
