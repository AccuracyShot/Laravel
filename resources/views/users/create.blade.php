<x-layout title="Novo Usuário">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input id="name"
                   name="name"
                   type="text"
                   required
                   class="form-control" />
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email"
                   name="email"
                   type="email"
                   required
                   class="form-control" />
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password"
                   name="password"
                   type="password"
                   required
                   class="form-control" />
        </div>

        <button class="btn btn-primary mt-2 mb-2">Registrar</button>
    </form>
</x-layout>