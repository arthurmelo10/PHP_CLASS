<?php
loadModel('User');

class Login extends Model
{
    
    public function validateLogin()
    {
        $errors = [];

        if (!$this->email) {
            $errors['email'] = 'E-mail é um campo obrigatório';
        }

        if (!$this->password) {
            $errors['password'] = 'Por favor, informe a senha';    
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
    
    public function checkLogin() 
    {
        $this->validateLogin();

        $user = User::getOne(['email' => $this->email]);
        
        if ($user) {
            
            if ($user->end_date) {
                throw new AppException('Usuário desligado da empresa');
            }
            
            if (password_verify($this->password, $user->password)) {
                return $user;
            }
        }

        throw new AppException('Usuario/Senha inválidos');
    }
}
