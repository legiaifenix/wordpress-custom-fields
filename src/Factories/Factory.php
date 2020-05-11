<?php
namespace legiaifenix\wpcftoop\Factories;


interface Factory
{
    public function filePath(string $filePath);

    public function setName(string $name);

    public function create();
}