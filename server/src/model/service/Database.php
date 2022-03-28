<?php namespace Calendar\Model\Service;


class Database
{
    private static \mysqli $db;

    public static function getDB()
    {
        if(isset(self::$db)) return self::$db;

        try {
            self::$db = new \mysqli(
                $_ENV["DB_SERVER_NAME"],
                $_ENV["DB_USERNAME"],
                $_ENV["DB_PASSWORD"],
                $_ENV["DB_NAME"],
                $_ENV["DB_PORT"]
            );
        }
        catch(\Exception $err) {
            echo "Database Error: $err";
        }

        return self::$db;
    }
}