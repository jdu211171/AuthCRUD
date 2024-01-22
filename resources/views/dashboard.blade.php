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
                    {{--{{ __("You're logged in!") }}--}}

                    {{--GPT--}}

                    <table class="table-auto border-collapse border border-gray-800 bg-gray-900 w-full">
                        <thead>
                        <tr>
                            <th class="border border-gray-600 px-4 py-2 text-gray-50">Name</th>
                            <th class="border border-gray-600 px-4 py-2 text-gray-50">Email</th>
                            <th class="border border-gray-600 px-4 py-2 text-gray-50">Role</th>
                            <th class="border border-gray-600 px-4 py-2 text-gray-50">Actions</th>
                        </tr>
                        </thead>
                        @php
                            $users = [
                                (object)['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com', 'role' => 'Admin'],
                                (object)['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'role' => 'User'],
                            ];
                        @endphp
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border border-gray-600 px-4 py-2 text-gray-200">{{ $user->name }}</td>
                                <td class="border border-gray-600 px-4 py-2 text-gray-200">{{ $user->email }}</td>
                                <td class="border border-gray-600 px-4 py-2 text-gray-200">{{ $user->role }}</td>
                                <td class="border border-gray-600 px-4 py-2 text-gray-200">
                                    <a href="#"
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <a href="#"
                                       class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"><i
                                            class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{--GPT--}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
