<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto w-full mt-4">
                        <thead class="bg-gray-100 border border-gray-200">
                        <tr>
                            <th class="px-4 py-2">{{ __('Employee') }}</th>
                            <th class="px-4 py-2">{{ __('Entries') }}</th>
                            <th class="px-4 py-2">{{ __('Total Time') }}</th>
                            <th class="px-4 py-2">{{ __('Earliest Date') }}</th>
                            <th class="px-4 py-2">{{ __('Latest Date') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($timesheet as $entry)
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="border px-4 py-2">{{ $entry->employee->name }}</td>
                                <td class="border px-4 py-2">{{ $entry->total_days }}</td>
                                <td class="border px-4 py-2">{{ $entry->total_hours }}</td>
                                <td class="border px-4 py-2">{{ $entry->min_start }}</td>
                                <td class="border px-4 py-2">{{ $entry->max_end }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
