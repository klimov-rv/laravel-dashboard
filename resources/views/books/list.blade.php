<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Books

                    <a class="btn border" href="{{ route('books.create'); }}" alt="добавить">+ add</a>

                    <table class="mx-auto" style="width: 100%">
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->price }}</td>
                                <td> </td>
                                <td>
                                    <a href="{{ route('books.edit', ['book' => $book]) }}">edit</a>
                                    <a href="{{ route('books.delete', ['id' => $book->id]) }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
