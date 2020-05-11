<?php
namespace legiaifenix\wpcftoop\Factories;


use legiaifenix\wpcftoop\CPT\Pages\AdminPage;

class PageFactory implements Factory
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
     * @var array $options                  To help declare the requirements for the custom page, such as template and position
     */
    protected $options = [
        'icon'      => '',
        'position'  => 999,
        'template'  => 'admin.php',
        'callback'  => null
    ];

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
        $page = new AdminPage(
            $this->name,
            $this->options['icon'],
            $this->options['position'],
            $this->options['template']
        );

        return $page;
    }

}