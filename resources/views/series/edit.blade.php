<x-layout title="Editar Série '{!! $serie->nome !!}'">
    <form action="{{ route('series.update', $serie->id) }}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
    
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-2/3 px-2 mb-4 md:mb-0">
                <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                <input type="text"
                       autofocus
                       id="nome"
                       name="nome"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       value="{{ $serie->nome }}">
            </div>
        </div>
    
        <div class="flex flex-wrap -mx-2">
            <div class="w-full px-2">
                <label for="cover" class="block text-gray-700 text-sm font-bold mb-2">Capa:</label>
                <input type="file"
                       id="cover"
                       name="cover"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-3"
                       accept="image/gif, image/jpeg, image/png">
            </div>
        </div>
    
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Atualizar</button>
    </form>
</x-layout>
