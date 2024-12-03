@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('coaches') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div>
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Imagem</label>
        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Criar treinador</button>
    </form>
@endsection


