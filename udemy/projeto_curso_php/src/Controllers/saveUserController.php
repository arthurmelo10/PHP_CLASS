<?php
session_start();
requireValidSession(true);
$exception = null;
$userData = [];

if (count($_POST) === 0 && isset($_GET['update'])) {
    $user = User::getOne([
        'id' => $_GET['update']
    ]);

    $userData = $user->getValues();
    $userData['password'] = null;
}

if (count($_POST) > 0) {
    try {
        
        if($_POST['id']) {
            $alteredUser = new User($_POST);
            $alteredUser->update();
            addSucessMessage('Usuário alterado com sucesso !');
            header('Location: userController.php');
            exit();
        }

        unset($_POST['id']);
        $newUser = new User($_POST);
        $newUser->insert();
        addSucessMessage('Usuário cadastrado com sucesso !');
        $_POST = [];
        
    } catch (Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
}

loadTemplateView('saveUserView', $userData + [
    'exception' => $exception
]);