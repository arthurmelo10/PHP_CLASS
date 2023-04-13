<?php

class ValidationException extends AppException
{
    
    private array $errors = [];
    
    public function __construct(
        array $errors = [],
        string $message = 'Erros de validação', 
        $code = 0, 
        $previous = null
    )
    {
        parent::__construct($message, $code, $previous);

        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function get($attribute)
    {
        return $this->errors[$attribute];
    }
}