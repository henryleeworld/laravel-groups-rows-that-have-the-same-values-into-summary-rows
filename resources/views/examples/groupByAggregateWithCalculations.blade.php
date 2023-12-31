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
                    <table class="table-auto w-full">
                        <thead class="bg-gray-100 border border-gray-200">
                        <tr>
                            <th class="px-4 py-2">{{ __('Name') }}</th>
                            <th class="px-4 py-2">{{ __('Stock Quantity') }}</th>
                            <th class="px-4 py-2">{{ __('Total Products Moved') }}</th>
                            <th class="px-4 py-2">{{ __('Products Sold') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="border px-4 py-2">{{ $product->name }}</td>
                                <td class="border px-4 py-2">{{ $product->stock_quantity }}</td>
                                <td class="border px-4 py-2">{{ $product->total_quantity }}</td>
                                <td class="border px-4 py-2">{{ $product->total_quantity - $product->stock_quantity }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
