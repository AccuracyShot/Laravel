<x-layout title="Editar Série '{!! $serie->nome !!}'">
    <form action="{{ route('series.update', $serie->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       autofocus
                       id="nome"
                       name="nome"
                       class="form-control"
                       value="{{ $serie->nome }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="cover" class="form-label">Capa</label>
                <input type="file"
                       id="cover"
                       name="cover"
                       class="form-control"
                       accept="image/gif, image/jpeg, image/png">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>    
</x-layout>
