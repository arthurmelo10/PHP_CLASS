<?php
class User extends Model
{
    /**
     * Regras de negócio
     * Campos a serem preenchidos 
     */

     protected static $tableName = 'users';
     /**
      * Mini framework de persistência
      */
     protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',
     ];
}