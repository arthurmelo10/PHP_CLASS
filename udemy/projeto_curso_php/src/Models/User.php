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
}