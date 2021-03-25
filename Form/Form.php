<?php

namespace guruarif\guruphp\Form;

use guruarif\guruphp\Model;

/**
 *
 * Class Form
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp\Form
 */

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}