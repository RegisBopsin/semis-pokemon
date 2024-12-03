@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="mb-5">
        <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Tipo</label>
        <input type="text" name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="mb-5">
        <label for="power" class="block mb-2 text-sm font-medium text-gray-900">Força</label>
        <input type="text" name="power" id="power" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div>
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Imagem</label>
        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <br>
    <div class="mb-5">
    <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900">Treinador</label>
    <select name="coach_id" id="coach_id" required>
        @foreach ($coaches as $coach)
        <option value="{{ $coach->id }}">{{ $coach->name }}</option>
        
        @endforeach
    </select>
    </div>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Criar Pokemon</button>
    </form>
@endsection


