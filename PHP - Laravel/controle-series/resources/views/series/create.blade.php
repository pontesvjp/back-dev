<x-layout title="Nova Série">
    <form method="post" action="{{ route('series.store') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label class="form-label" for="nome">Nome:</label>
                <input autofocus type="text" name="nome" class="form-control" id="nome" value="{{ old('nome') }}" />
            </div>

            <div class="col-2">
                <label class="form-label" for="seasonsQty">N° Temporadas:</label>
                <input type="text" name="seasonsQty" class="form-control" id="seasonsQty" value="{{ old('seasonsQty') }}" />
            </div>

            <div class="col-2">
                <label class="form-label" for="episodesPerSeason">Eps / Temporadas:</label>
                <input type="text" name="episodesPerSeason" class="form-control" id="episodesPerSeason" value="{{ old('episodesPerSeason') }}" />
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Adcionar</button>
    </form>

</x-layout>