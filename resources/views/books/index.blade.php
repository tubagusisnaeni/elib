<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Katalog Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($books as $book)
                            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                                <div class="p-4">
                                    <img src="{{ $book->image_url }}" alt="Cover buku {{ $book->title }}" class="w-full h-48 object-cover mb-4 rounded-lg">
                                    <h5 class="text-lg font-bold text-gray-800 dark:text-gray-200">{{ $book->title }}
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400">{{ $book->author }}</p>
                                    <p class="text-gray-600 dark:text-gray-400">Kategori: {{ $book->category }}</p>
                                    <br>
                                    <a href="{{ route('books.show', $book->id) }}" type="button"
                                        class=" justify-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
