@extends('layouts.app')

@section('titulo', 'Nova')

@section('conteudo')

    <div class="row">
        <div class="col-md-4">
            <label>Descrição</label>
            <input id="descricao" type="text" name="descricao" class="form-control">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label>Data</label>
            <input id="data" type="date" name="data" class="form-control">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label>Usuário</label>
            <input id="usuario" type="text" name="usuario" class="form-control">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-success" onclick="cadastrarTarefa()">Cadastrar</button>
        </div>
    </div>

    <!-- Passando csrf token obrigatório para requisições post do Laravel -->
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
@endsection