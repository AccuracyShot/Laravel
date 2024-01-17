<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    @auth
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    @endauth
    <ul class="series-list">
        @foreach ($series as $serie)
        <div class="series-item">
            <li class="series-content">
                <img src="{{ asset('storage/' . $serie->cover) }}" class="series-thumbnail" alt="Thumbnail da capa">
                @auth <a href="{{ route('seasons.index', $serie->id) }}" class="series-link"> @endauth
                    <h2 class="series-title">{{ $serie->nome }}</h2>
                @auth </a> @endauth
                @auth
                <span class="d-flex series-actions">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-edit"></a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-delete">
                            
                        </button>
                    </form>
                </span>
                @endauth
            </li>
        </div>
        @endforeach
    </ul>
</x-layout>
