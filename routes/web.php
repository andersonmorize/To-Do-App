<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Grupo de rotas da API
$router->group(['namespace' => 'Api', 'prefix' => 'api'], function() use($router)
{
    $router->get('/', function() {
        return url() . '/api';
    });

    // Grupo de rotas da versão 1
    $router->group(['namespace' => 'V1', 'prefix' => 'v1'], function() use($router)
    {
        $router->get('/', function() {
            return url() . '/api/v1';
        });

        // Grupo de rotas do usuario
        $router->group(['prefix' => 'user'], function() use($router)
        {
            $router->get('/', [
                'as' => 'user.index', 'uses' => 'UserController@index'
            ]);

            // rota para criar usuario
            $router->post('/', [
                'as' => 'user.store', 'uses' => 'UserController@store'
            ]);

            // rota para exibir usuario
            $router->get('{userId}', [
                'as' => 'user.show', 'uses' => 'UserController@show'
            ]);

            // rota para editar usuario
            $router->put('{userId}', [
                'as' => 'user.update', 'uses' => 'UserController@update'
            ]);

            // rota para excluir usuario
            $router->delete('{userId}', [
                'as' => 'user.destroy', 'uses' => 'UserController@destroy'
            ]);

            // rota para exibir tarefas do usuario
            $router->get('{userId}/task', [
                'as' => 'user.task.index', 'uses' => 'UserController@taskIndex'
            ]);

            // rota para exibir uma tarefa do usuario
            $router->get('{userId}/task/{taskId}', [
                'as' => 'user.task.show', 'uses' => 'UserController@taskShow'
            ]);
        });

        // Grupo de rotas das tarefas
        $router->group(['prefix' => 'task'], function() use($router)
        {
            $router->get('/', [
                'as' => 'task.index', 'uses' => 'TaskController@index'
            ]);

            // rota para criar tarefa
            $router->post('/', [
                'as' => 'task.store', 'uses' => 'TaskController@store'
            ]);

            // rota para exibir tarefa
            $router->get('{id}', [
                'as' => 'task.show', 'uses' => 'TaskController@show'
            ]);

            // rota para editar tarefa
            $router->put('{id}', [
                'as' => 'task.update', 'uses' => 'TaskController@update'
            ]);

            // rota para excluir tarefa
            $router->delete('{id}', [
                'as' => 'task.destroy', 'uses' => 'TaskController@destroy'
            ]);
        });
    });


    // Using The "App\Http\Controllers\Admin" Namespace...

    $router->group(['namespace' => 'User'], function() use ($router) {
        // Using The "App\Http\Controllers\Admin\User" Namespace...
    });
});
