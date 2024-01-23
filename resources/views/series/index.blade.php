<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    @auth
    <a href="{{ route('series.create') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar</a>
    @endauth
    <ul class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($series as $serie)
        <div class="border rounded-lg p-4 shadow">
            <li class="series-content">
                <img src="{{ asset('storage/' . $serie->cover) }}"
                class="series-thumbnail w-full h-64 object-cover object-center rounded-md" 
                alt="Thumbnail da capa">
                @auth <a href="{{ route('seasons.index', $serie->id) }}" class="series-link text-blue-500 hover:text-blue-700"> @endauth
                    <h2 class="series-title text-2xl mt-2">{{ $serie->nome }}</h2>
                @auth </a> @endauth
                @auth
                <span class="flex series-actions mt-4">
                    <a href="{{ route('series.edit', $serie->id) }}"
                        class="fas fa-edit btn btn-edit bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        
                    </a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="fas fa-trash btn btn-delete bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            
                        </button>
                    </form>
                </span>
                @endauth
            </li>
        </div>
        @endforeach
    </ul>
</x-layout>
