<?php

class FileConnector implements StorageConnectorInterface
{
    public function read(string $key): string
    {
        echo "Read '$key' from file system. \n";

        return "Till";
    }
}