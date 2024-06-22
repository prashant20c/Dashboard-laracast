<?php

class ConnectDatabase
{

    public $connection;

    public function __construct(array $config, string $username = 'prashant', string $password = 'pass123')
    {
        try {
            $dsn = 'mysql:' . http_build_query($config, '', ';');
            $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
    }

    public function executeQuery($query,$prams): PDOStatement|false 
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($prams);
        return $statement;
    }
}
