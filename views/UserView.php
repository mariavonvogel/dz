<?php

namespace views;


use core\View;

class UserView extends View
{
    public function render($templateView, $data)
    {
        $smarty = new \Smarty();
        $smarty->assign('users', $data);
        $smarty->display($templateView);
    }
}