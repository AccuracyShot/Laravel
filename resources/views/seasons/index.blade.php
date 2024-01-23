<x-layout title="Temporadas de {!! $series->nome !!}">
    <div class="flex justify-center">
        <img src="{{ asset('storage/' . $series->cover) }}"
        class="h-72 max-w-lg rounded-lg"
        alt="Capa da série">
    </div>
    <ul class="divide-y divide-gray-200">
        @foreach ($seasons as $season)
            <li class="flex justify-between items-center py-4">
                <a href="{{ route('episodes.index', $season->id) }}"
                   class="text-lg font-medium text-blue-600 hover:text-blue-800">
                    Temporada {{ $season->number }}
                </a>

                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                    {{ $season->numberOfWatchedEpisodes() }} / {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>