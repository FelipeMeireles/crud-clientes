@csrf

<div class="row">
    <div class="col-md-6 mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control"
            value="{{ old('nome', $cliente->nome ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control"
            value="{{ old('data_nascimento', $cliente->data_nascimento ?? '') }}">
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <label>CEP</label>
        <input type="text" id="cep" name="cep" class="form-control"
            value="{{ old('cep', $cliente->cep ?? '') }}">
    </div>

    <div class="col-md-8 mb-3">
        <label>Endereço</label>
        <input type="text" id="endereco" name="endereco" class="form-control"
            value="{{ old('endereco', $cliente->endereco ?? '') }}">
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <label>Número</label>
        <input type="text" name="numero" class="form-control"
            value="{{ old('numero', $cliente->numero ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>Bairro</label>
        <input type="text" id="bairro" name="bairro" class="form-control"
            value="{{ old('bairro', $cliente->bairro ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>Cidade</label>
        <input type="text" id="cidade" name="cidade" class="form-control"
            value="{{ old('cidade', $cliente->cidade ?? '') }}">
    </div>
</div>

<div class="row">
    <div class="col-md-2 mb-3">
        <label>UF</label>
        <input type="text" id="uf" name="uf" class="form-control"
            value="{{ old('uf', $cliente->uf ?? '') }}">
    </div>
</div>

<button type="submit" class="btn btn-success">
    Salvar
</button>