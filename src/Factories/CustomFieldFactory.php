<?php
namespace legiaifenix\wpcftoop\Factories;


class CustomFieldFactory implements Factory
{
    /**
     * @var string $filePath                As the path to a JSON file that would loop generate out CFT
     */
    protected $filePath;

    /**
     * @var string $name                    As the name of the CFT we want to generate, if we only desire one
     */
    protected $name;

    public function filePath(string $filePath)
    {
        // TODO: Implement filePath() method.
    }

    public function setName(string $name)
    {
        // TODO: Implement setName() method.
    }

    public function create()
    {

    }
}