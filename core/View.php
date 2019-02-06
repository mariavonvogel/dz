<?php

namespace core;


class View
{
    public $data;

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function generate($templateView)
    {
        $smarty = new \Smarty();
        $smarty->assign('id', "$this->id");
        $smarty->display($templateView);
    }
}