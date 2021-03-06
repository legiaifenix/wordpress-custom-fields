<?php
namespace legiaifenix\wpcftoop\Factories;


interface Factory
{
    public function setFilePath(string $filePath);

    public function setName(string $name);

    public function setOptions(array $options);

    public function create();
}