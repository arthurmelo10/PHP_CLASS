<?php
/**
 * Listar usuários
 */
session_start();
requireValidSession();
$exception = null;
$users = User::get();

if (isset($_GET['delete'])) {
    
    try {
        
        User::deleteById($_GET['delete']);
        addSucessMessage('Usuário excluído com sucesso');

    } catch (Exception $e) {

        if (stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMessage('Não é possível excluir o usuário com registro de pontos');
        }

        $exception = $e;
    }
}


foreach ($users as $user) {
    $user->start_date = (new DateTime($user->start_date))->format('d/m/Y');
    if ($user->end_date) {
        $user->end_date = (new DateTime($user->end_date))->format('d/m/Y');
    }
}

loadTemplateView('userView',[
    'users' => $users,
    'exception' => $exception,
]);