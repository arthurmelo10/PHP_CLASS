<?php
class User extends Model
{
    /**
     * Regras de negócio
     * Campos a serem preenchidos 
     */

     protected static string $tableName = 'users';
     /**
      * Mini framework de persistência
      */
     protected static array $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',
     ];

     public static function getActiveUsers()
     {
      return static::getCount([
         "raw" => "end_date IS NULL"
      ]);
     }

     public function insert()
     {
         $this->validate();
         $this->is_admin = $this->is_admin ? 1 : 0;
         if (!$this->end_date) $this->end_date = null;
         $this->password = password_hash($this->password, PASSWORD_DEFAULT);
         return parent::insert();
     }
     
     public function update()
     {
         $this->validate();
         $this->is_admin = $this->is_admin ? 1 : 0;
         if (!$this->end_date) $this->end_date = null;
         $this->password = password_hash($this->password, PASSWORD_DEFAULT);
         return parent::update();
     }

     private function validate()
     {
         $errors = [];

         if (!$this->name) {
            // print_r($errors);
            $errors['name'] = 'Nome é um campo obrigatório.';
         }

         if (!$this->email) {
            //print_r($errors);
            $errors['email'] = 'Email é um campo obrigatório.';
         } 
         
         if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email Inválido';
         }

         if (!$this->start_date) {
            $errors['start_date'] = 'Data de Admissão é um campo obrigatório';
         } 
         
         if (!DateTime::createFromFormat('Y-m-d', $this->start_date)) {
            $errors['start_date'] = 'Data de Admissão deve seguir o padrão dd/mm/aaaa. ';
         }
         
         if ($this->end_date && DateTime::createFromFormat('Y-m-d', $this->start_date)) {
            $errors['end_date'] = 'Data de desligamento deve seguir o padrão dd/mm/aaaa. ';
         }

         if (!$this->password) {
            $errors['password'] = 'Senha é um campo obrigatório.';
         }
         
         if (!$this->confirm_password) {
            $errors['confirm_password'] = 'Confirmação de Senha é um campo obrigatório.';
         }

         if ($this->password && $this->confirm_password
         && $this->password !== $this->confirm_password) {
            $errors['password'] = 'As senhas não são iguais';
            $errors['confirm_password'] = 'As senhas não são iguais';
         }
         
         if (count($errors) > 0) {
            throw new ValidationException($errors);
         }
     }
}