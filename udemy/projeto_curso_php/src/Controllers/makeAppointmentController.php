<?php
session_start();
requireValidSession();

loadModel('WorkingHours');

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));


try {
    $currentTime = (string) date("H:i:s");

    if (isset($_POST['forcedTime'])) {
        $currentTime = $_POST['forcedTime'];
    }

    $records->makeAppointment($currentTime);
    addSucessMessage('Ponto Inserido com Sucesso');

} catch (AppException $e) {
    addErrorMessage($e->getMessage());
}

header('Location: dayRecordsController.php');