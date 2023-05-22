<?php
    $errors = [];

    $message = [];

    if ($exception) {
        
        $message = [
            'type' => 'error',
            'message' => $exception->getMessage()
        ];
        
        if (get_class($exception) === 'ValidationException') {
            $errors = $exception->getErrors();
        }

    }

    $alertType = isset($message['type']) && $message['type'] === 'error' 
        ? 'danger' 
        : 'success';
?>

<?php if($message): ?>
    <div class="my-3 alert alert-<?=$alertType?> text-center" role="alert">
        <?= $message['message']?>
    </div>
<?php endif ?>