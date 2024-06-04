<form method="post" action="{{ $action }}">
    @csrf @isset($update) @method('PUT') @endif
    <div class="mb-3">
        <label class="form-label" for="nome">Nome:</label>
        <input
            type="text"
            name="nome"
            class="form-control"
            id="nome"
            @isset($nome)value="{{ $nome }}"
            @endisset
        />
    </div>
    <button type="submit" class="btn btn-dark">Adcionar</button>
</form>
