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
                    {{ __('Welcome to my Website') }}
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center mb-5 text-lg">List of Table</h1>
                    @if (session()->has('success'))
                        <div id="flashMessage"
                            class="bg-green-500/35 border-2 border-green-600 rounded-lg my-3 text-center py-5 w-full"
                            role="alert">
                            {{ session('success') }}
                            <button type="button" class="close text-xl text-right" data-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const closeButton = document.querySelector('#flashMessage .close');
                                if (closeButton) {
                                    closeButton.addEventListener('click', function() {
                                        document.getElementById('flashMessage').style.display = 'none';
                                    });
                                }
                            });
                        </script>
                    @endif
                    <div class="overflow-x-auto">
                        @if (count($posts) > 0)
                            <table class="min-w-full border border-gray-300 divide-y divide-gray-300">
                                <thead>
                                    <tr class="text-black">
                                        <th class="py-2 px-4 bg-gray-100 border-b">ID</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Name</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Description</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr class="text-center">
                                            <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                                            <td class="py-2 px-4 border-b">{{ $post->name }}</td>
                                            <td class="py-2 px-4 border-b">{{ $post->description }}</td>
                                            <td class=" flex gap-2 py-2 px-4 border-b">
                                                <button class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
                                                <form action="/posts/{{ $post->id }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button onclick="return confirm('Are you sure?')"
                                                        class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-center mt-4">Data is empty.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
