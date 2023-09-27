<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul class="list-disc list-inside">
                        <li>
                            <a class="hover:underline" href="{{ route('group-by') }}">{{ __('Group By Example') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-aggregate') }}">{{ __('Group By Aggregate Example') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-aggregate-functions') }}">{{ __('Group By Aggregate Functions Example') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-aggregate-with-calculations') }}">{{ __('Group By Aggregate With Calculations Example') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-related-column') }}">{{ __('Group By Related Column - DB Raw') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-related-column-eloquent') }}">{{ __('Group By Related Column - Eloquent') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-and-order-related-column-eloquent') }}">{{ __('Group By and Order By Related Column - Eloquent') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-raw-day-with-eloquent') }}">{{ __('Group By Raw Day - Eloquent') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-raw-month-with-eloquent') }}">{{ __('Group By Raw Month - Eloquent') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-multiple-columns-eloquent') }}">{{ __('Group By Multiple Columns - Eloquent') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-multiple-columns-builder') }}">{{ __('Group By Multiple Columns - Builder') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('group-by-multiple-columns-error') }}">{{ __('Group By Multiple Columns Error - Eloquent') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('questions-list-groupped-by-topic') }}">{{ __('Questions groupped by Topic') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('topics-by-name') }}">{{ __('Topics By Name') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('users-by-age') }}">{{ __('Users by Age') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('orders-dashboard') }}">{{ __('Orders Dashboard') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('active-and-inactive-users') }}">{{ __('Active and inactive users count') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('employee-timesheet-report') }}">{{ __('Employee Timesheet Report') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('orders-by-week-collection') }}">{{ __('Orders grouped by week - collection') }}</a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ route('order-reports') }}">{{ __('Order Reports - Collections and Database') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
