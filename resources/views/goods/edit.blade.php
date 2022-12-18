<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('goods.save', ['id' => $cake->id]) }}" method="post">
                        {{ csrf_field() }}
                        <table class="">
                            <tr>
                                <th class="text-left px-2 py-4">Название</th>
                                <td class="px-2 py-4">
                                    <i>{{ $cake->name }}</i>
                                </td>
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="name" value="{{ $cake->name }}" required>
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </td>
                            </tr> 
                            <tr>
                                <th class="text-left px-2 py-4">Цена</th>
                                <td class="px-2 py-4">
                                    <i>{{ $cake->price }}</i>
                                </td>
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="price" value="{{ $cake->price }}" required>
                                    @if ($errors->has('price'))
                                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </td>
                            </tr> 
                            <tr>
                                <th class="text-left px-2 py-4">Артикул</th> 
                                <td class="px-2 py-4">
                                    <i>{{ $cake->article }}</i>
                                </td>
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="article" value="{{ $cake->article }}" required>
                                    @if ($errors->has('article'))
                                        <div class="alert alert-danger">{{ $errors->first('article') }}</div>
                                    @endif
                                </td>
                            </tr> 
                            <tr>
                                <th class="text-left px-2 py-4">Описание</th> 
                                <td class="bg-blue-100 text-left px-2 py-4" colspan="2">
                                    <textarea rows="10" cols="45" name="text" required>{{ $cake->text }}</textarea> 
                                    @if ($errors->has('text'))
                                        <div class="alert alert-danger">{{ $errors->first('text') }}</div>
                                    @endif
                                </td>
                            </tr> 
                        </table>
                        <div class="py-6 border-t flex justify-end items-center"> 
                            <button class="rounded-md bg-gray-100 px-4 py-1 border" type="submit" value="сохранить">сохранить изменения</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
