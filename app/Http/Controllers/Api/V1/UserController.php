<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
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
            'message' => 'exibe todos os usuarios com sucesso'
        ]);
    }


    // Cria
    public function store(Request $request)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'Usuario criado com sucesso'
        ]);
    }

    // Exibi
    public function show($id)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'rota para exibição do usuario'
        ]);
    }

    // Edita
    public function update(Request $request)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'rota para edição do usuario'
        ]);
    }

    // Deleta
    public function destroy($id)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'rota para exclusão do usuario'
        ]);
    }

    public function taskIndex()
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'Exibir todas as tarefas do usuario'
        ]);
    }

    public function taskShow($id)
    {
        return response()->json([
            'erro' => false,
            'status' => 200,
            'message' => 'Exibir uma tarefas do usuario'
        ]);
    }
}
