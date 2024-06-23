<?php

class ConnectDatabase
{

    public $connection;
    public $statement;

    public function __construct(array $config, string $username = 'prashant', string $password = 'pass123')
    {
        try {
            $dsn = 'mysql:' . http_build_query($config, '', ';');
            $this->connection = new PDO($dsn, $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
    }

    public function executeQuery($query, $prams)
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($prams);
        return $this;
    }

    public function find()
    {

        return $this->statement->fetch();
    }

    public function findOrFail()
    {

        $result = $this->find();

        if (!$result) {
            abort();
        };


        return $result;
    }
}
