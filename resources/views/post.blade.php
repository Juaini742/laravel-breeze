<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-bold mb-5">Add new post</h1>
                    <form action="{{ route('posts.store') }}" method="POST" class="flex flex-col gap-4">
                        @csrf
                        <div class="">
                            <label for="name" class="block">Name</label>
                            <input type="text" id="name" name="name" class="w-full rounded-md h-9 text-black">
                        </div>
                        <div class="">
                            <label for="description" class="block">Description</label>
                            <textarea id="description" name="description" class="w-full rounded-md text-black"></textarea>
                        </div>
                       <div class="">
                        <button type="submit" class="bg-indigo-600 py-2 px-5 rounded-md hover:bg-indigo-800 hover:transition-all duration-300">Submit</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
