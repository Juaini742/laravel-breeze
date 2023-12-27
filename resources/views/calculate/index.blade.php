<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Calculate') }}
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
                    <div class="mb-5">
                        <a href='/calculate/create' class="btn-primary py-3 px-5">Update Tables</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 divide-y divide-gray-300">
                            <thead>
                                <tr class="text-black">
                                    <th class="py-2 px-4 bg-gray-100 border-b">ID</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b">Name</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b">Present</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b">Behav</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b">Rules</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b">Total</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b">Description</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($user as $item) --}}
                                @foreach ($calculates as $calculate)
                                    <tr class="text-center">
                                        <td class="py-2 px-4 border-b">1</td>
                                        {{-- <td class="py-2 px-4 border-b">{{ $item->name }}</td> --}}
                                        <td class="py-2 px-4 border-b">{{ $calculate->nama }}</td>
                                        <td class="py-2 px-4 border-b">{{ $calculate->kehadiran }}</td>
                                        <td class="py-2 px-4 border-b">{{ $calculate->kelakuan }}</td>
                                        <td class="py-2 px-4 border-b">{{ $calculate->disiplin }}</td>
                                        <td class="py-2 px-4 border-b">{{ $calculate->total }}</td>
                                        <td class="py-2 px-4 border-b">{{ $calculate->description }}</td>
                                        <td class=" flex gap-2 py-2 px-4 border-b">
                                            <button class="btn-warning py-2 px-5">Edit</button>
                                            <form action="" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('Are you sure?')"
                                                    class="btn-danger px-4 py-2 ">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
