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

                    <div class="bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg shadow-md p-6 mb-4">
                        <h3 class="text-xl font-semibold text-white mb-2">Welcome to Your Dashboard!</h3>
                        <p class="text-gray-100">Congratulations! You're now logged in.</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-blue-500 rounded-lg shadow-md p-4">
                            <h4 class="text-lg font-semibold text-white mb-2">Recent Activity</h4>
                            <p class="text-gray-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <div class="bg-purple-500 rounded-lg shadow-md p-4">
                            <h4 class="text-lg font-semibold text-white mb-2">Notifications</h4>
                            <p class="text-gray-100">You have 3 new notifications.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
