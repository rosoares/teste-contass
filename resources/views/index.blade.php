@extends('layouts.app')

@section('titulo', 'Lista')

@section('conteudo')
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tarefa</th>
                    <th>Data</th>
                    <th>Usuario</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $tarefa)
                    <tr>
                        <td>{{$tarefa->id}}</td>
                        <td>{{$tarefa->descricao}}</td>
                        <td>{{date_format(date_create($tarefa->data), 'd/m/Y')}}</td>
                        <td>{{$tarefa->usuario}}</td>
                        <td>
                            <a class="btn btn-primary" href="editartarefa/{{$tarefa->id}}"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-danger" onclick='apagarTarefa("{{$tarefa->id}}", "{{csrf_token()}}")'><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a class="btn btn-success" href="{{route('novatarefa')}}">Nova Tarefa</a>
    </div>
@endsection