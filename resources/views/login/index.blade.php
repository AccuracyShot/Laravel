<x-layout title="Login">
    <form method="post">
        @csrf
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

        <button class="btn btn-primary mt-2 mb-2">Entrar</button>

        <a class="btn btn-secondary" href=" {{ route('users.create')}} ">Cadastrar-se</a>
    </form>
</x-layout>