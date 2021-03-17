<?php

interface StorageConnectorInterface
{
    public function read(string $key): string;
}