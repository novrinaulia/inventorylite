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
                    @if (Auth::user()->isAdmin())
                        <h1>Welcome Admin {{ Auth::user()->name }}!</h1>
                        <p>You have full access to the inventory management system.</p>
                    @else
                        <h1>Welcome Staff {{ Auth::user()->name }}!</h1>
                        <p>You have limited access to the inventory management system.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
