<?php
namespace legiaifenix\wpcftoop\Factories;


class PostFactory implements Factory
{
    /**
     * @var string $filePath                As the path to a JSON file that would loop generate out CFT
     */
    protected $filePath;

    /**
     * @var string $name                    As the name of the CFT we want to generate, if we only desire one
     */
    protected $name;

    /**
     * @var array $options
     */
    protected $options;

    public function setOptions(array $options)
    {
        $this->options = $options;
        return $this;
    }

    public function setFilePath(string $filePath)
    {
        $this->filePath = $filePath;
        return $this;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function create()
    {
        print_r("Not yet developed");
    }
}