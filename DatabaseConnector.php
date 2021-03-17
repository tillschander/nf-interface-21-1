<?php

class DatabaseConnector implements StorageConnectorInterface
{
    public function read(string $key): string
    {
        echo "Read '$key' from database. \n";
        return "Till";
    }
}