<?php

interface DatabaseInterface
{
    public static function getConnection();
    public static function createTableForDatabase();
    public static function createUsersForDatabse();
    public static function getResultFronQuery($sql);
}