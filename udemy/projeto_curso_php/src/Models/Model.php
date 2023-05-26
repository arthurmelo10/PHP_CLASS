<?php

Class Model 
{
    protected static string $tableName = '';
    protected static array $columns = [];
    protected array $values = [];

    public function __construct(array $arr)
    {
        $this->loafFromArray($arr);
    }

    public function loafFromArray(array $arr)
    {
        if ($arr) {
            foreach ($arr as $key => $value) {
                $this->$key = $value;
            }
        }   
    }

    /**
     * @return mixed
     */
    public function __get($key) 
    {
        return $this->values[$key];
    }

    public function __set($key, $value): void
    {
        $this->values[$key] = $value;
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
        $sql = "UPDATE" . static::$tableName . "SET ";
        foreach (static::$columns as $column) {
            $sql.= "$column = " .static::getFormattedValue($this->$column). ",";
        }

        $sql[strlen($sql)-1] = ' ';

        $sql .= "WHERE id = {$this->id}";

        Database::executeSQL($sql);
    }

    private static function getFilters($filters)
    {
        $sql = '';

        if (count($filters) > 0) {
            $sql .= ' WHERE 1 = 1';
            foreach ($filters as $column => $value) {
                $sql .= " AND $column = " . static::getFormattedValue($value);
            }
        }

        return $sql;
    }

    private static function getFormattedValue($value): mixed
    {
        if (is_null($value)) {
            return null;
        }

        if (gettype($value) === 'string') {
            return "'$value'";
        }

        return $value;
    }
}