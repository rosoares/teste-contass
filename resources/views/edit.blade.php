@extends('layouts.app')

@section('titulo', 'Nova')

@section('conteudo')

    <div class="row">
        <div class="col-md-4">
            <label>Descrição</label>
            <input id="descricao" type="text" name="descricao" class="form-control" value="{{$tarefa->descricao}}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label>Data</label>
            <input id="data" type="date" name="data" class="form-control" value="{{$tarefa->data}}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label>Usuário</label>
            <input id="usuario" type="text" name="usuario" class="form-control" value="{{$tarefa->usuario}}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-success" onclick="atualizarTarefa()">Atualizar</button>
        </div>
    </div>

    <!-- Passando csrf token obrigatório para requisições post do Laravel -->
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <!-- Passando id da Tarefa para o AJAX -->
    <input type="hidden" name="id" id="id" value="{{ $tarefa->id }}">
@endsection