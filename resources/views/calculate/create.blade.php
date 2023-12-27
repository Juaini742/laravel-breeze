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
                    <div class="max-w-screen-md mx-auto p-4">
                        <form action="/calculate" method="POST">
                            @csrf
                            <div class="grid grid-cols-6 gap-4">
                                <!-- Header -->
                                <div class="col-span-1">
                                    <label class="font-bold">No</label>
                                </div>
                                <div class="col-span-2">
                                    <label class="font-bold">Nama</label>
                                </div>
                                <div class="col-span-1">
                                    <label class="font-bold">Present</label>
                                </div>
                                <div class="col-span-1">
                                    <label class="font-bold">Behav</label>
                                </div>
                                <div class="col-span-1">
                                    <label class="font-bold">Rules</label>
                                </div>

                                {{-- @for ($i = 1; $i <= 4; $i++) --}}
                                <div class="col-span-1">
                                    <input type="text" value="1" class="w-full py-2 border rounded text-black">
                                </div>
                                <div class="col-span-2">
                                    <input type="text" name="nama" class="w-full py-2 border rounded text-black">
                                </div>
                                <div class="col-span-1">
                                    <input type="number" step="any" name="kehadiran"
                                        class="w-full p-2 border rounded text-black">
                                </div>
                                <div class="col-span-1">
                                    <input type="number" step="any" name="kelakuan"
                                        class="w-full p-2 border rounded text-black">
                                </div>
                                <div class="col-span-1">
                                    <input type="number" step="any" name="disiplin"
                                        class="w-full p-2 border rounded text-black">
                                </div>
                                {{-- <div class="col-span-1">
                                    <input type="number" step="any" name="total"
                                        class="w-full p-2 border rounded text-black">
                                </div> --}}
                                {{-- <div class="col-span-1">
                                    <input type="text" name="description"
                                        class="w-full p-2 border rounded text-black">
                                </div> --}}
                                {{-- @endfor --}}
                            </div>
                            <div class="mt-8">
                                <button type="submit" class="btn-primary py-2 px-5">Save Data</button>
                                <a href="/calculate" class="btn-outline-primary ml-3 py-2 px-5">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
