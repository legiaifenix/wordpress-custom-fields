<?php
namespace legiaifenix\wpcftoop\CPT\Pages;


use legiaifenix\wpcftoop\CPT\ServiceInterface;
use legiaifenix\wpcftoop\Utils\ParserUtil;

class AdminPage extends Page implements ServiceInterface
{
    public function addPage()
    {
        if (!is_null($this->callback))
            return $this->callback();

        add_menu_page(
            $this->name,
            $this->name,
            'manage_options',
            ParserUtil::parseNameToDBFormat($this->name),
            [$this, 'template'],
            $this->icon,
            $this->position);
    }

    public function template()
    {
        require_once $this->template;
    }

    public function register()
    {
        add_action('admin_menu', [$this, 'addPage']);
    }

}