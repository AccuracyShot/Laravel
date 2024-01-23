<x-layout title="Episódios" :mensagem-sucesso="$mensagemSucesso">
    <form method="post" class="space-y-4">
        @csrf
        <ul class="divide-y divide-gray-200">
            @foreach ($episodes as $episode)
                <li class="flex col-span-3 justify-start">
                    <span class="text-lg font-medium mb-4">Episódio {{ $episode->number }}</span>

                    <input type="checkbox"
                           name="episodes[]"
                           value="{{ $episode->id }}"
                           @if ($episode->watched) checked @endif 
                           class="ml-4 mt-1 form-checkbox h-5 w-5 text-blue-600"/>
                </li>
            @endforeach
        </ul>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
    </form>
</x-layout>