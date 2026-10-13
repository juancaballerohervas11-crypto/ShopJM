<?php
class DB{
    public static function connect(){
        $host = getenv("DB_HOST");
        $username = getenv("DB_USER");
        $database = getenv("DB_NAME");
        $password = getenv("DB_PASS");

        return new mysqli($host, $username, $password, $database);
    }
}
?>
