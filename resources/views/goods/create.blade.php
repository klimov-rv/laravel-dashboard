<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавить') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('goods.add') }}" method="post">
                        {{ csrf_field() }}
                        <table class="">
                            <tr>
                                <th class="bg-blue-100 text-left px-2 py-4">Name</th> 
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="name" value=" ">
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </td>
                            </tr> 
                            <tr>
                                <th class="px-2 py-4">Price</th> 
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="price" value=" ">
                                    @if ($errors->has('price'))
                                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </td>
                            </tr> 
                            <tr>
                                <th class="px-2 py-4">Article</th> 
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <input type="text" name="article" value=" ">
                                    @if ($errors->has('article'))
                                        <div class="alert alert-danger">{{ $errors->first('article') }}</div>
                                    @endif
                                </td>
                            </tr> 
                            <tr>
                                <th class="px-2 py-4">Description</th> 
                                <td class="bg-blue-100 text-left px-2 py-4">
                                    <textarea rows="10" cols="45" name="text"></textarea> 
                                    @if ($errors->has('text'))
                                        <div class="alert alert-danger">{{ $errors->first('text') }}</div>
                                    @endif
                                </td>
                            </tr> 
                        </table>
                        <div class="p-6 border-t flex justify-end items-center"> 
                            <button class="rounded-md  bg-gray-100 px-4 py-1 border" type="submit" value="сохранить">сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
