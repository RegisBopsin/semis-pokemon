@extends('layouts.base')

@section('content')
<div class="flex flex-wrap justify-center mt-10">
    @foreach($pokemon as $entity)
    <div class="p-4 max-w-sm">
        <div class="flex rounded-lg h-full bg-teal-400 p-8 flex-col">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset($entity->image) }}" alt="{{ $entity->name }}"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900"> {{ $entity->name }}</h5>
            <span class="text-sm text-gray-500">{{ $entity->type }}</span>
            <span class="text-sm text-gray-500">{{ $entity->power }}</span>
            <span class="text-sm text-gray-500">{{ $entity->coach->name }}</span>
            <div class="flex mt-4 md:mt-6">
                <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Editar</a>
                <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100" type="submit">Deletar</button>
            </div>
        </div>
    </div>
    @endforeach   
</div>
@endsection
