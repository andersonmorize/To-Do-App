<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Exibe todos
    public function index()
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'exibe todas as tarefas com sucesso'
        ]);
    }


    // Cria
    public function store(Request $request)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'tarefa criada com sucesso'
        ]);
    }

    // Exibi
    public function show($id)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'rota para exibição da tarefa'
        ]);
    }

    // Edita
    public function update(Request $request)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'rota para edição da tarefa'
        ]);
    }

    // Deleta
    public function destroy($id)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'rota para exclusão da tarefa'
        ]);
    }
}
