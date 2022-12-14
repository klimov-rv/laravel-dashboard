<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Сводная панель') }}
        </h2>
    </x-slot> 
    
    <div class="pt-8">
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
                                <td>wd-100{{ $good->article }}</td>
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
                <a href="{{ route('cakes') }}" class="p-6 bg-white border-b border-gray-200 flex justify-center items-center">
                    Весь список
                </a>
            </div>
        </div>
    </div>
    <div class="pt-6">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-between">
                    Торты

                    <a class="btn border" href="{{ route('goods.create'); }}" alt="добавить">+ add</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mx-auto" style="width: 100%">
                        @foreach ($goods as $good)
                            <tr>
                                <td>{{ $good->id }}</td>
                                <td>wd-00030110{{ $good->article }}</td>
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
            </div>
        </div> --}}
    </div>
    
    <div class="pt-6">
    </div>
</x-app-layout>
