<?php

class User
{
    private string $name;

    public function __construct(StorageConnectorInterface $db)
    {
        $this->name = $db->read('name');
    }
}