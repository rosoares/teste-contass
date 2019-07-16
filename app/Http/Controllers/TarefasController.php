<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefas;

class TarefasController extends Controller
{
    public function index(){

        //Recupera dados do banco através do model Tarefas usando Eloquent e passa para a view
        $tarefas = Tarefas::all();
        return view('index', ['tarefas' => $tarefas]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        //Cria um novo objeto do tipo Tarefa e seta os atributos
        $tarefa = new Tarefas();
        $tarefa->descricao = $request->descricao;
        $tarefa->data = $request->data;
        $tarefa->usuario = $request->usuario;

        //Se for inserido no banco retorna sucesso para o AJAX
        if ($tarefa->save()){
            return response("Tarefa Cadastrada !!!", 200);
        }
    }

    public function edit($id){
        //Recupera a tarefa do banco pelo id passado na URL
        $tarefa = Tarefas::find($id);
        return view('edit', ['tarefa' => $tarefa]);
    }

    public function update(Request $request){
        //Recupera a tarefa do banco pelo id passado no formulário
        $tarefa = Tarefas::find($request->id);
        $tarefa->descricao = $request->descricao;
        $tarefa->data = $request->data;
        $tarefa->usuario = $request->usuario;
        //Se for inserido no banco retorna sucesso para o AJAX
        if ($tarefa->save()){
            return response("Tarefa Atualizada !!!", 200);
        }
    }

    public function destroy(Request $request){
        //Chama o método destroy do model Tarefas e retorna para a view de listagem
        Tarefas::destroy($request->id);
        return response("Tarefa Deletada !!!", 200);
    }
}
