<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Список изделий') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-between items-center">
                    <strong>Торты</strong>  
                    <a class="rounded-md px-4 py-1 border" href="{{ route('goods.create'); }}" alt="добавить">+</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mx-auto" style="width: 100%">
                            <tr> 
                                <th>article</th>
                                <th>name</th>
                                <th>description</th>
                                <th>price</th> 
                                <th>
                                    actions
                                </th>
                            </tr>
                        @foreach ($goods as $good)
                            <tr> 
                                <td> 
                                    <span class="text-gray-300 ">
                                        wd-000{{ $good->article }}
                                    </span>
                                </td>
                                <td>{{ $good->name }}</td>
                                <td>{{ $good->text }}</td>
                                <td>{{ $good->price }}</td> 
                                <td>
                                    <a href="{{ route('goods.edit', ['cake' => $good]) }}">edit</a>
                                    <a href="{{ route('goods.delete', ['id' => $good->id]) }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center items-center">
                    {{ $goods->Links() }}
                </div>
                <style>
                     [aria-current="page"] .bg-white {
                        background-color: whitesmoke;
                     }
                </style>
            </div>
        </div>
    </div>
</x-app-layout>
