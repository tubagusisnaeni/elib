<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-xl font-bold">{{ $book->title }}</h5>
                            <p class="card-text"><strong>Pengarang:</strong> {{ $book->author }}</p>
                            <p class="card-text"><strong>Kategori:</strong> {{ $book->category }}</p>
                        </div>
                    </div>
                    <a href="{{ route('books.index') }}" type="button"
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali
                        ke Katalog</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
