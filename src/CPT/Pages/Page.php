<?php
namespace legiaifenix\wpcftoop\CPT\Pages;


abstract class Page
{
    protected $name;
    protected $icon;
    protected $position;
    protected $callback;
    protected $template;

    public function __construct(string $name, string $icon, string $position, string $template, callable $callback = null)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->position = $position;
        $this->template = $template;
        $this->callback = $callback;
    }

    public abstract function addPage();

    public abstract function template();

}