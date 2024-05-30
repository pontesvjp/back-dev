<x-layout title="Nova Série">
    <form method="post" action="/series/salvar">
        @csrf
        <div class="mb-3">
        <label class=" form-label"for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" id="nome" />
    </div>
    <button type="submit" class="btn btn-dark">Adcionar</button> </form>
</x-layout>
