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
                    <form action="{{ route('books.save', ['id' => $book->id]) }}" method="post">
                        {{ csrf_field() }}
                        <table class="">
                            <tr>
                                <th class="bg-blue-100 text-left px-2 py-4">Name</th>
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <i>{{ $book->name }}</i>
                                </td>
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="name" value="{{ $book->name }}">
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </td>
                            </tr> 
                            <tr>
                                <th class="px-2 py-4">Price</th>
                                <td class="px-2 py-4">
                                    <i>{{ $book->price }}</i>
                                </td>
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="price" value="{{ $book->price }}">
                                    @if ($errors->has('price'))
                                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </td>
                            </tr> 
                        </table>
                        <input type="submit" value="сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
