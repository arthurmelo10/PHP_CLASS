<?php

Class Model 
{
    protected static string $tableName = '';
    protected static array $columns = [];
    protected array $values = [];

    public function __construct(array $arr, $sanitize = true)
    {
        $this->loadFromArray($arr, $sanitize);
    }

    /**
     * @return mixed
     */
    public function __get($key) 
    {
        return isset($this->values[$key])? $this->values[$key] : null ;
    }

    public function __set($key, $value): void
    {
        $this->values[$key] = $value;
    }

    public function getValues()
    {
        return $this->values;
    }

    public static function get(array $filters = [], string $columns = '*')
    {
        $objects = [];

        $result = self::getResultSetFromSelect($filters, $columns);

        if ($result) {
            $class = get_called_class();
            while ($row = $result->fetch_assoc()) {
                array_push($objects, new $class($row));
            }
        }

        return $objects;
    }

    public static function getOne(array $filters = [], string $columns = '*')
    {
        $class = get_called_class();

        $result = self::getResultSetFromSelect($filters, $columns);

        return $result ? new $class($result->fetch_assoc()) : null;
    }

    public static function getResultSetFromSelect(array $filters = [], string $columns = '*') 
    {
        $sql = "SELECT $columns FROM " . static::$tableName . self::getFilters($filters);

        $result = Database::getResultFromQuery($sql);

        if ($result->num_rows === 0) {
            return null;
        }

        return $result;
    }

    public function insert()
    {
        $sql = "INSERT INTO " . static::$tableName . " ("
            . implode(", ", static::$columns) . ") VALUES ( ";

        foreach(static::$columns as $column) {
            $sql .= static::getFormattedValue($this->$column) . ","; // pegar os valores que temos em cada coluna
        }

        $sql[strlen($sql)-1] = ')';

        $id = Database::executeSQL($sql);

        $this->id = $id;
    }

    public function update()
    {
        $sql = "UPDATE " . static::$tableName . " SET ";

        foreach (static::$columns as $column) {
            $sql.= " $column = " . static::getFormattedValue($this->$column) . ",";
        }

        $sql[strlen($sql)-1] = ' ';
        
        $sql .= "WHERE id = {$this->id}";

        Database::executeSQL($sql);
    }

    public static function deleteById($id)
    {
        $sql = "DELETE FROM " . static::$tableName . " WHERE id = {$id}";
        
        Database::executeSQL($sql);
    }

    public static function getCount($filters = [])
    {
        $result = static::getResultSetFromSelect($filters, 'count(*) as count');

        return $result->fetch_assoc()['count'];
    }

    private function loadFromArray(array $arr, $sanitize = true): void
    {
        if ($arr) {
            foreach ($arr as $key => $value) {

                $cleanValue = $value;

                if ($sanitize && isset($cleanValue)) {
                    $cleanValue = strip_tags(trim($cleanValue)); // retira as tags php e html
                    $cleanValue = htmlentities($cleanValue,ENT_NOQUOTES);
                }

                $this->$key = $cleanValue;
            }
        }
    }

    private static function getFilters($filters)
    {
        /**
         * Resposnsável por montar a cláusula WHERE
         */
        
        $sql = '';

        if (count($filters) > 0) {
            $sql .= ' WHERE 1 = 1';
            foreach ($filters as $column => $value) {
                if ($column == 'raw') {
                    $sql .= " AND $value ";
                } else {
                    $sql .= " AND $column = " . static::getFormattedValue($value);
                }
            }
        }

        return $sql;
    }

    private static function getFormattedValue($value): mixed
    {
        if (is_null($value)) {
            return 'NULL';
        }

        if (gettype($value) === 'string') {
            return "'$value'";
        }

        return $value;
    }
}