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
                            <th class="px-4 py-2">{{ __('Month') }}</th>
                            <th class="px-4 py-2">{{ __('Product') }}</th>
                            <th class="px-4 py-2">{{ __('Total') }}</th>
                            <!--<th class="px-4 py-2">{{ __('Total Items') }}</th>-->
                            <th class="px-4 py-2">{{ __('Total Orders') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $order)
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="border px-4 py-2">{{ $order->month }}</td>
                                <td class="border px-4 py-2">{{ $order->product_name }}</td>
                                <td class="border px-4 py-2">${{ number_format($order->order_total, 2) }}</td>
                                <!--<td class="border px-4 py-2">{{ $order->products->sum('pivot_quantity') }}</td>-->
                                <td class="border px-4 py-2">{{ $order->total_orders }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
